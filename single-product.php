<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
$product = wc_get_product( get_the_ID() );?>
<?php if($product->is_type( 'variable' )){ ?>
  <?php get_template_part( 'variable', 'single' ); ?>
<?php } else{ ?>
         <!-- Main Page -->
         <div id="page" class="site-page">

            <div class="breadcrumb-heading">
               <div class="container">
                  <?php wc_print_notices(); ?>
                  <div class="row">
                     <div class="col-lg-6">
                        <ol class="breadcrumb breadcrumb-alt">
                             <?php if ( function_exists('yoast_breadcrumb') ) {
                              yoast_breadcrumb('<li class="breadcrumb-item">','</li>');
                           } ?>
                        </ol>
                     </div>
                     <div class="col-lg-6">
                             <?php  $post_id = 72;
                     $queried_post1 = get_post($post_id);

                     ?>
                        <p class="breadcrumb-note"><?php the_field('website_note__',$post_id); ?></p>
                         <?php wp_reset_postdata(); ?>
                     </div>
                  </div>
               </div>
            </div>

            <!-- ============= PRODUCT MAIN **============= -->
            <section class="si-product-main">
               <div class="product-single-main">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-6 col-media">
                           <div class="product-media">
                              <?php  $imageprdouct = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' ); ?>
                               <img loading="lazy"  src="<?php echo $imageprdouct[0]; ?>" alt="<?php the_title(); ?>">
                           </div>
                        </div>
                        <div class="col-lg-6 col-summery">
                           <div class="product-summery">
                              <h1 class="product-title"><?php the_title(); ?></h1>
                              <div class="product-description">
                                <?php
                               echo  $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
                                ?>
                              </div>
                              <div class="product-price">
                                 <?php
                                   $discount_val = $product->get_attribute('discount');
                                   $vat_price = $product->get_attribute('vat_priceproduct' );
                                   $includevat=$product->get_price_including_tax();
                                    $excludevat=$product->get_price_excluding_tax();
                                   ?>
                                 <strong><?php //echo $product->get_price_including_tax();
                                 echo $product->get_price_html($includevat); ?></strong>
                                 <small> <?php //echo $excludevat;//$product->get_price_html($excludevat);
                                 //echo $product->get_price_excluding_tax();?><?php //echo $vat_price; //the_field('vat_price'); ?> <?php echo woocommerce_price($product->get_price_excluding_tax()); ?> Ex. VAT</small>


                              </div>
                              <div class="product-buttons">
                                <?php if($product && $product->is_type( 'variable' )){
                                    do_action('woocommerce_variable_add_to_cart');
                                  ?>

                                  <?php } else{ ?>
                                     <?php do_action('woocommerce_simple_add_to_cart');
                                   }?>

                              </div>
                              <div class=" dd-product-options">
                                 <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>

                                 <?php

                                 global $post;

                $cats = get_the_terms( $post->ID, 'product_cat' );

                if ( ! empty( $cats ) ) {
					echo '<div class="dd-product-brands">';
                        foreach ( $cats as $term ) {
                   // If parent cat ID = 116 echo subcat name...
                        if( $term->parent == 42 ) {
                                   $wthumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
									$wimage1 = wp_get_attachment_url( $wthumbnail_id );
                                    ?>
								<div class="product-brand">
									<?php if(!empty($wimage1)):?>
									<!-- <img loading="lazy"  src="<?php echo $wimage1; ?>" alt="<?php echo $term->name;?> Logo"> -->
									<?php endif;?>
									<h3><?php echo $term->name;?></h3>
									<a href="<?php echo get_term_link( $term->slug, $term->taxonomy ); ?>" class="product-brand-link">More from this distillery</a>
								</div>
                                     <?php
						}
                     }
					 echo '</div>';
                 }

                                  ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="product-specification-panel">
                  <div class="container">
                           <ul class="product-specification-nav">
                             <!--  <li>
                                 <div class="panel">
                                    <div class="panel-body">
                                       <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-bottler.svg" alt="icon">
                                       <p class="text">Bottler</p>
                                    </div>
                                 </div>
                                 <p class="panel-title"> <?php the_field('bottler_specification'); ?></p>
                              </li>
                              <li>
                                 <div class="panel">
                                    <div class="panel-body">
                                       <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-distiller.svg" alt="icon">
                                       <p class="text">Distiller</p>
                                    </div>
                                 </div>
                                 <p class="panel-title"> <?php the_field('distiller_specification'); ?></p>
                              </li>
                              <li>
                                 <div class="panel">
                                    <div class="panel-body">
                                       <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-cask-type.svg" alt="icon">
                                       <p class="text">Cask type</p>
                                    </div>
                                 </div>
                                 <p class="panel-title"> <?php the_field('cask_type_specification'); ?></p>
                              </li> -->
                              <li>
                                 <div class="panel">
                                    <div class="panel-body">
                                       <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-abv.svg" alt="icon">
                                       <p class="text">Abv</p>
                                    </div>
                                 </div>
                                 <?php //$abv=get_field('abv_specification');
                                  $abv = $product->get_attribute('abv-percentage');
                                 if($abv):
                                  ?>

                                 <p class="panel-title"> <?php echo $abv; ?></p>
                                 <?php else:?>
                                  <p class="panel-title"> - </p>
                                <?php endif;?>
                              </li>
                              <li>
                                 <div class="panel">
                                    <div class="panel-body">
                                       <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-type.svg" alt="icon">
                                       <p class="text">Type</p>
                                    </div>
                                 </div>
                                 <?php //$type=get_field('type_specification');
                                 $type = $product->get_attribute('whiskytype');
                                 if($type):
                                  ?>
                                 <p class="panel-title"> <?php echo $type; ?></p>
                                 <?php else:?>
                                  <p class="panel-title"> - </p>
                                <?php  endif;?>
                              </li>
                              <li>
                                 <div class="panel">
                                    <div class="panel-body">
                                       <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-region.svg" alt="icon">
                                       <p class="text">Region</p>
                                    </div>
                                 </div>
                                 <?php //$region=get_field('region_specification');
                                  $region=$product->get_attribute('regions');
                                 if($region):
                                  ?>
                                 <p class="panel-title"> <?php echo $region; ?></p>
                                 <?php else:?>
                                  <p class="panel-title"> - </p>
                                <?php  endif;?>
                              </li>
                              <li>
                                 <div class="panel">
                                    <div class="panel-body">
                                       <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-age.svg" alt="icon">
                                       <p class="text">Age</p>
                                    </div>
                                 </div>
                                 <?php //$age=get_field('age_specification');
                                  $age=$product->get_attribute('age-whisky');
                                 if($age):
                                  ?>
                                 <p class="panel-title"> <?php echo $age; ?></p>
                                 <?php else:?>
                                  <p class="panel-title"> - </p>
                                <?php  endif;?>
                              </li>
                              <li>
                                 <div class="panel">
                                    <div class="panel-body">
                                       <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-volume.svg" alt="icon">
                                       <p class="text">Volume</p>
                                    </div>
                                 </div>
                                 <?php //$volume=get_field('volume_specification');
                                 $volume=$product->get_attribute('discount_product');
                                 if($volume):
                                  ?>
                                 <p class="panel-title"> <?php echo $volume; ?></p>
                                 <?php else:?>
                                  <p class="panel-title"> - </p>
                                <?php  endif;?>
                              </li>
                           </ul>
                        </div>

               </div>
            </section>

               <!-- <section> -->
                <?php //do_action( 'whisky_woocommerce_after_single_product_summary' );?>
              <!-- </section> -->


            <!-- ============= RELATED PRODUCTS **============= -->
            <?php $termsp = wp_get_post_terms( get_the_id(), 'product_cat' );
                             $term1  = reset($termsp);
                              $catname= $term->name;
                              $catnid= $term->term_id;
			 				$related_ids = [];
			 
			 				foreach($termsp as $related_terms) {
								array_push($related_ids, $related_terms->term_id);
							}

                              $args = array(
								  'post__not_in' => array( $post->ID ),
								  'post_status' => 'publish',
								  'post_type' => 'product',
								  'posts_per_page' => 10,
								  'tax_query' => array(
										array(
											'taxonomy' => 'product_cat',
											'field'    => 'term_id',
											'terms'    => $related_ids,
										),
									),
                                  'orderby' => 'rand'
                              );
                              //print_r($args);
                              //exit();
                              $loop = new WP_Query( $args );
                              //$num = $obj_name->post_count;
                              $totalpost = $loop->found_posts;

                               if (!empty($totalpost)) {

                             ?>
            <section class="si-related-products">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-7">
                        <h4 class="main-title"><span class="brand-color">Related</span> Products</h4>
                     </div>
                     <div class="col-md-5 text-right">
                        <a href="<?php echo $link = get_term_link( $catnid, 'product_cat' );?>" class="btn-brand-link">View All Products</a>
                     </div>
                  </div>
                   <div class="row">
                     <div class="col-12">
                        <div class="owl-carousel related-products">
                            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                           $imagepro = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                           $includevat1=$product->get_price_including_tax();
                           $excludevat1=$product->get_price_excluding_tax();
                            ?>
                           <div class="item">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <a href="<?php  the_permalink(); ?>"><img loading="lazy"  src="<?php echo $imagepro[0]; ?>" alt="media"></a>
                                    <div class="product-badges"></div>
                                    <div class="product-options">
                                       <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');
                                      //echo do_shortcode('[ti_wishlistsview]'); ?>
                                       <a class="btn btn-text"  href="<?php  the_permalink(); ?>">
                                 <span class="icon"><i class="las la-expand"></i></span>
                                 <span class="text">Quick View</span>
                           </a>
                               <a href=" <?php echo home_url(); ?>/cart/?add-to-cart=<?php echo $post->ID;?> " class="btn btn-icon btn-icon-cart"> <i class="las la-shopping-cart"></i></a>
                                        <?php //do_action('woocommerce_simple_add_to_cart'); ?>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                  <?php  $discount_value = $product->get_attribute('discount_product',$post->ID );  ?>
                                    <?php
                                  $vat_value = $product->get_attribute('vat_priceproduct',$post->ID );
                                 ?>

                                    <h5 class="product-title"><a href="<?php echo get_permalink() ?>"><?php  echo mb_strimwidth(get_the_title(), 0, 20, '...');//the_title();?></a></h5>

                                    <div class="product-price">
                                       <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
                                       <span class="price"><?php  echo $product->get_price_html($includevat1); //echo wc_price( $price ); ?></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php endwhile;  wp_reset_query();?>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
          <?php }?>

            <!-- ============= BEST PRODUCTS **============= -->
            <?php //echo do_shortcode('[best_selling_products]');?>
            <section class="si-best-products">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <h4 class="main-title"><span class="brand-color">Best Selling</span> Right Now</h4>
                     </div>
                  </div>
                  <div class="row">
<?php
$args = array(
    'post_type' => 'product',
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
	'meta_query' => array(
        array(
            'key' => '_stock_status',
            'value' => 'instock'
        )
    ),
    'posts_per_page' => 10,
);
$loop = new WP_Query( $args );
$x=1;
while ( $loop->have_posts() ) : $loop->the_post();
global $product; if($x < 5){ ?>
  <?php $post_cat = wp_get_post_terms( get_the_id(), 'product_cat', $args = array('fields'=> 'all') ); ?>
  <?php if($post_cat[0]->slug != 'cigar'){ ?>
  <div class="col-xl-3 col-lg-6 col-md-6">
    <div class="best-product-panel best-product-panel-min bg-<?php echo $x;?>">
<a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>" title="<?php the_title(); ?>">

<?php
$product_featuredimg = get_sub_field('product_featured__imagebestproduct');
 echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
 ?>
<div class="overlay">
<div class="top-panel">
<h4 class="title <?php echo get_post_meta(get_the_id(),'total_sales', true);?>"><?php the_title(); ?></h4>
   <div class="price">
                            <strong> <?php
                            $includevat2=$product->get_price_including_tax();
                            echo $product->get_price_html($includevat2);
                           //echo get_post_meta($bestprd->ID, '_regular_price', true);?>
                           </strong><br>

                                   <small><?php echo woocommerce_price($product->get_price_excluding_tax()); ?> Ex. VAT</small>
                                 </div>

</div>
 <div class="bottom-panel">
<a href="<?php the_permalink($loop->post->ID); ?>" class="btn btn-brand">Buy Now</a>
<?php //do_action('woocommerce_simple_add_to_cart'); ?>
</div>
</div>
</a>
</div>
</div>
<?php $x++; } ?>
<?php } ?>
<?php  endwhile; ?>
<?php wp_reset_query(); ?>
                  </div>
               </div>
            </section>
            <?php } ?>
            <?php endwhile; endif; wp_reset_query();?>

<?php get_footer(); ?>
