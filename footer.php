            <!-- ============ SUBSCRIBE **============ -->
            <section class="section-subscribe">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-5">
                        <h5 class="title">Subscribe</h5>
                        <p>Subscribe to our mailing list to get the new updates!</p>
                     </div>
                     <div class="col-xl-7">
                        <div class="subscribe-form">
                          <!--  <input type="text" class="form-control" placeholder="Email Address">
                           <button class="btn btn-brand">Subscribe</button> -->
                            <?php echo do_shortcode('[wpforms id="396" title="false" description="false"]'); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

         </div>

         <!-- Footer **-->
          
         <footer id="footer" class="site-footer d-none d-md-block">
          <?php  $post_id = 72;
            $queried_post1 = get_post($post_id);
            ?>
            <div class="main-footer">
               <div class="container">
                  <div class="row justify-content-md-center">
                     <div class="d-flex justify-content-center">
                        <div class="footer-brand">
                            <?php $footer_logo=get_field('footer_logo',$post_id); ?>
                           <img loading="lazy"  src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['alt'];?>">
                        </div>
                     </div>
                  </div>
                   <?php wp_reset_postdata(); ?>
                  <div class="row">
                     <div class="col-footer">
                        <div class="footer-panel">
                           <h5 class="title">Quick Links</h5>
                        
                               <?php
                          wp_nav_menu(array
                              (
                              'menu' => 'footer-menu',
                              'container' => '',
                              'menu_class' => 'footer-menu',
                          ));
                          ?>
                            
                        </div>
                     </div>
                     <div class="col-footer">
                        <div class="footer-panel">
                           <h5 class="title">Online Shop</h5>
                         
                            <?php
                          wp_nav_menu(array
                              (
                              'menu' => 'shopmenu',
                              'container' => '',
                              'menu_class' => 'footer-menu',
                          ));
                          ?>
                        </div>
                     </div>
                     <div class="col-footer">
                        <div class="footer-panel footer-panel-account">
                           <h5 class="title">Account</h5>
                          
                           <?php
                          wp_nav_menu(array
                              (
                              'menu' => 'accountmenu-menu',
                              'container' => '',
                              'menu_class' => 'footer-menu',
                          ));
                          ?>
                        </div>
                     </div>
                     <?php  $post_id = 72;
                     $queried_post1 = get_post($post_id);
                     ?>
                     <div class="col-footer">
                        <div class="footer-panel">
                           <h5 class="title">Contact Info</h5>
                           <ul class="footer-address">
                              <li>
                                 <i class="lar la-compass"></i>
                                 <address>
                                    <p><?php the_field('address_contact',$post_id); ?></p>
                                 </address>
                              </li>
                              <li>
                                 <i class="las la-mobile"></i>
                                 <a href="tel:<?php the_field('phone_number_contact',$post_id); ?>"><?php the_field('phone_number_contact',$post_id); ?></a>
                              </li>
                              <li>
                                 <i class="las la-envelope"></i>
                                 <a href="mailto:<?php the_field('email__idcontact',$post_id); ?>"><?php the_field('email__idcontact',$post_id); ?></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-footer col-footer-social">
                        <div class="footer-panel footer-panel-social">
                           <h5 class="title">Find Us On</h5>
                           <ul class="footer-social-media">
                                <?php while ( have_rows('social__media',$post_id) ) : the_row();
                                 $social_icon = get_sub_field('social_icon_',$post_id);
                                 $social_links = get_sub_field('social_links',$post_id);
                                 $social_class = get_sub_field('class_sociallinks',$post_id);                              
                                 ?>

                              <li>
                                 <a href="<?php echo $social_links;?>" class="<?php echo $social_class; ?>" target="_blank" >
                                    <span class="icon"><i class="<?php echo $social_icon['value']; ?>" aria-hidden="true"></i></span>
                                  
                                   <?php echo $social_icon['label']; ?>
                                 </a>
                              </li>
                           <?php endwhile;?>                      
                               
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-footer">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-7 col-lg-8">
                        <ul class="footer-bottom-links">
                           <li></li>
                           <li><a href="<?php the_field('privacy_policy_link',$post_id); ?>">Privacy Policy</a></li>
                          <!--  <li><a href="<?php //the_field('faq_link',$post_id); ?>">FAQ</a></li> -->
                           <li>Developed By <a href="https://www.mr-digital.co.uk/" target="_blank">Mr Digital</a></li>
                        </ul>
                     </div>
                     <div class="col-xl-5 col-lg-4">
                        <div class="footer-payment-brands"><img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/footer-payments.png" alt="Payment Method Logos"></div>
                     </div>
                      <?php wp_reset_postdata(); ?>
                  </div>
               </div>
            </div>
         </footer>
      <footer class="mobile-site-footer d-block d-md-none">
<?php  $post_id = 72;
            $queried_post1 = get_post($post_id);
            ?>
            <div class="main-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="footer-brand">
                           <img loading="lazy"  src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['alt'];?>">
                          <!--  <img loading="lazy"  src="img/footer-brand.png" alt="brand"> -->
                        </div>
                     </div>
                  </div>
                   <?php wp_reset_postdata(); ?>
                  <div class="row">
                     <div class="col-12">
                        <div class="accordion mobile-footer-accordion" id="mobileFooter">
                           <div class="card">
                              <div class="card-header" id="headingOne">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#mfa1" aria-expanded="true" aria-controls="mfa1">
                                       Quick Links
                                    </button>
                                 </h2>
                              </div>
                              <div id="mfa1" class="collapse" aria-labelledby="headingOne" data-parent="#mobileFooter">
                                 <div class="card-body">                               
                                     <?php
                          wp_nav_menu(array
                              (
                              'menu' => 'footer-menu',
                              'container' => '',
                              'menu_class' => 'footer-menu',
                          ));
                          ?>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingTwo">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#mfa2" aria-expanded="false" aria-controls="mfa2">
                                    Online Shop
                                    </button>
                                 </h2>
                              </div>
                              <div id="mfa2" class="collapse" aria-labelledby="headingTwo" data-parent="#mobileFooter">
                                 <div class="card-body">
                                  
                                    <?php
                                      wp_nav_menu(array
                                          (
                                          'menu' => 'shopmenu',
                                          'container' => '',
                                          'menu_class' => 'footer-menu',
                                      ));
                                      ?>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingThree">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#mfa3" aria-expanded="false" aria-controls="mfa3">
                                    Account
                                    </button>
                                 </h2>
                              </div>
                              <div id="mfa3" class="collapse" aria-labelledby="headingThree" data-parent="#mobileFooter">
                                 <div class="card-body">
                                   
                                     <?php
                          wp_nav_menu(array
                              (
                              'menu' => 'accountmenu-menu',
                              'container' => '',
                              'menu_class' => 'footer-menu',
                          ));
                          ?>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingFour">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#mfa4" aria-expanded="false" aria-controls="mfa4">
                                    Contact Info
                                    </button>
                                 </h2>
                              </div>
                              <div id="mfa4" class="collapse" aria-labelledby="headingFour" data-parent="#mobileFooter">
                                 <div class="card-body">
                                    <?php  $post_id = 72;
                                     $queried_post1 = get_post($post_id);
                                     ?>
                                     <ul class="footer-address">
                              <li>
                                 <i class="lar la-compass"></i>
                                 <address>
                                    <p><?php the_field('address_contact',$post_id); ?></p>
                                 </address>
                              </li>
                              <li>
                                 <i class="las la-mobile"></i>
                                 <a href="tel:<?php the_field('phone_number_contact',$post_id); ?>"><?php the_field('phone_number_contact',$post_id); ?></a>
                              </li>
                              <li>
                                 <i class="las la-envelope"></i>
                                 <a href="mailto:<?php the_field('email__idcontact',$post_id); ?>"><?php the_field('email__idcontact',$post_id); ?></a>
                              </li>
                           </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="headingFive">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#mfa5" aria-expanded="false" aria-controls="mfa5">
                                    Find Us On
                                    </button>
                                 </h2>
                              </div>
                              <div id="mfa5" class="collapse" aria-labelledby="headingFive" data-parent="#mobileFooter">
                                 <div class="card-body">
                                  
                                     <ul class="footer-social-media">
                                <?php while ( have_rows('social__media',$post_id) ) : the_row();
                                 $social_icon = get_sub_field('social_icon_',$post_id);
                                 $social_links = get_sub_field('social_links',$post_id);
                                 $social_class = get_sub_field('class_sociallinks',$post_id);                              
                                 ?>

                              <li>
                                 <a href="<?php echo $social_links;?>" class="<?php echo $social_class; ?>" target="_blank" >
                                    <span class="icon"><i class="fa <?php echo $social_icon['value']; ?>" aria-hidden="true"></i></span>
                                  
                                   <?php echo $social_icon['label']; ?>
                                 </a>
                              </li>
                           <?php endwhile;?>                      
                               
                           </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="bottom-footer">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-7 col-lg-8">
                        <ul class="footer-bottom-links">
                            <li>© <?php echo date('Y'); ?> Whisky Fix</li>
                           <li><a href="<?php the_field('privacy_policy_link',$post_id); ?>">Privacy Policy</a></li>
                           <li>Developed By <a href="https://www.mr-digital.co.uk/" target="_blank">Mr Digital</a></li>
                        </ul>
                     </div>
                     <div class="col-xl-5 col-lg-4">
                        <div class="footer-payment-brands"><img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/footer-payments.png" alt="Payment icons"></div>
                     </div>
                  </div>
               </div>
            </div>
            
         </footer>
      </div>           

<?php if(is_product_category()){?>
 <?php 
 $category = get_queried_object();
//echo $category->name;
                            
                             ?>

<?php //$count = 0;  $the_query = new WP_Query( array(
                //  'post_type' => 'product',
                //  'product_cat' => $category,                   
                //  'posts_per_page' => -1 ) );  

                //  while ($the_query -> have_posts()) : $the_query -> the_post();
                //      $Pimg = get_the_post_thumbnail_url($loop->post->ID, 'full');               
                //  $Palt = get_post_meta(get_post_thumbnail_id( $loop->post->ID ), '_wp_attachment_image_alt', true);
                   
                  //$discount_price = get_attribute('discount_product',$loop->post->ID );  
               //    global $product; 
                  ?>
      <!--             <div class="modal fade preview-modal quickViewModal" id="quickViewModal-<?php // echo $post->ID;?>" tabindex="-1" aria-labelledby="quickViewModalLabel-<?php //echo $post->ID;?>" aria-hidden="true">
            <div class="modal-dialog modal-xl">
               <div class="modal-content">
                  <div class="modal-body">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                     <div class="row">
                        <div class="col-lg-6 col-media">
                           <div class="">                         
                            <img loading="lazy"  src="<?php //echo $Pimg; ?>" alt="<?php //echo $Palt; ?>">                   
                           </div>
                        </div>
                        <div class="col-lg-6 col-content">
                           <?php // $titlenew= get_the_title($loop->post->ID);?>
                           <h4 class="modal-title"><?php //echo $titlenew;?></h4>
                          
                           <div class="modal-description">
                                <?php 
                               //echo  $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
                                ?>
                           </div>
                           <?php  //$discount_price = $product->get_attribute('discount_product',$loop->post->ID );  ?> 
                            <?php  //$vat_price = $product->get_attribute('vat_priceproduct',$loop->post->ID );  ?>  
                           <div class="modal-info"><?php //echo $discount_price;?></div>
                           <div class="modal-price">
                              <strong>£<?php //echo $price = get_post_meta( get_the_ID(), '_price', true ); ?></strong> <small> Ex. VAT £<?php //echo $vat_price;?></small>
                           </div>
                           <div class="modal-buy">
                         
                              <?php // do_action('woocommerce_simple_add_to_cart'); ?>
                           </div>
                           <div>
                             

                                  <?php //echo do_shortcode('[yith_wcwl_add_to_wishlist]',$loop->post->ID); ?>
                                
                           </div>                         
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
     -->
      <?php //endwhile;?>
         <?php //wp_reset_postdata(); ?> 

<?php }
?>
      <?php wp_footer(); ?> 
   <!--       <script type="text/javascript">
         jQuery('#header .btn-cart').click(function(){
jQuery('#apbd-mini-cart-container').toggleClass('apbd-mca-show');
});
      </script> -->
      <script>
jQuery(document).ready(function($){
var url = window.location.href;
url = url.split("/");
url = url[url.length-2];
if(url == "login") // You can set url[] according to slash parameter wise
{
$("#customer_login .u-column2").remove(); 

//Remove Registration Div
}
if(url == "register")
{
$("#customer_login .u-column1").remove(); 
$("#customer_login .si-my-account-login").remove(); // Remove Login Div
}
if(url == "my-account") {
$("#customer_login .u-column2").remove(); 
}
})
  // if ( qtyElement.val() == 0 ) {
  //           var cartItem = qtyElement.closest('.cart_item');
  //           var removeLink = cartItem.find('.product-remove a');

  //           if ( !removeLink.length ) {
  //               removeLink = cartItem.find('.remove u');
  //           }
            
  //           removeLink.trigger('click');

  //           return false;
  //       }
//   jQuery(document).ready(function($) {
//     jQuery(".woocommerce-checkout").validate({
//         rules: {
//             billing_first_name: "required"
//         },
//         messages: {
//             billing_first_name: "Please specify your name"

//         }
//     })

//     jQuery('#wpmc-next').click(function() {
//         jQuery(".woocommerce-checkout").valid();
//     });
// });
// jQuery('#wpmc-next').on('click', function($) {
//     alert('test')
// // });
// jQuery(document).ready(function ($) {

//     jQuery('.woocommerce-checkout').validate();

//     jQuery('#wpmc-next').click(function () {
//         if (jQuery(".woocommerce-checkout").valid()) {
//             alert('hello - valid form');
//         }
//     });

// });
// jQuery(document).ready(function() {
//     jQuery(".checkout").validate({
//         rules: {
//             billing_first_name: "required",
//            // field2: "required",
//            // field3: "required"
//         },
//         messages: {
//             billing_first_name: "Please specify your name",
//             //field3: "Please specify your name"

//         }
//     })

//     jQuery('#wpmc-next').click(function() {
//         jQuery(".checkout ").valid();
//     });
// });
// jQuery(document).ready(function ($) {

//     jQuery('.checkout').validate({
//         rules: {
//             'billing_first_name': {
//                 required: true
//             }
//         },
//         messages: {
//             'billing_first_name': {
//                 required: 'Name is  required'
//             }
//         },
//         errorClass: 'error-name',
//         errorPlacement: function (err, element) {
//             err.insertBefore(element);
//         },
//     });

   
//    jQuery("#wpmc-next").click(function () {
//         if (jQuery('.checkout').valid()) {
//             alert("form is valid");
//         } else {
      
//             alert("form is invalid");
//         }
//     });

// });
</script>
<!-- <script type="text/javascript">
$(function () {
  var $sections = $('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    $sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    navigateTo(curIndex() - 1);
  });

  // Next button goes forward iff current block validates
  $('.form-navigation .next').click(function() {
    $('.demo-form').parsley().whenValidate({
      group: 'block-' + curIndex()
    }).done(function() {
      navigateTo(curIndex() + 1);
    });
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  $sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});
</script> -->
   </body>
</html>
