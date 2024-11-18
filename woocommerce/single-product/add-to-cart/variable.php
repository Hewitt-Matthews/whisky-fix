<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

defined( 'ABSPATH' ) || exit;

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );

$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );
do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woocommerce' ) ) ); ?></p>
	<?php else : ?>
		<div class="product-single-filter variations">
		<?php foreach ( $attributes as $attribute_name => $options ) : ?>
			<?php if($attribute_name == 'pa_package'){ ?>
				<div class="qtyAvlbl">
						<label><strong>Select a Package:</strong></label>
						<div class="colr-box">
							<div class="colors">
								<?php
								wc_dropdown_variation_attribute_options( array(
									'options'   => $options,
									'attribute' => $attribute_name,
									'product'   => $product,
									'class'		 => 'form-control d-none variation_drop',
									'show_option_none' => false,
								) );
								$c=1;
								if ( $product && taxonomy_exists( $attribute_name ) ) {
											// Get terms if this is a taxonomy - ordered. We need the names too.
											$terms = wc_get_product_terms( $product->get_id(), $attribute_name, array( 'fields' => 'all' ) );
											$c=1;
											foreach ( $terms as $term ) {
													if ( in_array( $term->slug, $options ) ) {

															?>
															<label class="clrBx">
																	<input type="radio" <?php if($_GET['attribute_pa_package'] && $_GET['attribute_pa_package'] == $term->slug) {echo "checked";}?> class="variation_radio" data-attribute_name="attribute_pa_package" value="<?php echo $term->slug; ?>" id="color<?php echo $c; ?>" name="attribute_pa_package">
																	<span class="checkmark" id="Ccolor<?php echo $c; ?>"><?php echo esc_html( apply_filters( 'woocommerce_variation_option_name', $term->name ) ); ?></span>
															</label>
															<?php $c++; ?>
															<?php
													}
											}
									}
							?>

								</div>
						</div>
				</div>

			<?php } else if($attribute_name == 'pa_package_'){ ?>
				<div class="product-size align-items-center">

																	<p class="mb-2">Select Volume</p>
																	<div class="form-group">
																	<?php
																	wc_dropdown_variation_attribute_options( array(
																		'options'   => $options,
																		'attribute' => $attribute_name,
																		'product'   => $product,
																		'class'		 => 'form-control d-none',
																		'show_option_none' => false,
																	) );
																	echo '<div class="d-flex d-swatches size_watches">';

																	foreach ($options as $value) {

																		echo '<a href="#size" class="'.$value.'" data-value="'.$value.'" ><span >'.$value.'</span></a>';
																	}
																	echo '</div>';

																?>
	                              </div>
		                           </div>
			<?php } else if($attribute_name == 'pa_variant'){ ?>
				<div class="product-size align-items-center">

																	<p class="mb-2">Select Variant</p>
																	<div class="form-group">
																	<?php
																	wc_dropdown_variation_attribute_options( array(
																		'options'   => $options,
																		'attribute' => $attribute_name,
																		'product'   => $product,
																		'class'		 => 'form-control d-none',
																		'show_option_none' => false,
																	) );
																	if ( $product && taxonomy_exists( $attribute_name ) ) {
														            // Get terms if this is a taxonomy - ordered. We need the names too.

														            $terms = wc_get_product_terms( $product->get_id(), $attribute_name, array( 'fields' => 'all' ) );
																					echo '<div class="d-flex d-swatches variant_watches">';
														            foreach ( $terms as $term ) {
														                if ( in_array( $term->slug, $options ) ) {



																								echo '<a href="#size" class="'.$value.'" data-value="'.$term->slug.'" >'.esc_html( apply_filters( 'woocommerce_variation_option_name', $term->name ) ).'</a>';



														                }
														            }
																					echo '</div>';
														        }


																?>
	                              </div>
		                           </div>
			<?php } else{ ?>
				<div class="product-size">
		                              <label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>">Select <?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label>
																	<div class="form-group form-group-alt">
																		<?php
																		wc_dropdown_variation_attribute_options( array(
																			'options'   => $options,
																			'attribute' => $attribute_name,
																			'product'   => $product,
																			'class'		 => 'form-control',
																			'show_option_none' => false,
																		) );

																	?>
		                              </div>
		                           </div>
			<?php } ?>

		<?php endforeach; ?>
		 </div>

		<div class="single_variation_wrap">
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 *
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
	<input type="hidden" name="is_buy_now" id="is_buy_now" value="0" />
</form>

<?php
do_action( 'woocommerce_after_add_to_cart_form' );
