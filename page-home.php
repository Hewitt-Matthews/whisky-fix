<?php
get_header();
/*
Template Name:Home Page
*/
?>
         <!-- Main Page -->
<div id="page" class="site-page">

   <!-- ============ HOME MAIN CAROUSEL **============ -->
<!--    <section class="section-main-carousel">
      <div id="homeCarousel" class="owl-carousel home-carousel">
         <?php //while ( have_rows('main_slider') ) : the_row();
              // $banner_image = get_sub_field('banner_image');
              // $banner_title = get_sub_field('banner_title');
              // $banner_description = get_sub_field('banner__description_');
              // $product_price = get_sub_field('product_price__banner');
              // $vat_amount = get_sub_field('vat_amount_banner');
              // $learn_more = get_sub_field('learn_more_link');
         ?>
         <div class="item">
            <div class="carousel-inner">
               <div class="container">
                  <div class="row align-items-center flex-row-reverse">
                     <div class="col-lg-5 col-md-5">
                        <div class="panel-media">
                           <img loading="lazy"  src="<?php //echo $banner_image['url'];?>" alt="<?php //echo $banner_image['alt'];?>">
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-7">
                        <div class="panel-content">
                           <h2><?php // echo $banner_title; ?></h2>
                           <p><?php //echo $banner_description;?></p>
                           <div class="price"><strong>£<?php //echo $product_price;?></strong><small> Ex. VAT £<?php //echo $vat_amount;?></small></div>
                           <div class="panel-btn">
                              <a href="<?php //echo $learn_more;?>" class="btn btn-brand">Buy Now</a>
                              <a href="<?php //echo $learn_more;?>" class="btn btn-brand-outline">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <?php // endwhile;?>
      </div>
   </section> -->

   <!-- ============ HOME ABOUT **============ -->
	<?php /*
   <?php $about_bimage=get_field('about_image___home'); ?>
   <section class="section-home-about" style="background: #000 url(<?php echo $about_bimage['url'];?>) no-repeat left/cover">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="panel-content">
                  <h1 class="main-title"><?php the_field('about_title'); ?></h1>
                  <?php the_field('about_content'); ?>
                  <div class="panel-btn">
                     <a href="<?php the_field('read_more_button_url'); ?>" class="btn btn-brand"><?php the_field('read_more_button_text'); ?></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <?php */ ?>

   <!-- ============ HOME NEW PRODUCTS **============ -->
   <section class="section-home-new-products">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <div class="panel-content">
            <h2 class="main-title">
              <span class="brand-color"><?php the_field('section_titlle_homepagesetion3'); ?>
            </h2>
            <p><?php the_field('section_content_hompagesection3'); ?></p>
            <div class="panel-btn">
              <a href="<?php the_field('view_all_product_link'); ?>" class="btn btn-brand">View All Products</a>
            </div>
          </div>
        </div>
        <?php //$new_arrival = get_field('new_arrival_products'); ?>
        <div class="col-xl-8">
          <div class=" owl-carousel new-arrivalproducts">
            <?php
            // foreach( $new_arrival as $prd ):
            //   $srvimg = get_the_post_thumbnail_url($prd->ID, 'full');
            //   $pititle= get_the_title($prd->ID);
            //   $palt = get_post_meta(get_post_thumbnail_id( $prd->ID ), '_wp_attachment_image_alt', true);
            //   global $product;
            //   $product = wc_get_product($prd->ID );
            // $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'new-arrivals');
            // $loop = new WP_Query( $args );
            //while ( $loop->have_posts() ) : $loop->the_post(); //global $product;
              $posts_count1 = 1;  $the_query = new WP_Query( array(
                     'post_type' => 'product',
                     'product_cat' => 'new-arrivals',
                      'orderby'        => 'date',
                       'order'          => 'desc',
                     'posts_per_page' => 3 ) );

               while ($the_query -> have_posts()) : $the_query -> the_post();
              $pititle= get_the_title($post->ID);
              //$srvimg = get_the_post_thumbnail_url($loop->post->ID,);
               $srvimg = get_the_post_thumbnail_url($post->ID,'full');
              //$srvimg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                         $alt = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);
                 ?>
              <div class="item">
                <div class="product-panel">
                  <div class="product-media">
                    <a href="<?php the_permalink(); ?>"><img loading="lazy"  src="<?php echo $srvimg; ?>" alt="<?php if($palt) echo $palt; ?>"></a>
                    <div class="product-badges">
                      <span class="badge badge-danger"> New </span>
                    </div>
                  </div>
                  <div class="product-content">
                    <a href="<?php the_permalink(); ?>"><h5 class="product-title"><?php the_title(); ?><?php // the_title(); //echo $pititle; ?></h5></a>
                    <div class="product-price">
                      <?php $includevat=$product->get_price_including_tax();
                      $excludevat=$product->get_price_excluding_tax();?>
                      <span class="price"><?php echo $product->get_price_html($includevat); ?></span>
                      <span class="price-note"> <?php echo woocommerce_price($product->get_price_excluding_tax()); ?> Ex. VAT</span>
                    </div>
                  </div>
                </div>
           <!--      <div class="modal fade preview-modal quickViewModal" id="quickViewModal-<?php //echo $post->ID;?>" tabindex="-1" aria-labelledby="quickViewModalLabel-<?php //echo $post->ID;?>" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                        <div class="row">
                          <div class="col-lg-6 col-media">
                            <img loading="lazy"  src="<?php //echo $srvimg; ?>" alt="<?php //echo $palt; ?>">
                          </div>
                          <div class="col-lg-6 col-content">
                            <h4 class="modal-title"><?php //echo $pititle; ?></h4>
                            <div class="modal-description">
                              <?php
                              //$product_instance = wc_get_product($post->ID);
                              //echo $product_short_description = $product_instance->get_short_description();?>
                            </div>
                            <div class="modal-info"><?php  //echo $product->get_attribute( 'discount_product',$post->ID );?></div>
                            <div class="modal-price">
                              <strong>£<?php //echo get_post_meta($post->ID, '_regular_price', true);?></strong> <small> £<?php  //echo $product->get_attribute( 'vat_priceproduct',$$post->ID );?>  Ex. VAT</small>
                            </div>
                            <div class="modal-buy">
                              <?php // do_action('woocommerce_simple_add_to_cart',$post->ID); ?>
                            </div>
                            <div>
                              <?php //echo do_shortcode('[yith_wcwl_add_to_wishlist]',$post->ID); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            <?php //endforeach;     ?>
<?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>
</div>
</div>
</div>
</section>

   <!-- ============ HOME SPECIAL PRODUCTS **============ -->
   <section class="section-special-product">
      <div class="container">
         <div class="row no-gutters">
            <?php while ( have_rows('product__block_product') ) : the_row();
                        $product_image = get_sub_field('product_image_productlist');
                        $product_title = get_sub_field('product_title_productlisthome');
                        $read_more = get_sub_field('read_more_link_productlist');
                        ?>
            <div class="col-lg-4">
               <a href="<?php echo $read_more;?>" class="product-special-panel">
                  <img loading="lazy"  src="<?php echo $product_image['url'];?>" alt="<?php echo $product_image['alt'];?>">
                  <div class="overlay">
                     <h4 class="title"><?php echo $product_title;?></h4>
					 <?php echo apply_filters('the_content',get_sub_field('product_title_productlistdescription'));?>
                     <span class="btn btn-brand">View All Products</span>
                  </div>
			  </a>
            </div>
         <?php endwhile;?>
         </div>
      </div>
   </section>



   <!-- ============ HOME BANNERS **============ -->
    <?php $uniq_product = get_field('unique_product_image');?>
   <section class="section-home-banners" style="background-image: url(<?php echo $uniq_product['url'] ?>); display: flex; flex-direction: column;">
      <div class="container-fluid px-0">
         <div class="row no-gutters">
            <div class="col-lg-12">
               <div class="home-banner-panel hbp-1">
                  <h2><?php the_field('unique_product_title'); ?></h2>
                  <div class="mt-auto"><a href="<?php the_field('unique_product_view_allproductlink'); ?>" class="btn btn-brand">View All Products</a></div>
               </div>
            </div>
<!--             <div class="col-lg-6">
               <div class="home-banner-panel hbp-2">
                  <h2><?php the_field('special_offer_product_title'); ?></h2>
                  <h4><?php the_field('product_sub_title'); ?></h4>
                  <p class="meta"><?php the_field('product_offer_rate'); ?></p>
                  <div class="mb-4">
                     <strong><?php the_field('product_price_specialofficer'); ?></strong><br>
                     <small><?php the_field('vat_price________'); ?></small>
                  </div>
                  <a href="<?php the_field('special_offer_link'); ?>" class="btn btn-brand">View All Products</a>
               </div>
            </div> -->
         </div>
      </div>
   </section>

	 <!-- ============ HOME BEST SELLING PRODUCTS **============ -->
   <section class="section-best-selling-products">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <h2 class="main-title"><span class="brand-color">Best Selling</span> Right Now</h2>
            </div>
         </div>
         <div class="row">
              <?php
               //if( have_rows('best_selling_product_home') ):
                   // while ( have_rows('best_selling_product_home') ) : the_row();
                   //   $product_featuredimg = get_sub_field('product_featured__imagebestproduct');

                         ?>

           <!--  <div class="col-xl-3 col-lg-6 col-md-6"> -->
              <?php
              //      $best_product = get_sub_field('best_product_select');
              // global $woocommerce; global $product;
              //   if( $best_product ):
              //    foreach( $best_product as $bestprd ):
              //           $bestimg = get_the_post_thumbnail_url($bestprd->ID, 'full');
              //          $besttitle= get_the_title($bestprd->ID);
              //            $palt = get_post_meta(get_post_thumbnail_id( $bestprd->ID ), '_wp_attachment_image_alt', true);
                  ?>
                   <?php
                        //   global $product;
                        // $product = wc_get_product($bestprd->ID );
                         ?>
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
                   'posts_per_page' => 4,
               );
               $loop = new WP_Query( $args );
               $x=1;
               while ( $loop->have_posts() ) : $loop->the_post();
               global $product; ?>

                              <div class="col-xl-3 col-lg-6 col-md-6">
                   <div class="best-product-panel best-product-panel-min bg-<?php echo $x;?>">
               <a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>" title="<?php the_title(); ?>">

               <?php
               $product_featuredimg = get_sub_field('product_featured__imagebestproduct');
                echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                ?>
               <div class="overlay">
               <div class="top-panel">
               <h4 class="title"><?php the_title(); ?></h4>
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
               <?php $x++; endwhile; ?>
               <?php wp_reset_query(); ?>
               <?php  //endforeach;  endif;?>

            </div>
      <?php //endwhile;  ?>
      <?php //wp_reset_query(); ?>

         <!-- </div> -->
      </div>
   </section>
   <!-- ============ SECTION DISTILLERIES **============ -->
   <section class="section-distilleries">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <h2 class="main-title"><span class="brand-color"><?php the_field('distilleries_section'); ?></span></h2>
            </div>
         </div>
         <div class="row">
             <?php
              while ( have_rows('distilleries_images_________') ) : the_row();
                  $images_logo = get_sub_field('images_logo____');
                   $images_link = get_sub_field('link_tocatpage');
                  ?>
            <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="<?php echo $images_link;?>"><img loading="lazy"  src="<?php echo $images_logo['url']; ?>" alt="media"></a></div></div>
         <?php endwhile;?>
         <?php
        //   $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'orderby' => 'ASC', 'parent' => 17, ));
        // foreach($wcatTerms as $wcatTerm) :
        // $wthumbnail_id = get_woocommerce_term_meta( $wcatTerm->term_id, 'thumbnail_id', true );
        // $wimage = wp_get_attachment_url( $wthumbnail_id );
    ?>
   <!--  <div><a href="<?php // echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>">
    <?php //if($wimage!=""):?><img loading="lazy"  src="<?php //echo $wimage?>" class="aligncenter"><?php // endif;?></a>
    <h3 class="text-center"><a href="<?php //echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php //echo $wcatTerm->name; ?></a></h3>
    </div> -->
    <?php // endforeach; ?>


         </div>
         <div class="row">
            <div class="col-12 text-center col-btn">
              <a href="<?php the_field('section__read_morelink'); ?>" class="btn btn-brand" >View All</a>
            </div>
         </div>
      </div>
   </section>

   <!-- ============ HOME BLOG **============ -->
   <section class="section-home-blog">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <h2 class="main-title"><span class="brand-color"><?php the_field('blog_title_homepage'); ?></span><br> <?php the_field('blog_title_subtitle____'); ?></h2>
            </div>
         </div>
         <div class="row row-blog-list">
             <?php $count = 0;  $the_query = new WP_Query( array(
                     'post_type' => 'post',
                     'posts_per_page' => 3 ) );

                        while ($the_query -> have_posts()) : $the_query -> the_post();
                        $imagepost = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                         $altpost = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true);
                       ?>
            <div class="col-lg-4">
               <article class="article-min">
                  <div class="article-media">
                     <a href="<?php  the_permalink(); ?>"><img loading="lazy"  src="<?php echo $imagepost[0]; ?>" alt="<?php echo $altpost; ?>"></a>
                  </div>
                  <div class="article-content">
                     <ul class="article-meta">
                         <?php $post_date = get_the_date( 'F / j/ Y' ); ?>
                        <li><?php echo $post_date;?></li>
                       <!--  <li>by <?php $author = get_the_author();  echo $author;?></li> -->
                     </ul>
                     <h4 class="article-title"><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></h4>
                     <p>
                      <?php the_field('small_description___blog', $post->ID); ?>
                      <?php  //echo wp_trim_words( the_content(), 55, $moreLink); ?></p>
                  </div>
               </article>
            </div>
              <?php endwhile;?>
           <?php wp_reset_postdata(); ?>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="panel-btn">
                  <a href="<?php the_field('blog_read_more_link'); ?>" class="btn btn-brand">View More</a>
               </div>
            </div>
         </div>
      </div>
   </section>

	   <?php /* ?>
   <section class="section-home-footer-content">
      <div class="container">
         <div class="row">

            <div class="col-12">
               <h3><?php the_field('footer_content_title'); ?></h3>
               <?php the_field('footer_content_text'); ?>
            </div>

         </div>
      </div>
   </section>
   <?php */ ?>

<?php get_footer();?>
