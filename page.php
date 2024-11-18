<?php
/**
* The template for displaying all pages
*
*/

get_header(); ?>

<div id="page" class="site-page">
      <div class="breadcrumb-heading">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <ol class="breadcrumb">
                             <?php if ( function_exists('yoast_breadcrumb') ) {
                              yoast_breadcrumb('<li class="breadcrumb-item">','</li>');
                           } ?>
                           </ol>
                     </div>
                     <div class="col-lg-6">
					<?php  
						 $post_id = 72;
                     	 $queried_post1 = get_post($post_id);
						 if(is_cart() || is_checkout()){
                     ?>
                        <p class="breadcrumb-note"><?php the_field('website_note__',$post_id); ?></p>						 
                         <?php } wp_reset_postdata(); ?>
                     </div>
                  </div>
               </div>
            </div>
             
             <section class="section-page">
               <div class="container">
                  <div class="row ">

                     <div class="col-xl-12 col-md-12">
                        <?php the_content(); ?>
                     </div>
                 
                  </div>
               </div>
            </section>
        </div>
<?php get_footer();?>
