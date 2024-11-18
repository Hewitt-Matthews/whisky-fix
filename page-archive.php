<?php
/* 
Template Name: Archives
*/
get_header(); ?>
 
<div id="primary" class="site-content">
<div id="content" role="main">
  <section class="si-normal-blog-blocks">
               <div class="container">
                  <div class="row">
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
<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
 

 

 
<?php endwhile; // end of the loop. ?>
 
</div><!-- #content -->
</div><!-- #primary -->
 

<?php get_footer(); ?>