<?php
get_header(); 
/*
Template Name:About Page
*/
?>
         <!-- Main Page -->
         <div id="page" class="site-page">

            <!-- ============ HOME ABOUT **============ -->
            <?php $headerimage=get_field('header_image_'); ?>
            <section class="section-home-about si-about-banner" style="background: #000 url(<?php echo $headerimage['url']; ?>) no-repeat left/cover;">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="panel-content">
                           <h1 class="main-title"><?php the_field('page_title___'); ?> <span class="brand-color"><?php the_field('sub__page_title'); ?></span></h1>
                           <p><?php the_field('header_content'); ?></p>
                           <ol class="breadcrumb breadcrumb-alt">
                              <?php if ( function_exists('yoast_breadcrumb') ) {
                              yoast_breadcrumb('<li class="breadcrumb-item">','</li>');
                           } ?>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <!-- ============ SECTION **============ -->
            <section class="si-main-about">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-9 col-lg-10 mx-auto">
                        <?php the_field('about_content_'); ?>
                     </div>
                  </div>
               </div>
            </section>

            <!-- ============ SECTION **============ -->
            <section class="si-about-all-products">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-7 col-lg-6">
                        <div class="panel-media">
                           <?php $abtimg= get_field('section_image_aboutimage'); ?>
                           <img loading="lazy"  src="<?php echo $abtimg['url']; ?>" alt="<?php echo $abtimg['alt']; ?>">
                        </div>
                     </div>
                     <div class="col-xl-5 col-lg-6">
                        <div class="panel-content">
                           <h2 class="main-title"><?php the_field('section_title_aboutsection2main'); ?> <span class="brand-color"><?php the_field('sub_title_aboutpagesection2'); ?></span></h2>
                           <?php the_field('section_content_aboutsection2'); ?>
                           <div class="panel-btn"><a href=" <?php the_field('read_more_link_aboutsection2'); ?>" class="btn btn-brand">Browse</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <!-- ============ SECTION ABOUT COUNTER **============ -->
            <section class="si-about-counter">
               <div class="container">
                  <div class="row">
                     <?php while ( have_rows('features_block_') ) : the_row();
                     $icon_aboutpage = get_sub_field('icon_aboutpage');
                     $features_titleaboutpage = get_sub_field('features_titleaboutpage');
                     $features_content = get_sub_field('features_content');
                     ?>
                     <div class="col-4">
                        <div class="panel-counter">
                           <img loading="lazy"  src="<?php echo $icon_aboutpage['url'] ?>" alt="<?php echo $icon_aboutpage['alt'] ?>">
                           <h4><?php echo $features_content; ?>+</h4>
                           <h6><?php echo $features_titleaboutpage; ?></h6>
                        </div>
                     </div>
                  <?php endwhile;?>
                  
                  </div>
               </div>
            </section>

            <!-- ============ SECTION STREET VIEW **============ -->
            <section class="section-street-view">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                           <?php the_field('google_map_code'); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </section>



         <?php get_footer();?>   