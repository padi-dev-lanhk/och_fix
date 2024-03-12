<?php

$nicdark_themename = "hotelbooking";

//TGMPA required plugin
require_once get_template_directory() . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'nicdark_register_required_plugins' );
function nicdark_register_required_plugins() {

    $nicdark_plugins = array(

        //cf7
        array(
            'name'      => esc_html__( 'Contact Form 7', 'hotelbooking' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),

        //wp import
        array(
            'name'      => esc_html__( 'Wordpress Importer', 'hotelbooking' ),
            'slug'      => 'wordpress-importer',
            'required'  => true,
        ),

        //nd booking
        array(
            'name'      => esc_html__( 'ND Booking', 'hotelbooking' ),
            'slug'      => 'nd-booking',
            'required'  => true,
        ),

        //nd shortcodes
        array(
            'name'      => esc_html__( 'ND Shortcodes', 'hotelbooking' ),
            'slug'      => 'nd-shortcodes',
            'required'  => true,
        ),

        //revslider
        array(
            'name'               => esc_html__( 'Revolution Slider', 'hotelbooking' ),
            'slug'               => 'revslider', // The plugin slug (typically the folder name).
            'source'             => get_template_directory().'/plugins/revslider.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        
        //Visual Composer
        array(
            'name'               => esc_html__( 'Visual Composer', 'hotelbooking' ),
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => get_template_directory().'/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),

    );


    $nicdark_config = array(
        'id'           => 'hotelbooking',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table. 
    );

    tgmpa( $nicdark_plugins, $nicdark_config );
}
//END tgmpa


//translation
load_theme_textdomain( 'hotelbooking', get_template_directory().'/languages' );


//register my menus
function nicdark_register_my_menus() {
  register_nav_menu( 'main-menu', esc_html__( 'Main Menu', 'hotelbooking' ) );  
}
add_action( 'init', 'nicdark_register_my_menus' );


//Content_width
if (!isset($content_width )) $content_width  = 1180;


//automatic-feed-links
add_theme_support( 'automatic-feed-links' );

//post-thumbnails
add_theme_support( "post-thumbnails" );

//post-formats
add_theme_support( 'post-formats', array( 'quote', 'image', 'link', 'video', 'gallery', 'audio' ) );

//title tag
add_theme_support( 'title-tag' );

// Sidebar
function nicdark_add_sidebars() {

    // Sidebar Main
    register_sidebar(array(
        'name' =>  esc_html__('Sidebar','hotelbooking'),
        'id' => 'nicdark_sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

}
add_action( 'widgets_init', 'nicdark_add_sidebars' );

//add css and js
function nicdark_enqueue_scripts()
{
	
    //css
    wp_enqueue_style( 'nicdark-style', get_stylesheet_uri() );
    wp_enqueue_style( 'nicdark-fonts', nicdark_google_fonts_url(), array(), '1.0.0' );

    //comment-reply
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

    //navigation
    //wp_enqueue_script("full-page", "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js", array('jquery'), false, true );
    //wp_enqueue_script("nicdark_navigation", get_template_directory_uri() . "/js/nicdark_navigation.js", array('jquery'), false, true );

}
add_action("wp_enqueue_scripts", "nicdark_enqueue_scripts");
//end js


//logo settings
add_action('customize_register','nicdark_customizer_logo');
function nicdark_customizer_logo( $wp_customize ) {
  

    //Logo
    $wp_customize->add_setting( 'nicdark_customizer_logo_img', array(
      'type' => 'option', // or 'option'
      'capability' => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
      'default' => '',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => 'nicdark_sanitize_callback_logo_img',
      //'sanitize_js_callback' => '', // Basically to_json.
    ) );
    $wp_customize->add_control( 
        new WP_Customize_Media_Control( 
            $wp_customize, 
            'nicdark_customizer_logo_img', 
            array(
              'label' => esc_html__( 'Logo', 'hotelbooking' ),
              'section' => 'title_tagline',
              'mime_type' => 'image',
            ) 
        ) 
    );

    //sanitize_callback
    function nicdark_sanitize_callback_logo_img($nicdark_logo_img_value) {
        return absint($nicdark_logo_img_value);
    }


}
//end logo settings


//woocommerce support
add_theme_support( 'woocommerce' );


//define nicdark theme option
function nicdark_theme_setup(){
    add_option( 'nicdark_theme_author', 1, '', 'yes' );
    update_option( 'nicdark_theme_author', 1 );
}
add_action( 'after_setup_theme', 'nicdark_theme_setup' );



//START add google fonts
function nicdark_google_fonts_url() {
    $nicdark_font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'hotelbooking' ) ) {
        $nicdark_font_url = add_query_arg( 'family', urlencode( 'Gilda+Display|Roboto:300,400,700' ), "//fonts.googleapis.com/css" );
    }
    return $nicdark_font_url;
}
//END add google fonts

//footer
function footer_witgets_init(){
    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
}
add_action('widgets_init','footer_witgets_init');
add_action('auto_get_news_from_url', 'get_news_from_url');
function get_news_from_url()
{
    ini_set('memory_limit', '-1');

    if (!function_exists('file_get_html')) {
        require_once('simple_html_dom.php');
    }
    $args = array(
        'post_type' => 'url-crawler',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
        $url = get_field('url');
        $news_item = get_field('news_item');
        $title_selector = get_field('title');
        $except_selector = get_field('except');
        $image_selector = get_field('image');
        $content_selector = get_field('content');
        $date_selector = get_field('date_post');
        $source =  get_field('nguon');
        $keyword = get_field('keyword');
        // Create DOM from URL or file
        $html = file_get_html($url);
        // Find all news item
        foreach ($html->find($news_item) as $item) {
            $newsWrap = $item->find('a', 0);
            // Get title
            $titleNews = $item->find($title_selector, 0)->plaintext;
            
            if (strpos(strtoupper($titleNews), strtoupper($keyword)) !== false) {
                // Get except
                $exceptNews = $item->find($except_selector, 0)->plaintext;
               
                // Get Image Featured:
                $image = $item->find($image_selector, 0)->src;
                // Get Date:
                if ($source === 'cafebiz') {
                    $urlContent = $newsWrap->getAttribute('href');
                    $contentHtml = file_get_html($urlContent);
                    $content = $contentHtml->find($content_selector, 0);
                    $date = $item->find($date_selector, 0)->innertext;
                    $dateString = substr(explode(':', str_replace(' ', '', $date))[0], 0, -2);
                    $dateArr = explode('/', $dateString);
                    $newDateString = $dateArr[2] . '-' . $dateArr[1] . '-' .$dateArr[0];
                } else if ($source === 'ndh') {
                    $urlContent = 'https://ndh.vn'.$newsWrap->getAttribute('href');
                    $contentHtml = file_get_html($urlContent);
                    $date = $contentHtml->find('span.date', 0)->innertext;
                    $dateString = substr(explode(':', str_replace(' ', '', $date))[0], 0, -2);
                    $dateArr = explode('/', $dateString);
                    $newDateString = $dateArr[2] . '-' . $dateArr[1] . '-' . $dateArr[0];
                } else if ($source === 'vnexpress') {
                    $urlContent = $newsWrap->getAttribute('href');
                    $contentHtml = file_get_html($urlContent);
                    $content = $contentHtml->find($content_selector,0);
                    
                    $date = $contentHtml->find('span.date', 0)->innertext;
                    $dateString = explode(',',$date)[1];
                    $dateArr = explode('/', $dateString);
                    $newDateString = $dateArr[2] . '-' .((int)$dateArr[1] > 10 ? (int)$dateArr[1] : '0'. (int)$dateArr[1] ) . '-' . ((int)$dateArr[0] > 10 ? (int)$dateArr[0] : '0' . (int)$dateArr[0]);
                } else if ($source === 'dantri') {
                    $urlContent = $newsWrap->getAttribute('href');
                    $contentHtml = file_get_html($urlContent);
                    $content = $contentHtml->find($content_selector, 0);

                    $date = $contentHtml->find('span.date', 0)->innertext;
                    $dateString = explode(',', $date)[1];
                    $dateArr = explode('/', $dateString);
                    $newDateString = $dateArr[2] . '-' . ((int)$dateArr[1] > 10 ? (int)$dateArr[1] : '0' . (int)$dateArr[1]) . '-' . ((int)$dateArr[0] > 10 ? (int)$dateArr[0] : '0' . (int)$dateArr[0]);
                } else if ($source === 'soha') {
                    $urlContent = 'https://soha.vn' . $newsWrap->getAttribute('href');
                    $contentHtml = file_get_html($urlContent);
                    $content = $contentHtml->find($content_selector, 0);
                    // Get except
                    $exceptNews = $contentHtml->find($except_selector, 0)->plaintext;
                    $date = $contentHtml->find('.op-published', 0)->innertext;
                    $dateString = explode(' ', $date)[0];
                    $dateArr = explode('/', $dateString);
                    $newDateString = $dateArr[2] . '-' . ((int)$dateArr[1] > 10 ? (int)$dateArr[1] : '0' . (int)$dateArr[1]) . '-' . ((int)$dateArr[0] > 10 ? (int)$dateArr[0] : '0' . (int)$dateArr[0]);
                } else if ($source === 'vietnammoi') {
                    $urlContent = 'https://vietnammoi.vn' . $newsWrap->getAttribute('href');
                    $contentHtml = file_get_html($urlContent);
                    $content = $contentHtml->find($content_selector, 0);
                    // Get except
                    $exceptNews = $contentHtml->find($except_selector, 0)->plaintext;
                    $date = $item->find('span.time', 0)->innertext;
                    $dateString = explode(' | ', $date)[1];
                    $dateArr = explode('/', $dateString);
                    $newDateString = $dateArr[2] . '-' . ((int)$dateArr[1] > 10 ? (int)$dateArr[1] : '0' . (int)$dateArr[1]) . '-' . ((int)$dateArr[0] > 10 ? (int)$dateArr[0] : '0' . (int)$dateArr[0]);
                } else if ($source === 'cafef') {
                    $urlContent = 'https://cafef.vn' . $newsWrap->getAttribute('href');
                    $contentHtml = file_get_html($urlContent);
                    $content = $contentHtml->find($content_selector, 0);
                   
                    // Get except
                    $exceptNews = $contentHtml->find($except_selector, 0)->plaintext;
                   
                    $date = $contentHtml->find('span.pdate', 0)->innertext;
                    
                    $dateString = explode(' - ', $date)[0];
                    $dateArr = explode('-', $dateString);
                    $newDateString = $dateArr[2] . '-' . ((int)$dateArr[1] > 10 ? (int)$dateArr[1] : '0' . (int)$dateArr[1]) . '-' . ((int)$dateArr[0] > 10 ? (int)$dateArr[0] : '0' . (int)$dateArr[0]);
                } else if ($source === 'kemtrangtien') {
                } else if ($source === 'givral') {
                } else if ($source === 'sunrise') {
                } else if ($source === 'starcity') {
                }


                // Remove all link
                // foreach ($content->find('a') as $element) {
                //     if (isset($element->href)) {
                //         $element->href = null;
                //     }
                // }
                if (!is_admin()) {
                    require_once(ABSPATH . 'wp-admin/includes/post.php');
                }
                
                if (post_exists($titleNews) == 0) {
                    $postId = wp_insert_post(
                        array(
                            'post_type' => 'post',
                            'post_status' => 'draft',
                            'post_title' => $titleNews,
                            'post_content' => str_replace('article', 'div', $content),
                            'post_excerpt' => $exceptNews,
                            'post_category' => array(129),
                            'post_date' => $newDateString
                        )
                    );
                    if ($postId == 0 || !is_numeric($postId)) {
                        return 'post failed ' . $postId;
                    }
                }
            }
        }
        die;
    // Find all links
    // foreach ($html->find('a') as $element)
    //     echo $element->href . '<br>';
    endwhile;

    wp_reset_postdata();
}

function prepare_post_type()
{
    $labels = array(
        'name' => esc_html__('PVN Link Crawler', 'law-firm'),
        'all_items' => esc_html__('PVN Link Crawler', 'law-firm'),
        'singular_name' => esc_html__('PVN Link Crawler', 'law-firm'),
        'add_new' => esc_html__('Thêm PVN Link Crawler', 'law-firm'),
        'add_new_item' => esc_html__('Thêm PVN Link Crawler mới', 'law-firm'),
        'edit' => esc_html__('Edit', 'law-firm'),
        'edit_item' => esc_html__('Sửa PVN Link Crawler', 'law-firm'),
        'new_item' => esc_html__('PVN Link Crawler mới', 'law-firm'),
        'view' => esc_html__('Xem PVN Link Crawler', 'law-firm'),
        'view_item' => esc_html__('Xem PVN Link Crawler', 'law-firm'),
        'search_items' => esc_html__('Tìm kiếm PVN Link Crawler', 'law-firm'),
        'not_found' => esc_html__('Không có PVN Link Crawler nào được tìm thấy', 'law-firm'),
        'not_found_in_trash' => esc_html__('Không có PVN Link Crawler nào được tìm thấy', 'law-firm'),
        'parent' => esc_html__('PVN Link Crawler cha', 'law-firm'),
    );
    $args = array(
        'labels' => $labels,
        'description' => esc_html__('This is where you can add new Team', 'law-firm'),
        'public' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'show_ui' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'hierarchical' => false,
        'menu_position' => 8,
        'rewrite' => array('slug' => 'url-crawler', 'with_front' => true),
        'query_var' => true,
        'has_archive' => 'false',
    );
    register_post_type('url-crawler', $args);
}
add_action('init', 'prepare_post_type', 0);