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
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<!-- <li <?php //wc_product_class( '', $product ); ?>> -->
	<div class="col">
        <div class="product-panel shoppage">

	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	 $vat  = $product->get_attribute('vat_priceproduct');
	 $excludevat=$product->get_price_excluding_tax();
	 ?>
	 <div class="product-media">
	
	


	<?php
	do_action( 'woocommerce_before_shop_loop_item_title' );
	?>
	
	

	<div class="product-options shopbtn">
       <!-- <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button> -->
       <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
       <!-- <a data-toggle="modal" data-target="#quickViewModal-<?php echo $post->ID;?>" class="btn btn-text btn-quick-view"> -->
       	<a href="<?php the_permalink($post->ID); ?>" class="btn btn-text btn-quick-view">
          <span class="icon"><i class="las la-expand"></i></span>
          <span class="text">Quick View</span>
       </a>
      <?php  //if ( ! $product->managing_stock() && ! $product->is_in_stock() )
      //if($product->get_stock_quantity()>=1)
         if ( $product->is_in_stock() ) {
       ?>
       <a href="<?php echo home_url(); ?>/cart/?add-to-cart=<?php echo $post->ID;?>" class="btn btn-icon btn-icon-cart "><i class="las la-shopping-cart"></i></a>
      	
      <?php }else{ ?>
<a href="<?php echo home_url(); ?>/cart/?add-to-cart=<?php echo $post->ID;?>" class="btn btn-icon btn-icon-cart disabled"><i class="las la-shopping-cart"></i></a>
   <?php }?>
    </div>
  </div>
    
	<?php

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	?>
	
	<?php 
	do_action( 'woocommerce_after_shop_loop_item_title' );
	?>
	 
	<span class="price-note">  <?php echo woocommerce_price($product->get_price_excluding_tax()); ?> Ex. VAT</span>
<!-- 	<div class="product-options"> -->
<?php 
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item' );
	?>

<!-- </div> -->
<!-- </li> -->
      
</div>
</div>


