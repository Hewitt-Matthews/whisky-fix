<?php
get_header(); 
/*
Template Name:Contact Page
*/
?>
                  <!-- Main Page -->

         <!-- Main Page -->
         <div id="page" class="site-page">
 <?php $headerimage=get_field('header_image_'); ?>
            <!-- ============ CONTACT MAIN BANNER ============  -->
            <section class="si-contact-banner" style="background: #000 url(<?php echo $headerimage['url']; ?>) no-repeat center/cover;">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-4 col-lg-6 col-md-8">
                        <h1 class="banner-title"><?php the_field('page_title___'); ?> </h1>
                        <p><?php the_field('header_content'); ?></p>
                        <ol class="breadcrumb breadcrumb-alt">
                             <?php if ( function_exists('yoast_breadcrumb') ) {
                              yoast_breadcrumb('<li class="breadcrumb-item">','</li>');
                           } ?>
                          <!--  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Contact</li> -->
                        </ol>
                     </div>
                  </div>
               </div>
            </section>

            <!-- ============ SECTION CONTACT ADDRESS ============  -->
            <section class="si-contact-address">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-md-6">
                        <div class="address-panel">
                           <div class="icon-panel">
                              <div class="round"></div>
                              <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-contact-location.svg" alt="Address Icon">
                              <h6>ADDRESS</h6>
                           </div>
                           <div class="content-panel">
                              <address>
                                <?php the_field('address___contact'); ?>
                              </address>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                        <div class="address-panel">
                           <div class="icon-panel">
                              <div class="round"></div>
                              <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-contact-phone.svg" alt="Phone Icon">
                              <h6>PHONE</h6>
                           </div>
                           <div class="content-panel">
                              <a href="tel:<?php the_field('phone_contact'); ?>"><?php the_field('phone_contact'); ?></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                        <div class="address-panel">
                           <div class="icon-panel">
                              <div class="round"></div>
                              <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-contact-mail.svg" alt="Email Icon">
                              <h6>MAIL</h6>
                           </div>
                           <div class="content-panel">
                              <a href="mailto:<?php the_field('email_contact'); ?>"><?php the_field('email_contact'); ?></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                        <div class="address-panel">
                           <div class="icon-panel">
                              <div class="round"></div>
                              <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-contact-clock.svg" alt="Clock Icon">
                              <h6>HOURS</h6>
                           </div>
                           <div class="content-panel">
                             <?php the_field('working_hours_______'); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <!-- ============ SECTION CONTACT FORM ============  -->
            <section class="si-contact-form">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <h2 class="main-title brand-color">Get In Touch with us</h2>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xl-8 mx-auto">
                        <div class="row">
                            <div class="col-md-12">
                              <?php echo do_shortcode('[wpforms id="404" title="false" description="false"]'); ?>
                            </div>
                     <!--       <div class="col-md-6">
                              <div class="form-group form-group-alt">
                                 <input type="text" class="form-control" placeholder="First name:*">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group form-group-alt">
                                 <input type="text" class="form-control" placeholder="Last name:*">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group form-group-alt">
                                 <input type="email" class="form-control" placeholder="E-mail:*">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group form-group-alt">
                                 <input type="text" class="form-control" placeholder="Phone Number:*">
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group form-group-alt">
                                 <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group form-group-btn">
                                 <button class="btn btn-brand">Submit</button>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <!-- ============ SECTION MAP ============  -->
            <section class="si-map">
               <?php the_field('google_map__________'); ?>
            </section>

  <?php get_footer();?>      