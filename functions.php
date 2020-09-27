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
