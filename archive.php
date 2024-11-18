<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
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
                          <?php  $post_id = 72;
                     $queried_post1 = get_post($post_id);
                     ?>
                        <p class="breadcrumb-note"><?php the_field('website_note__',$post_id); ?></p>
                         <?php wp_reset_postdata(); ?>
                     </div>
                  </div>
               </div>
            </div>
             
            
                  <section class="si-normal-blog-blocks">
               <div class="container">
                  <div class="row">
                        <?php //the_content(); ?>
                        <?php while ( have_posts() ) : the_post(); 
                  $imagepost1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                         $altpost1 = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true); 
  ?>
        <div class="col-md-6">
          <article class="article-min">
             <div class="article-media">
                <a href="<?php  the_permalink(); ?>"><img loading="lazy"  src="<?php echo $imagepost1[0]; ?>" alt="<?php echo $altpost1; ?>"></a>
             </div>
             <div class="article-content">
                <ul class="article-meta">
                   <?php $post_date1 = get_the_date( 'F/ j/ Y' ); ?>
                   <li><?php echo $post_date1;?></li>
                   <li>by <?php $author = get_the_author();  echo $author;?></li>
                </ul>
                <h4 class="article-title"><?php the_title(); ?></h4>
                <p><?php echo wp_trim_words( the_content(), 15, $moreLink); ?></p>
             </div>
             <div class="article-link">
                <a href="<?php  the_permalink(); ?>" class="btn btn-brand">Read More</a>
             </div>
          </article>
       </div>           
					<!-- <h3 class="entry-title"><a href="<?php  //the_permalink(); ?>"><?php //the_title(); ?></a></h3>  -->	 
					<?php endwhile;  ?>
                     </div>
                 
                  </div>
             
            </section>
        </div>


<?php
get_footer();
