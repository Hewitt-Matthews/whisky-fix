<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- <div class="container">
	<div class="row">
		<div class="col-lg-4 d-none d-lg-block">
			<div class="spec-search-panel">
				<?php get_product_search_form(); ?>
			</div>
		</div>
	</div>
</div> -->
<div class="product-list-option-panel mb-5">
	<div class="row align-items-center">
		<div class="col-lg-5">
			<h4 class="title">
				<?php woocommerce_page_title();?>
				<span class="countprd"><?php  woocommerce_result_count(); ?></span>
			</h4>
		</div>
		<div class="col-lg-7">
           <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                 <div class="spec-search-panel">
                 	<?php get_product_search_form(); ?>
                 </div>
             </div>
              <div class="col-lg-6 col-sorting">
		         <div class="custom-box">
		         	<?php   woocommerce_catalog_ordering(); //echo do_shortcode('[woocommerce_product_filter_products]');?>
		         </div>
		         <button class="btn btn-filter-open">
                                    <i class="fa fa-sort" aria-hidden="true"></i> Filter
                                 </button>
		     </div>
         </div>
     </div>

	</div>
</div>
<div class="row row-product-main">
	<?php $current_slug = get_queried_object()->slug;
	$taxonomy = get_queried_object()->taxonomy;
	if($current_slug != 'cigar' && $taxonomy != 'cigar_brand'){ ?>
	<aside class="filter-col">
		<header class="filter-header">
                           <h3 class="title desktop">Filter</h3>
                           <button class="btn btn-filter-close"><i class="las la-times"></i></button>
                        </header>
    		<?php get_sidebar( 'sidebar-1' );?>
    	</aside>
	<?php } ?>
 <main class="product-grid-col">
    <div class="row row-product-grid">


<!-- <ul class="products columns-<?php //echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>"> -->
