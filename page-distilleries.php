<?php
get_header(); 
/*
Template Name:Distilleries Page
*/
?>

         <!-- Main Page -->
         <div id="page" class="site-page">

            <!-- ============ BREADCRUMB HEADER ============ -->
            <div class="breadcrumb-heading">
               <div class="container">
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

            <!-- ============ SECTION DISTILLERIES **============ -->
            <section class="section-distilleries">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <h2 class="main-title"><span class="brand-color">Distilleries</span></h2>
                     </div>
                  </div>
                  <div class="row">
                  <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'orderby' => 'ASC', 'parent' => 42, )); 
        foreach($wcatTerms as $wcatTerm) : 
        $wthumbnail_id = get_woocommerce_term_meta( $wcatTerm->term_id, 'thumbnail_id', true );
        $wimage = wp_get_attachment_url( $wthumbnail_id );  ?>
    <div><a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>">
    <?php if($wimage!=""):?><img loading="lazy"  src="<?php echo $wimage?>" class="aligncenter" alt="<?php echo $wcatTerm->name;?>"><?php endif;?></a>
    <h3 class="text-center"><a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php //echo $wcatTerm->name; ?></a></h3>
    </div>
    <?php endforeach; ?> 
  <!-- <?php //while ( have_rows('distilleries__page') ) : the_row();
      //  $images_logo = get_sub_field('distilleries_logo___distilleriespage');
   ?>                   
                      <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="<?php //echo $images_logo['url']; ?>" alt="media"></a></div></div>
                   <?php //endwhile;?> -->
      <!--                <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-2.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-3.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-4.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-5.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-6.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-7.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-8.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-9.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-10.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-11.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-12.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-13.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-14.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-15.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-16.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-17.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-18.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-19.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-20.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-21.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-22.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-23.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-24.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-25.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-26.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-27.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-28.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-29.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-30.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-31.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-32.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-33.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-34.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-35.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-36.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-37.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-38.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-39.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-40.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-41.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-42.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-43.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-44.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-45.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-46.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-47.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-48.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-49.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-50.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-51.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-52.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-53.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-54.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-55.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-56.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-57.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-58.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-59.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-60.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-61.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-62.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-63.jpg" alt="media"></a></div></div>
                     <div class="col-lg-2 col-md-3 col-4"><div class="d-panel"><a href="#"><img loading="lazy"  src="img/d-brand-64.jpg" alt="media"></a></div></div>
                  </div> -->
               </div>
            </section>
<?php get_footer();?>   