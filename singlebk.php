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
                                   <!--  <li>by <?php $author = get_the_author();  echo $author;?></li> -->
                                 </ul>
                              </figcaption>
                           </figure>
                           <div class="article-heading">
                              <div class="article-title"><?php the_title(); ?></div>
                             <!--  <p>New releases reviewed on JancisRobinson.com</p> -->
                           </div>

                           <?php 
                           if( have_rows('blog_content___') ):
                           while ( have_rows('blog_content___') ) : the_row();
                           $post_title = get_sub_field('post_title___blogtitle_');
                          
                           ?>
                           <h3><?php echo $post_title;?></h3>

                           <?php 
                           if( have_rows('post_content____blog') ):
                           while ( have_rows('post_content____blog') ) : the_row();
                           $post_subtitle = get_sub_field('post_title__singlepost________');
                           $post_content = get_sub_field('post_content__singlepost_________content');
                           $post_image = get_sub_field('post_image___blogpost');
                          
                           ?>
                           <p><span class="brand-color"><?php echo $post_subtitle; ?></span></p>
                           <?php echo $post_content; ?>
                           <br>
                           <?php if($post_image):?>
                            <figure class="full-width-image">
                              <img loading="lazy"  src="<?php echo $post_image['url']; ?>" alt="<?php echo $post_image['alt']; ?>">
                           </figure>
                            <br>
                        <?php endif;?>
                             
                        <?php endwhile;?>
                         <?php endif;?>
                            <?php endwhile;?>
                              <?php endif;?>
                              <?php if( have_rows('column_6_block') ):
                                ?>
                              <div class="row">
                                <?php 

                           while ( have_rows('column_6_block') ) : the_row();
                            $column_content = get_sub_field('column_content_');
                                ?>
                                <div class="col-lg-6">
                                  <?php echo $column_content;?>

                                </div>
                              <?php endwhile;?>
                              </div>
                            <?php endif;?>
                           
                          
                           <div class="article-contact-panel">
                              <?php  $post_id = 72;
                                       $queried_post1 = get_post($post_id);
                                       ?>
                              <p><?php the_field('post_bottom_content',$post_id); ?></p>
                               <?php wp_reset_postdata(); ?>   
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?> 