<?php

add_filter( 'woocommerce_product_csv_importer_check_import_file_path', '__return_false' );

function mimvp_filter_mime_types( $array ) {
    $array['webp'] = 'image/webp';
    return $array; 
}
add_filter( 'mime_types', 'mimvp_filter_mime_types', 10, 1 );

//开启WordPress预览webp缩略图预览
function mimvp_file_is_displayable_image($result, $path) {
    $info = @getimagesize( $path );
    if($info['mime'] == 'image/webp') {
        $result = true;
    }
    return $result;
}
add_filter( 'file_is_displayable_image', 'mimvp_file_is_displayable_image', 10, 2 );

/**
 * shop页过滤掉 bundled-products 商品
 */
function woo_custom_pre_get_posts_query( $q ) {
 
    if ( ! $q->is_main_query() ) return;
    if ( ! $q->is_post_type_archive() ) return;
   
    if ( ! is_admin() && is_shop() ) {
   
      $q->set( 'tax_query', array(array(
        'taxonomy' => 'product_cat',
        'field' => 'slug',
        'terms' => array( 'bundled-products' ), // Don't display products in the shoes category on the shop page
        'operator' => 'NOT IN'
      )));
   
    }
   
    remove_action( 'pre_get_posts', 'custom_pre_get_posts_query' );
   
  }
  add_action( 'pre_get_posts', 'woo_custom_pre_get_posts_query' );