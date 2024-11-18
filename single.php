<?php
/**
 * Template part for displaying a single post
 */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

         <!-- Main Page -->
         <div id="page" class="site-page">

            <!-- ============ SECTION ARTICLE MAIN **============ -->
            <section class="si-article-main">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-10 col-lg-11 mx-auto">
                        <article class="article-main">
                            <?php  $imagepost1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>
                           <figure class="article-featured-image">
                               <img loading="lazy"  src="<?php echo $imagepost1[0]; ?>" alt="<?php echo $imagepost1; ?>">
                              <figcaption class="article-featured-image-caption">
                                 <ul>
                                     <?php $post_date = get_the_date( 'F / j / Y' ); ?>
                                    <li><?php echo $post_date;?></li>
                                  
                                 </ul>
                              </figcaption>
                           </figure>
                           <div class="article-heading">
                              <h1 class="article-title"><?php the_title(); ?></h1>                        
                           </div>
                              <div class="row">
                        
                                <div class="col-lg-12">
                                  <?php the_content();?>

                                </div>
                          
                              </div> 
                        </article>
                     </div>
                  </div>
               </div>
            </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?> 