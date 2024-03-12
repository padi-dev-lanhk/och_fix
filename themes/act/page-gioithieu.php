<?php
/*
Template Name: page gioi thieu
*/


?>

<?php get_header();

?>

<?php
if (function_exists('nicdark_page')) {
    do_action("nicdark_page_nd");
    // 	echo('<div>paditech</div>');
?>
    <div class="meun_trangcon menu_gioithieu">
        <div class="list_menu_item_child">
            <div class="icon_menu_gt">
                <img style="width:30px;" src="http://och.vn/cms/wp-content/uploads/2019/10/img_menu_b.png" alt"menu_opne">
            </div>
            <div class="icon_close_gt">
                <img style="width:18px;" src="http://och.vn/cms/wp-content/uploads/2019/10/cross.png" alt"menu_close">
            </div>
            <nav id="site-navigation" class="main-navigation " role="navigation">
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </nav>
        </div>
    </div>
<?php
} else { ?>

    <!--start section-->

    <!--end section-->

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix paditech1234">


        <!--start all posts previews-->
        <?php if (is_active_sidebar('nicdark_sidebar')) { ?>
            <div class="nicdark_grid_8">
            <?php } else { ?>

                <div class="nicdark_grid_12">
                <?php } ?>


                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>

                        <!--#post-->
                        <div class="nicdark_section nicdark_container_page_php" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <!--start content-->
                            <?php the_content(); ?>
                            <!--end content-->

                        </div>
                        <!--#post-->


                        <div class="nicdark_section">


                            <?php $args = array(
                                'before'           => '<!--link pagination--><div id="nicdark_link_pages" class="nicdark_section"><p class="nicdark_margin_top_20 nicdark_first_font nicdark_color_greydark nicdark_border_1_solid_grey nicdark_display_inline nicdark_padding_8_20 nicdark_border_radius_15">',
                                'after'            => '</p></div><!--end link pagination-->',
                                'link_before'      => '',
                                'link_after'       => '',
                                'next_or_number'   => 'number',
                                'nextpagelink'     => esc_html__('Next page', 'hotelbooking'),
                                'previouspagelink' => esc_html__('Previous page', 'hotelbooking'),
                                'pagelink'         => '%',
                                'echo'             => 1
                            ); ?>
                            <?php wp_link_pages($args); ?>


                            <?php if (has_tag()) { ?>
                                <!--tag-->
                                <div id="nicdark_tags_list" class="nicdark_section">
                                    <?php the_tags(esc_html__('Tags : ', 'hotelbooking'), '', ''); ?>
                                </div>
                                <!--END tag-->
                            <?php } ?>


                            <?php

                            if (comments_open() || get_comments_number()) {
                                comments_template();
                            }

                            ?>


                        </div>



                    <?php endwhile; ?>
                <?php endif; ?>



                </div>


                <!--sidebar-->

                <!--end sidebar-->



            </div>
            <!--end container-->
            <style type="text/css">
                .nicdark_bg_white .nd_options_container .hentry .wpb_row .vc_column_container .vc_column-inner {
                    background: transparent !important;
                }
            </style>


        <?php } ?>

        <?php get_footer(); ?>