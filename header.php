<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">      
	   <link rel="icon" href="https://whiskyfix.com/wp-content/uploads/2021/04/whiskyfixfav.png">
      <title><?php wp_title('&raquo;','true','right'); ?><?php //bloginfo('name'); ?></title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap"> 

       <?php wp_head(); ?>   
   </head>
	
<?php
if (is_home() || is_front_page()) {
?>
    <div id="verificationModal">
      <div class="modal-content">
        <div class="whisky-logos">
		<img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/WhiskyFixLogo.svg" alt="WhiskyFix - Whisky, Gin and Rum"  loading="lazy" width="4322" height="1146">
		 <img loading="lazy"  src="/wp-content/uploads/2023/11/Whisky-Shop-Logo.png" alt="WhiskyFix - Oban Whisky" loading="lazy" width="239" height="240">
        </div>
        <h2>Are you of legal drinking age in your country of residence?</h2>
         <div class="modal-buttons">
            <button id="overAge">YES</button>
            <button id="underAge">NO</button>
        </div>
        <div class="modal-remember-me">
            <label>
              <input type="checkbox" name="remember_me" id="remember_me" checked="checked">
              Remember Me
           </label>
        </div>
      </div>
    </div>
<?php
}
?>
	
   <body <?php body_class(); ?>>
      <div class="site-frame">

         <!-- Header -->
         <header id="header" class="site-header">
            <div class="brand-header">
               <div class="container">
                  <div class="row mx-auto">
                     <div class="left-panel">
                        <button class="btn btn-toggle-menu"><i class="las la-bars"></i></button>
                       <button class="btn btn-header-search"><i class="las la-search fa-flip-horizontal"></i></button>
                     </div>
                     <div class="brand-panel">
						<a href="<?php echo home_url(); ?>"><img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/WhiskyFixLogo.svg" alt="WhiskyFix - Whisky, Gin and Rum"  loading="lazy" width="4322" height="1146"></a>
                     </div>
                     <div class="right-panel">
                       <!-- <button class="btn btn-price"> -->
                        <?php //$cart_total = $woocommerce->cart->get_cart_total();  ?>
                        <?php $total_cart = WC()->cart->get_displayed_subtotal();?>
                      <!--   <i class="las la-pound-sign"> </i><span class="totamnt"> <?php echo $total_cart; ?></span></button> -->
                          <?php if ( is_user_logged_in() ) { ?>
                        <button class="btn btn-user">                        
                  <a  href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>">                      
                          <?php _e('<i class="las la-user"></i>','woothemes'); ?></a>
                        </button>
                         <?php } else{?>
                    <button class="btn btn-user">                        
                  <a  href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>">                      
                          <?php _e('<i class="las la-user"></i>','woothemes'); ?></a>
                        </button>
                         <?php } ?>
                        
                        <button class="btn btn-favorites"><a href="https://whiskyfix.com/wishlist/"><i class="lar la-heart"></i></a></button>
                        <button class="btn btn-cart"> <a href="https://whiskyfix.com/cart/">
                           <i class="las la-shopping-cart"></i>
                         </a>
                           <span class="cart-count"><?php echo do_shortcode('[woo_cart_but]'); ?></span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="dark-menu-frame dark-menu">
				<div class="container">
					<nav class="">    
						<?php
							wp_nav_menu(array
								(
								'menu' => 'darkmenu',
								'container' => '',
								'menu_class' => 'menu',
							));
							?>
					</nav>
				  </div>
            </div>

            <!-- ------ DESKTOP MENU ------ -->
            <div class="desktop-menu-frame">
               <div class="desktop-menu-inner">
                  <div class="row">
                     <div class="col-12">
                        <button class="btn btn-desktop-menu-close"><i class="las la-times"></i></button>
                     </div>
                  </div>
                  <div class="row mx-0 desktop-menu-row">
                     <div class="col-md-4 desktop-menu-col">
                        <h4 class="menu-title">Whisky Fix</h4>
                      
                         <?php
                          wp_nav_menu(array
                              (
                              'menu' => 'Whiskymenu',
                              'container' => '',
                              'menu_class' => 'desktop-menu',
                          ));
                          ?>
                     </div>
                     <div class="col-md-5 desktop-menu-col">
                        <h4 class="menu-title">Online Shop</h4>
                      
                          <?php
                          wp_nav_menu(array
                              (
                              'menu' => 'shopmenu',
                              'container' => '',
                              'menu_class' => 'desktop-menu',
                          ));
                          ?>
                     </div>
                     <div class="col-md-3 desktop-menu-col">
                        <h4 class="menu-title">Account</h4>
                     
                          <?php
                          wp_nav_menu(array
                              (
                              'menu' => 'accountmenu',
                              'container' => '',
                              'menu_class' => 'desktop-menu',
                          ));
                          ?>
                     </div>
                  </div>
                  <div class="desktop-social-menu">
                     <p>Find Us On</p>
                      <?php  $post_id = 72;
                        $queried_post1 = get_post($post_id);
                        ?>
                        <?php while ( have_rows('social__media',$post_id) ) : the_row();
                                 $social_icon = get_sub_field('social_icon_',$post_id);
                                 $social_links = get_sub_field('social_links',$post_id);
                                 $social_class = get_sub_field('class_sociallinks',$post_id);      
                                 ?>
                              <!--    <a href="<?php // echo $social_links;?>" class="<?php //echo $social_class; ?>" target="_blank" >
                                    <span class="icon"><i class="fa <?php //echo $social_icon['value']; ?>" aria-hidden="true"></i></span>
                                  
                                   <?php // echo $social_icon['label']; ?>
                                 </a> -->
                                 <a href="<?php echo $social_links;?>" class="<?php echo $social_class; ?>" target="_blank"><i class="fa <?php echo $social_icon['value']; ?>" aria-hidden="true"></i></a>
                                    <?php endwhile;?> 
                    <!--  <a href="#" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     <a href="#" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     <a href="#" class="li"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                     <a href="#" class="in"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
                  </div>
               </div>
            </div>

            <!-- ------ MOBILE MENU ------ -->
            <div class="mobile-menu-frame">
               <ul class="mobile-menu-header">
                 <!--  <li><a href="#" class="btn"><i class="las la-pound-sign"></i><span class="totamnt"> <?php echo $total_cart; ?></span></a></li>
 -->                  <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>" class="btn"><i class="las la-user"></i></a></li>
                  <li><a href="https://whiskyfix.com/wishlist/" class="btn"><i class="lar la-heart"></i></a></li>
					<li><a href="https://whiskyfix.com/cart/" class="btn">
                           <i class="las la-shopping-cart"></i>
						   <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count();?></span>
					</a></li>
                  <li><button class="btn btn-mobile-menu-close"><i class="las la-times"></i></button></li>
               </ul>
               <ul class="mobile-menu">
				<li class='dd-mobile-menu-item'>
			   <?php
				wp_nav_menu(array
					(
					'menu' => 'shopmenu',
					'container' => '',
					'menu_class' => '',
				));
				?>
				<?php
				wp_nav_menu(array
					(
					'menu' => 'Whiskymenu',
					'container' => '',
				));
				?>
				</li>
               </ul>
               <div class="mobile-social-menu">
                <?php  $post_id = 72;
                     $queried_post1 = get_post($post_id);
                     ?>
                     <?php while ( have_rows('social__media',$post_id) ) : the_row();
                                 $social_icon = get_sub_field('social_icon_',$post_id);
                                 $social_links = get_sub_field('social_links',$post_id);
                                 $social_class = get_sub_field('class_sociallinks',$post_id);                              
                                 ?>

                                <!--  <a href="<?php //echo $social_links;?>" class="<?php //echo $social_class; ?>" target="_blank" >
                                    <span class="icon"><i class="fa <?php //echo $social_icon['value']; ?>" aria-hidden="true"></i></span>
                                  
                                   <?php //echo $social_icon['label']; ?>
                                 </a> -->
                                  <a href="<?php echo $social_links;?>" class="<?php echo $social_class; ?>" target="_blank" >
                                    <span class="icon"><i class="fa <?php echo $social_icon['value']; ?>" aria-hidden="true"></i></span>
                                  
                                   <?php //echo $social_icon['label']; ?>
                                 </a>
                             
                           <?php endwhile;?>  

                 <!--  <a href="#" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#" class="li"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  <a href="#" class="in"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
               </div>
            </div>
             <?php wp_reset_postdata();?>
            <!-- ------ MIN CART ------ -->
           <!--  <div class="aside-min-cart">
               <header class="min-cart-header">
                  <h5 class="title"><i class="las la-shopping-cart"></i>Shopping Cart</h5>
                  <button class="btn-min-cart-close"><i class="las la-times"></i></button>
               </header>
               <div class="min-cart-body">
                <?php //echo do_shortcode('[whmc_mini_cart]');?>
              
               </div>
               <footer class="min-cart-footer">
                  <div class="min-cart-total">
                     <span>SUBTOTAL:</span>
                     <span class="brand-color">£80.00</span>
                  </div>
                  <div class="min-cart-buttons">
                     <button class="btn btn-brand-dark">VIEW CART</button>
                     <button class="btn btn-brand">CHECKOUT</button>
                     <button class="btn btn-paypal">CHECKOUT WITH <img loading="lazy"  src="img/icon-paypal.svg" alt="paypal"></button>
                  </div>
               </footer>
            </div> -->
             <div class="header-search-frame">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <button class="btn btn-header-search-close"><i class="las la-times"></i></button>
                        <div class="header-search-group">
                         <!--   <input type="text" class="form-control" placeholder="Search products">
                           <span class="icon-search"><i class="las la-search fa fa-flip-horizontal"></i></span> -->
                           <?php get_product_search_form(); ?>  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>