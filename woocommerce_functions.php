<?php
add_action( 'woocommerce_before_single_product', 'wc_print_notices', 10 );
// Checking and validating when products are added to cart
add_filter( 'woocommerce_add_to_cart_validation', 'mrd_limit_cat_items', 10, 3 );

function mrd_limit_cat_items( $valid, $product_id, $quantity ) {

    $cart_items_count = WC()->cart->get_cart_contents_count();
    $total_count = $cart_items_count + $quantity;
    $max_allowed = 6;
    if( ( $cart_items_count > $max_allowed || $total_count > $max_allowed ) && $valid ){
        // Set to false
        $valid = false;
        // Display a message
         wc_add_notice( __( "You can’t have more than ".$max_allowed." bottles at a time", "woocommerce" ), "error" );
    }
    return $valid;
}

add_filter( 'woocommerce_update_cart_validation', 'mrd_limit_cat_items_update', 10, 4 );
function mrd_limit_cat_items_update( $passed, $cart_item_key, $values, $updated_quantity ) {

    $cart_items_count = WC()->cart->get_cart_contents_count();
    $original_quantity = $values['quantity'];
    $total_count = $cart_items_count - $original_quantity + $updated_quantity;
    $max_allowed = 6;
    if( $cart_items_count > $max_allowed || $total_count > $max_allowed ){
        // Set to false
        $passed = false;
        // Display a message
         wc_add_notice( __( "You can’t have more than ".$max_allowed." bottles at a time", "woocommerce" ), "error" );
    }
    return $passed;
}



 ?>
