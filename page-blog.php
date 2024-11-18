<?php
get_header(); 
/*
Template Name:Blog Page
*/
?>
         <!-- Main Page -->
         <div id="page" class="site-page">

            <!-- ============ BLOG BANNER **============ -->
              <?php $headerimage=get_field('header_image_'); ?>

            <section class="si-blog-banner" style="background:#000 url(<?php echo $headerimage['url'] ?>) no-repeat center/cover;">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-4">
                        <h1 class="banner-title"><?php the_field('page_title___'); ?></h1>
                        <p><?php the_field('header_content'); ?></p>
                     </div>
                  </div>
               </div>
            </section>

            <!-- ============ SPECIAL ARTICLE **============ -->
            <section class="si-special-article">
               <div class="container">
                  <div class="row">
                      <?php $count = 0;  $the_query = new WP_Query( array(
                     'post_type' => 'post',                   
                     'posts_per_page' => 2 ) );  
                         
                        while ($the_query -> have_posts()) : $the_query -> the_post();
                        $imagepost = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                         $altpost = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true); 
                       ?>
                     <div class="col-lg-6">
                        <article class="article-special">
                           <div class="article-media">
                              <a href="<?php  the_permalink(); ?>"><img loading="lazy"  src="<?php echo $imagepost[0]; ?>" alt="<?php echo $altpost; ?>"></a>
                           </div>
                           <div class="article-content">
                              <ul class="article-meta">
                                  <?php $post_date = get_the_date( 'F/ j/ Y' ); ?>
                                 <li><?php echo $post_date;?></li>
                                 <li>by <?php $author = get_the_author();  echo $author;?></li>
                              </ul>
                              <h4 class="article-title"><?php the_title(); ?></h4>
                              <p><?php echo wp_trim_words( get_the_content(), 20 ); //echo wp_trim_words( the_content(), 55, $moreLink); ?></p>
                              <a href="<?php  the_permalink(); ?>" class="btn btn-brand">Read more</a>
                           </div>
                        </article>
                     </div> 
                        <?php endwhile;?>
                        <?php wp_reset_postdata(); ?>       
                  </div>
               </div>
            </section>

            <!-- ============ NORMAL BLOGS **============ -->
            <section class="si-normal-blog-blocks">
               <div class="container">
                  <div class="row">
                     <main class="col-xl-8 col-lg-8 col-blog-list">
                        <div class="row">
                            <?php $counter = 1;  
                            $the_query = new WP_Query( array(
                              'post_type' => 'post',                   
                              'posts_per_page' => -1 ) );  
                         
                            while ($the_query -> have_posts()) : $the_query -> the_post();
                           $imagepost1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                         $altpost1 = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true); 
                       ?>
                       <?php  if( $counter > 2 ) {?>

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
                                    <p><?php echo wp_trim_words( get_the_content(), 20 ); //echo wp_trim_words( the_content(), 15, $moreLink); ?></p>
                                 </div>
                                 <div class="article-link">
                                    <a href="<?php  the_permalink(); ?>" class="btn btn-brand">Read More</a>
                                 </div>
                              </article>
                           </div>
                           <?php } $counter++; endwhile;?>
             
                        </div>
                     </main>
                     <aside class="col-xl-4 col-lg-4 col-widget">
                        <div class="widget widget-recent-post">
                           <h5 class="widget-title">RECENT POSTS</h5>
                                 <?php $counter = 1;  
                            $the_query1 = new WP_Query( array(
                              'post_type' => 'post',                   
                              'posts_per_page' => -1 ) ); 
                         
                               while ($the_query1 -> have_posts()) : $the_query1 -> the_post();
                              $imagepost2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                               $altpost2 = get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true); 
                             ?>
                           <a href="<?php  the_permalink(); ?>" class="recent-post-panel">
                              <img loading="lazy"  src="<?php echo $imagepost2[0]; ?>" alt="<?php echo $altpost2; ?>">
                              <div class="content">
                                 <?php $post_date2 = get_the_date( 'F/ j/ Y' ); ?>
                                 <p class="date"><?php echo $post_date2; ?></p>
                                 <p class="author">by <?php $author1 = get_the_author();  echo $author1;?></p>
                                 <h6 class="title"><?php the_title(); ?></h6>
                              </div>
                           </a>
                        <?php endwhile;?>                          
                        </div>
                        <?php /*<div class="widget widget-archives">
                           <h5 class="widget-title">ARCHIVES</h5>
                         
                           <ul>
                            <?php //wp_get_archives('type=monthly','show_post_count=true');
                                $args = array(
                                'type'            => 'monthly',
                                'limit'           => '',
                                'format'          => 'custom',
                                'before'          => '<div class="sub-item">',
                                'after'           => '</div>',
                                'show_post_count' => true,
                                'echo'            => 1,
                                'order'           => 'DESC'
                            );
                            wp_get_archives( $args );

                             ?>
                           </ul>
                        </div>*/ ?>
                     </aside>
                  </div>
               </div>                  
            </section>

  <?php get_footer();?>       