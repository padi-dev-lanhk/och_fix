<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}

$img  = wp_get_attachment_image_url( get_post_thumbnail_id(), 'large' );

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();
?>

<div class="rental_item item list_product_style1 list_product_style2">

    <div class="wrap_img">
       <img src="<?php echo esc_url( $img ); ?>" alt="<?php the_title_attribute(); ?>">
    </div>
            

    <div class="wrap_content">
        <div class="content ">
            <div class="bg_overlay"></div>

            <div class="left">
                <div class="top">
                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                

                <div class="price_rating">

                    <?php $is_produc_type = $product->is_type('ovacrs_car_rental') ? true : false ; ?>

                    <div class="price">
                        <?php if( $is_produc_type ){
                            if( ovacrs_get_price_type( get_the_id() ) == 'day' ){ ?>
                                <span class="amount"><?php echo ovacrs_get_price_day( get_the_id() ) ?></span>
                                <span class="time"><?php esc_html_e( '/ Day', 'hozing' ); ?> </span>
                            <?php }else if( ovacrs_get_price_type( get_the_id() ) == 'hour' ){ ?>
                                <span class="amount"><?php echo ovacrs_get_price_hour( get_the_id() ); ?> </span>
                                <span class="time"><?php esc_html_e( '/ Hour', 'hozing' ); ?></span>
                            <?php }else if( ovacrs_get_price_type( get_the_id() ) == 'mixed' ) { ?>
                                <span class="amount"><?php echo ovacrs_get_price_day( get_the_id() ); ?> </span>
                                <span class="time"><?php esc_html_e( '/ Day', 'hozing' ); ?></span>
                            <?php } 
                        }else{

                            echo wp_kses_post( $product->get_price_html() );

                        }
                        ?> 
                    </div>

                    <div class="woocommerce-product-rating">
                                
                        <?php echo wc_get_rating_html( $average, $rating_count ); ?>
                        

                    </div>    

                </div>
            </div>
            
            <div class="right">
                    
                <?php $total_features = isset( $_GET['total_features'] ) ? $_GET['total_features'] : get_theme_mod( 'rl_type_total_features', '6' ); ?>
                <?php if( (int)$total_features > 0 ){ ?>
                    <div class="features"><div class="container-fluid"><div class="row">

                            <?php
                            $features = get_post_meta( get_the_id(), 'ovacrs_features_special', true );
                            $icon = get_post_meta( get_the_id(), 'ovacrs_features_icons', true );
                            $desc = get_post_meta( get_the_id(), 'ovacrs_features_desc', true );
                            $d = 0;

                            

                            if( $features ){
                                foreach ($features as $key => $value) {
                                    if( $value == 'yes' && trim( $desc[$key] ) != '' && trim( $icon[$key] ) != '' ){
                                        $class = ($d%2) ? 'eve' : 'odd'; ?>
                                        <div class="feature-item <?php echo esc_attr( $class ); ?> ">
                                        <i class="<?php echo esc_attr( $icon[$key] ); ?>"> </i>
                                        <span class="desc"><?php echo esc_attr( $desc[$key] ); ?></span>
                                        </div>
                                        <?php $d++;
                                        if( $d >= $total_features ) break;
                                    }
                                }
                            } ?>
                            
                    </div></div></div>
                <?php } ?>

                <?php $total_other_features = isset( $_GET['total_other_features'] ) ? $_GET['total_other_features'] : get_theme_mod( 'rl_total_other_features', '4' ); ?>
                <?php if( (int)$total_other_features > 0 ){ ?>
                    <div class="other_features">
                        <?php 
                            $d = 0;
                            $other_features = get_post_meta( get_the_id(), 'ovacrs_other_features_name', true );

                            if( $other_features ){
                                foreach ($other_features as $key => $value) {
                                    if( $value != '' ){ ?>
                                        <div class="item">
                                            <i class="icon_check"></i>
                                            <span class="other-feature-item"><?php echo esc_html($value); ?></span>    
                                        </div>
                                        
                                        <?php $d++;
                                        if( $d >= $total_other_features ) break;
                                    }
                                }
                            }
                         ?>
                    </div>
                <?php } ?>

                 <!-- Show attribute -->
                <?php $total_attribute = isset( $_GET['total_attribute'] ) ? $_GET['total_attribute'] : get_theme_mod( 'rl_total_attribute', '0' );

                if( (int)$total_attribute > 0 ){

                    $attributes = $product->get_attributes();
                    foreach ( $attributes as $attribute ) :
                        
                        $values = array();

                        if ( $attribute->is_taxonomy() ) {
                            $attribute_taxonomy = $attribute->get_taxonomy_object();
                            $attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'all' ) );

                            foreach ( $attribute_values as $attribute_value ) {
                                $value_name = esc_html( $attribute_value->name );

                                if ( $attribute_taxonomy->attribute_public ) {
                                    $values[] = '<a href="' . esc_url( get_term_link( $attribute_value->term_id, $attribute->get_name() ) ) . '" rel="tag">' . $value_name . '</a>';
                                } else {
                                    $values[] = $value_name;
                                }
                            }
                        } else {
                            $values = $attribute->get_options();

                            foreach ( $values as &$value ) {
                                $value = make_clickable( esc_html( $value ) );
                            }
                        }?>
                        <?php if( !empty( $values ) ){ ?>
                        <div class="product_attr"><span class="label"><?php echo wc_attribute_label( $attribute->get_name() ) ?> : </span><span class="value"><?php echo apply_filters( 'woocommerce_attribute',  wptexturize( implode( ', ', $values ) ) , $attribute, $values ); ?><span></div>
                        <?php } ?>
                        
                    <?php endforeach; 

                } ?>
                
            </div>
        </div>
    </div>
</div>