<?php

class hozing_hooks {

	public function __construct() {
		
		
		
		
		// Return HTML for Header
		add_filter( 'hozing_render_header', array( $this, 'hozing_render_header' ) );

		// Return HTML for Footer
		add_filter( 'hozing_render_footer', array( $this, 'hozing_render_footer' ) );


		/* Get All Header */
		add_filter( 'hozing_list_header', array( $this, 'hozing_list_header' ) );

		/* Get All Footer */
		add_filter( 'hozing_list_footer', array( $this,  'hozing_list_footer' ) );

		/* Define Layout */
		add_filter( 'hozing_define_layout', array( $this,  'hozing_define_layout' ) );

		/* Define Wide */
		add_filter( 'hozing_define_wide_boxed', array( $this,  'hozing_define_wide_boxed' ) );

		/* Get layout */
		add_filter( 'hozing_get_layout', array( $this, 'hozing_get_layout' ) );

		/* Get layout hotel */
		add_filter( 'hozing_get_layout_hotel', array( $this, 'hozing_get_layout_hotel' ) );

		/* Get sidebar */
		add_filter( 'hozing_theme_sidebar', array( $this, 'hozing_theme_sidebar' )  );

		/* Get sidebar Hotel*/
		add_filter( 'hozing_hotel_theme_sidebar', array( $this, 'hozing_hotel_theme_sidebar' )  );
		

		/* Wide or Boxed */
		add_filter( 'hozing_width_site', array( $this, 'hozing_width_site' ) );

		

    }

   
	
	public function hozing_render_header(){

		$current_id = hozing_get_current_id();

		// Get header default from customizer
		$global_header = get_theme_mod('global_header','default');

		// Header in Metabox of Post, Page
	    $meta_header = get_post_meta($current_id, 'ova_met_header_version', 'true');
	  	
	    // Header use in post,page
	    if( $current_id != '' && $meta_header != 'global'  && $meta_header != '' ){
	    	$header = $meta_header;
	  	}else if( ova_is_blog_archive() ){ // Header use in blog
	  		$header = get_theme_mod('blog_header', 'default');
	  	}else if( is_singular('post') ){ // Header use in single post
	  		$header = get_theme_mod('single_header', 'default');
	  	}else{ // Header use in global
	  		$header = $global_header;
	  	}

		$header_split = explode(',', $header);

		if ( hozing_is_elementor_active() && isset( $header_split[1] ) ) {

			$post_id_header = hozing_get_id_by_slug( $header_split[1] );
			return Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $post_id_header );

		}else if ( hozing_is_elementor_active() && !isset( $header_split[1] ) ) {

			return get_template_part( 'header/header', $header );

		}else if ( !hozing_is_elementor_active()  ) {

			return get_template_part( 'header/header', 'default' );

		}

	}


	
	public function hozing_render_footer(){

		$current_id = hozing_get_current_id();

		// Get Footer default from customizer
		$global_footer = get_theme_mod('global_footer', 'default' );

		// Footer in Metabox of Post, Page
	    $meta_footer =  get_post_meta( $current_id, 'ova_met_footer_version', 'true' );
		
	  	

	  	if( $current_id != '' && $meta_footer != 'global'  && $meta_footer != '' ){
	  		$footer = $meta_footer;
	  	}else if( ova_is_blog_archive() ){
	  		$footer = get_theme_mod('blog_footer', 'default');
	  	}else if( is_singular('post') ){
	  		$footer = get_theme_mod('single_footer', 'default');
	  	}else{
	  		$footer = $global_footer;
	  	}

	  	$footer_split = explode(',', $footer);

		if ( hozing_is_elementor_active() && isset( $footer_split[1] ) ) {

			$post_id_footer = hozing_get_id_by_slug( $footer_split[1] );
			return Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $post_id_footer );
			
		}else if ( hozing_is_elementor_active() && !isset( $footer_split[1] ) ) {

			get_template_part( 'footer/footer', $footer );

		}else if( !hozing_is_elementor_active() ){

			get_template_part( 'footer/footer', 'default' );			
		}
	}



	function hozing_list_header(){

	    $hf_header_array['default'] = esc_html__( 'Default', 'hozing' );

	    if( !hozing_is_elementor_active() ) return $hf_header_array;

	    $args_hf = array(
	        'post_type' => 'ova_framework_hf_el',
	        'post_status'   => 'publish',
	        'posts_per_page' => '-1',
	        'meta_query' => array(
	            array(
	                'key'     => 'hf_options',
	                'value'   => 'header',
	                'compare' => '=',
	            ),
	        )
	    );

	    $hf = new WP_Query( $args_hf );

	    if($hf->have_posts()):  while($hf->have_posts()) : $hf->the_post();
	        global $post;
	        $hf_header_array[ 'ova,'.$post->post_name ] = get_the_title();

	    endwhile;endif; wp_reset_postdata();

	    return $hf_header_array;
	}

	
	function hozing_list_footer(){

	    $hf_footer_array['default'] = esc_html__( 'Default', 'hozing' );

	    if( !hozing_is_elementor_active() ) return $hf_footer_array;

	    $args_hf = array(
	        'post_type' => 'ova_framework_hf_el',
	        'post_status'   => 'publish',
	        'posts_per_page' => '-1',
	        'meta_query' => array(
	            array(
	                'key'     => 'hf_options',
	                'value'   => 'footer',
	                'compare' => '=',
	            ),
	        )
	    );

	    $hf = new WP_Query( $args_hf );

	    if($hf->have_posts()):  while($hf->have_posts()) : $hf->the_post();
	        global $post;
	        $hf_footer_array[ 'ova,'.$post->post_name ] = get_the_title();

	    endwhile;endif; wp_reset_postdata();

	    return $hf_footer_array;
	}


	function hozing_define_layout(){
		return array(
			'layout_1c' => esc_html__('No Sidebar', 'hozing'),
			'layout_2r' => esc_html__('Right Sidebar', 'hozing'),
			'layout_2l' => esc_html__('Left Sidebar', 'hozing'),
		);
	}


	function hozing_get_layout(){
		
		$current_id = hozing_get_current_id();

		$layout = get_post_meta( $current_id, 'ova_met_main_layout', true );

		if( is_singular( 'post' ) ){

		    $layout = get_theme_mod( 'single_layout', 'layout_2r' );
		    $width_sidebar = get_theme_mod( 'single_sidebar_width', '320' );

		}else if( hozing_is_woo_active() && is_product_category() ){

			$layout = get_theme_mod( 'woo_layout', 'layout_1c' );
			$width_sidebar = get_theme_mod( 'woo_sidebar_width', '320' );
			
		}else if( ova_is_blog_archive() ){

		    $layout = get_theme_mod( 'blog_layout', 'layout_2r' );
		    $width_sidebar = get_theme_mod( 'blog_sidebar_width', '320' );

		}else{

		    $layout = get_theme_mod( 'global_layout', 'layout_2r' );
		    $width_sidebar = get_theme_mod( 'global_sidebar_width', '320' );
		}

		if( $current_id && $layout == 'global' ){
		    $layout = get_post_meta( $current_id, 'ova_met_main_layout', true );
		}

		if( isset( $_GET['layout_sidebar'] ) ){
			$layout = $_GET['layout_sidebar'];
		}

		return array( $layout, $width_sidebar );
	}

	function hozing_get_layout_hotel(){
		$layout = get_theme_mod( 'woo_layout', 'layout_1c' );
		$width_sidebar = get_theme_mod( 'woo_sidebar_width', '320' );

		if( isset( $_GET['layout_sidebar'] ) ){
			$layout = $_GET['layout_sidebar'];
		}
		return array( $layout, $width_sidebar );
	}


	

	function hozing_width_site(){
		$current_id = hozing_get_current_id();
		$width_site = get_post_meta( $current_id, 'ova_met_width_site', true );

		if( $current_id && $width_site != 'global' ){
		    $width = $width_site;
		}else{
			$width = get_theme_mod( 'global_width_site', 'wide' );
		}

		return $width;
	}

	function hozing_theme_sidebar(){
		$layout_sidebar = apply_filters( 'hozing_get_layout', '' );
		return $layout_sidebar[0];
	}

	function hozing_hotel_theme_sidebar(){
		$layout = get_theme_mod( 'woo_layout', 'layout_1c' );
		if( isset( $_GET['layout_sidebar'] ) ){
			$layout = $_GET['layout_sidebar'];
		}
		return $layout;	
	}

	function hozing_define_wide_boxed(){
		return array(
			'wide' => esc_html__('Wide', 'hozing'),
			'boxed' => esc_html__('Boxed', 'hozing'),
		);
	}

}

new hozing_hooks();