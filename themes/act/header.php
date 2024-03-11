<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 
    <meta charset="<?php bloginfo('charset'); ?>"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Gilda+Display&display=swap&subset=latin-ext" rel="stylesheet">  	
	<style>
		.page-id-2023 .header_none,.page-id-2126 .header_none,
		.page-id-2186 .header_none,.page-id-2149 .header_none,
		.page-id-2215 .header_none,.page-id-2212 .header_none,
		.page-id-2266 .header_none,.page-id-3373 .header_none,
		.page-id-4032 .header_none,.page-id-4041 .header_none,
		.page-id-4044 .header_none,.page-id-4046 .header_none,
		.page-id-4048 .header_none,.page-id-4050 .header_none,
		.page-id-4052 .header_none,.page-id-4054 .header_none{
			display:none;
		}
		.page-id-2126 .nd_options_section.nd_options_height_50,
		.page-id-2186 .nd_options_section.nd_options_height_50,
		.page-id-2149 .nd_options_section.nd_options_height_50,
		.page-id-2215 .nd_options_section.nd_options_height_50,
		.page-id-2212 .nd_options_section.nd_options_height_50,
		.page-id-2023 .nd_options_section.nd_options_height_50,
		.page-id-2266 .nd_options_section.nd_options_height_50,
		.page-id-3373 .nd_options_section.nd_options_height_50,
		.page-id-4032 .nd_options_section.nd_options_height_50,
		.page-id-4041 .nd_options_section.nd_options_height_50,
		.page-id-4044 .nd_options_section.nd_options_height_50,
		.page-id-4046 .nd_options_section.nd_options_height_50,
		.page-id-4048 .nd_options_section.nd_options_height_50,
		.page-id-4050 .nd_options_section.nd_options_height_50,
		.page-id-4052 .nd_options_section.nd_options_height_50,
		.page-id-4054 .nd_options_section.nd_options_height_50{
				display: none;
		}
		.page-id-2023 #footer-sidebar,.page-id-2126 #footer-sidebar,
		.page-id-2186 #footer-sidebar,.page-id-2149 #footer-sidebar,
		.page-id-2215 #footer-sidebar,.page-id-2212 #footer-sidebar,
		.page-id-2266 #footer-sidebar,.page-id-3373 #footer-sidebar,
		.page-id-4032 #footer-sidebar,.page-id-4041 #footer-sidebar,
		.page-id-4044 #footer-sidebar,.page-id-4046 #footer-sidebar,
		.page-id-4048 #footer-sidebar,.page-id-4050 #footer-sidebar,
		.page-id-4052 #footer-sidebar,.page-id-4054 #footer-sidebar
		{
			display:none;
		}
	</style>
<?php wp_head(); ?>	  
</head>  
	<?php
$field = get_field_object( 'color' );
$value = $field['value'];
$label = $field['choices'][ $value ];
?>
<body id="start_nicdark_framework" <?php body_class(); ?>>

<!--START theme-->
<div class="nicdark_site nicdark_bg_white <?php if ( is_front_page() ) { echo esc_html("nicdark_front_page"); } ?> ">	
	
<?php if( function_exists('nicdark_headers')){ do_action("nicdark_header_nd"); }else{ ?>

<!--START section-->
<div class="nicdark_section header_none ">

    <!--start container-->
    <div class="nicdark_container nicdark_clearfix">
        
        <!--START LOGO OR TAGLINE-->
        <?php
            
            $nicdark_customizer_logo_img = get_option( 'nicdark_customizer_logo_img' );
            if ( $nicdark_customizer_logo_img == '' or $nicdark_customizer_logo_img == 0 ) { ?>
                
            <div class="nicdark_grid_3 nicdark_text_align_center_responsive header-logo">
                <div class="nicdark_section nicdark_height_10"></div>
                <a href="<?php echo esc_url(home_url()); ?>"><h3 class="nicdark_color_white"><?php echo esc_html(get_bloginfo( 'name' )); ?></h3></a>
                <div class="nicdark_section nicdark_height_10"></div>
                <a href="<?php echo esc_url(home_url()); ?>"><p class="nicdark_font_size_13"><?php echo esc_html(get_bloginfo( 'description' )); ?></p></a>
                <div class="nicdark_section nicdark_height_10"></div>
            </div>

        <?php

            }else{ 

                $nicdark_customizer_logo_img = wp_get_attachment_url($nicdark_customizer_logo_img);

            ?>

            <div class="nicdark_grid_3 nicdark_text_align_center_responsive header-logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img class="nicdark_section" src="<?php echo esc_url($nicdark_customizer_logo_img); ?>" style="margin-top: 10px;">
                </a>
            </div>

        <?php } ?>
        <!--END LOGO OR TAGLINE-->
        


        <div class="nicdark_grid_9 nicdark_text_align_center_responsive menu-mobile">

            <!--open menu responsive icon-->
            <div class="nicdark_section nicdark_display_none nicdark_display_block_all_iphone">
                <a class="nicdark_open_navigation_1_sidebar_content nicdark_open_navigation_1_sidebar_content" href="#">
                    <img alt="" class="" width="25" src="<?php echo get_template_directory_uri(); ?>/img/icon-menu.svg">
                </a>
            </div>
            <!--open menu responsive icon-->

        	<div class="nicdark_section nicdark_navigation_1">        
        		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>       
        	</div>


        </div>

    </div>
    <!--end container-->

</div>
<!--END section-->


<!--START menu responsive-->
<div class="bgr_menu_responsive nicdark_navigation_1_sidebar_content nicdark_padding_40 nicdark_box_sizing_border_box nicdark_overflow_hidden nicdark_overflow_y_auto nicdark_transition_all_08_ease nicdark_height_100_percentage nicdark_position_fixed nicdark_width_300 nicdark_right_300_negative nicdark_z_index_999 menu_mobile">
	<a class="nicdark_close_navigation_1_sidebar_content nicdark_close_navigation_1_sidebar_content" href="#">
		<img alt="" width="25" class="nicdark_close_navigation_1_sidebar_content nicdark_cursor_pointer nicdark_right_20 nicdark_top_20 nicdark_position_absolute icon_close" src="<?php echo get_template_directory_uri(); ?>/img/icon-close-white.svg">
	</a>
    <div class="nicdark_navigation_1_sidebar">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>

</div>
<!--END menu responsive-->

<?php } ?>

