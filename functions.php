<?php
function themeslug_enqueue_style() {
    //wp_enqueue_style( 'my-theme', 'style.css', false );
      wp_enqueue_style( 'avenir', get_template_directory_uri() . '/css/avenir.css',false,'1.1','all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',false,'1.1','all');

    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css',false,'1.1','all');

    wp_enqueue_style( 'themestyle', get_template_directory_uri() . '/css/style.css',false,'1.1','all');
    //wp_enqueue_style( 'awesome', get_template_directory_uri() . '/css/font-awesome.min.css',false,'1.1','all');
    wp_enqueue_style( 'lineawesome', get_template_directory_uri() . '/css/line-awesome.min.css',false,'1.1','all');
    wp_enqueue_style( 'rangeSlider', get_template_directory_uri() . '/css/ion.rangeSlider.min.css',false,'1.1','all');
    // wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css','','1.3');
    wp_enqueue_style('styles', get_stylesheet_uri(), '', '1.0.42');
}

function themeslug_enqueue_script() {
    // wp_enqueue_script( 'my-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false );
     wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array ( 'jquery' ), 1.1, true);

        //wp_enqueue_script( 'jquery', get_template_directory_uri() . 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', array ( 'jquery' ), 1.1, true);

    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'rangeSliderion', get_template_directory_uri() . '/js/ion.rangeSlider.min.js', array ( 'jquery' ), 1.1, true);
	
	wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/41a4aea513.js', array(), '5.15.4', true);
	

    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), '1.0.6', true);
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

add_theme_support( 'post-thumbnails' );

if (function_exists('add_image_size')) {

        add_image_size('product_single', 600, 600, true);
}


function wpdocs_codex_footer_init() {
    $labels = array(
        'name'                  => _x( 'Footer and Header', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Footer and Header', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Footer and Header', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Footer and Header', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Footer', 'textdomain' ),
        'new_item'              => __( 'New Footer and Header', 'textdomain' ),
        'edit_item'             => __( 'Edit Footer and Header', 'textdomain' ),
        'view_item'             => __( 'View Footer and Header', 'textdomain' ),
        'all_items'             => __( 'All Footer and Header', 'textdomain' ),
        'search_items'          => __( 'Search Footer and Header', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Footer and Header:', 'textdomain' ),
        'not_found'             => __( 'No Footer found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Footer found in Trash.', 'textdomain' ),
         );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'footer-header' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

    );

    register_post_type( 'footer', $args );
}
add_action( 'init', 'wpdocs_codex_footer_init' );




function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'Footer Menu' ),
     'header-menu' => __( 'Header Menu' ),
      'shop-menu' => __( 'Shop Menu' ),
      'accountmenu-menu' => __( 'Account Menu' ),
      'whiskymenu-menu' => __( 'Whiskymenu Menu' ),
      'top-menu' => __( 'Top Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
}



// add_filter( 'woocommerce_product_reviews_tab_title', 'add_stars_to_review_tab', 98 );
// function add_stars_to_review_tab( $title ) {
//     global $product;

//     $average_rating = $product->get_average_rating();
//     $rating_count = $product->get_rating_count();
//     $review_count = $product->get_review_count();

//     if( ! empty($average_rating) && $average_rating > 0 ) {
//         return '<div>' . $title . '</div>' . wc_get_rating_html($average_rating) . sprintf(
//             '<div class="stars">%s / 5 (%s %s)</div>',
//             $average_rating,
//             $review_count,
//             _n( "review", "reviews", $review_count, "woocommerce" )
//         );
//     }
//     return $title;
// }
function custom_theme_setup() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
// function disable_woo_commerce_sidebar() {
//     remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
// }
// add_action('init', 'disable_woo_commerce_sidebar');
// function mytheme_add_woocommerce_support() {
//     add_theme_support( 'woocommerce' );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
function woocommerce_category_image() {
    if ( is_product_category() ){
        global $wp_query;
        $cat = $wp_query->get_queried_object();
        $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
       // echo '<section class="product-banner-big"></section>';
        if ( $image ) {
            echo '<div class="taximg"><img loading="lazy"  src="' . $image . '" alt="' . $cat->name . '" class="aligncenter" /></div>';
        }
    }
}

add_shortcode( 'woobanner', 'woocommerce_category_image' );


add_filter( 'woocommerce_available_payment_gateways', 'bbloomer_unset_gateway_by_category' );
  
function bbloomer_unset_gateway_by_category( $available_gateways ) {
    if ( is_admin() ) return $available_gateways;
	
	$checkout_or_cart = false;
	if(is_checkout()) $checkout_or_cart = true;
	if(is_cart()) $checkout_or_cart = true;
	
    if ( ! $checkout_or_cart ) return $available_gateways;
	
    $unset = false;
	
    $category_id = 1225; // TARGET CATEGORY
    foreach ( WC()->cart->get_cart_contents() as $key => $values ) {
        $terms = get_the_terms( $values['product_id'], 'product_cat' );    
        foreach ( $terms as $term ) {        
            if ( $term->term_id == $category_id ) {
                $unset = true; // CATEGORY IS IN THE CART
                break;
            }
        }
    }
	
	// DISABLE Stripe IF CATEGORY IS IN THE CART
    if ( $unset == true ) {
		unset( $available_gateways['stripe_applepay'] );
		unset( $available_gateways['stripe_cc'] ); 
		unset( $available_gateways['stripe_googlepay'] );
	} else {
		//unset( $available_gateways['paymentsense_remote_payments'] );
	}
	
// 	echo "<pre>";
// 	print_r($available_gateways);
// 	echo "</pre>";
	
    return $available_gateways;
}


/*
 * Register new wishlist endpoint
*/
function primer_add_wishlist_endpoint() {
  add_rewrite_endpoint( 'wish-list', EP_ROOT | EP_PAGES );
}

add_action( 'init', 'primer_add_wishlist_endpoint' );


/*
 * Register new wishlist endpoint
*/
function primer_wishlist_query_vars( $vars ) {
    $vars[] = 'wish-list';
    return $vars;
}

add_filter( 'query_vars', 'primer_wishlist_query_vars', 0 );


/*
 * Change the order of the endpoints that appear in My Account Page - WooCommerce 2.6
 */
function wpb_woo_my_account_order() {
    $myorder = array(
        'dashboard'          => __( 'Dashboard', 'woocommerce' ),
        'orders'             => __( 'Orders', 'woocommerce' ),
        'wish-list'           => __( 'Wishlist', 'woocommerce' ),
        'edit-address'       => __( 'Addresses', 'woocommerce' ),
        'edit-account'       => __( 'Account Details', 'woocommerce' ),
        'customer-logout'    => __( 'Logout', 'woocommerce' ),
    );
    return $myorder;
}

add_filter ( 'woocommerce_account_menu_items', 'wpb_woo_my_account_order' );


/*
 * Add Wishlist Shortcode - https://wordpress.org/plugins/ti-woocommerce-wishlist/
*/
function woocommerce_wishlist_content() {
  echo do_shortcode( '[yith_wcwl_wishlist]' );
}

add_action( 'woocommerce_account_wish-list_endpoint', 'woocommerce_wishlist_content' );


/* WooCommerce: The Code Below Removes Checkout Fields */
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {

unset($fields['billing']['billing_company']);

return $fields;
}

// function woocommerce_remove_breadcrumb(){
// remove_action(
//     'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);}
// add_action(
//     'woocommerce_before_main_content', 'woocommerce_remove_breadcrumb');

// function woocommerce_custom_breadcrumb(){
//     woocommerce_breadcrumb();}

// add_action( 'woo_custom_breadcrumb', 'woocommerce_custom_breadcrumb' );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
add_action( 'woocommerce_before_shop_loop_item_title', 'bbloomer_display_sold_out_loop_woocommerce' );


add_shortcode ('woo_cart_but', 'woo_cart_but' );
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
function woo_cart_but() {
    ob_start();

        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set Cart URL

        ?>
        <a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="My Basket">
        <?php
        if ( $cart_count > 0 ) {
       ?>
            <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php
        } else{?>
            <span class="cart-contents-count">0</span>
        <?php }
        ?>
        </a>
        <?php

    return ob_get_clean();

}
// add_action( 'woocommerce_before_shop_loop_item_title', 'bbloomer_new_badge_shop_page', 3 );

// function bbloomer_new_badge_shop_page() {
//    global $product;
//    $newness_days = 30;
//    $created = strtotime( $product->get_date_created() );
//    if ( ( time() - ( 60 * 60 * 24 * $newness_days ) ) < $created ) {
//       echo '<span class="itsnew onsale">' . esc_html__( 'New!', 'woocommerce' ) . '</span>';
//    }
// }
add_action( 'woocommerce_before_shop_loop_item_title', 'bbloomer_display_sold_out_loop_woocommerce' );

function bbloomer_display_sold_out_loop_woocommerce() {
    global $product;
    if ( ! $product->is_in_stock() ) {
        echo '<span class="label-sold-out">Sold Out</span>';
    }
}
function nt_product_attributes() {
global $product;
    if ( $product->has_attributes() ) {

        $attributes = ( object ) array (
        'discount'              => $product->get_attribute( 'discount' ),
        'vatprice'            => $product->get_attribute( 'vat_priceproduct' ),
        );
    return $attributes;
    }
}
 /* Separate login form and registration form */
    add_action('woocommerce_before_customer_login_form', 'load_registration_form', 2);
    function load_registration_form() {
      if (isset($_GET['action']) == 'register') {
        woocommerce_get_template('myaccount/form-registration.php');
      }
    }
add_filter('woocommerce_login_redirect', 'login_redirect');

function login_redirect($redirect_to) {
	global $woocommerce;
		if(WC()->cart->cart_contents_count > 0){
			return wc_get_page_permalink('checkout');
		} else{
			return wc_get_page_permalink('myaccount');
		}
}

//add_action('wp_logout','logout_redirect');

function logout_redirect(){

    wp_redirect( home_url() );

    exit;

}
add_filter( 'the_title', 'shorten_woo_product_title', 10, 2 );
function shorten_woo_product_title( $title, $id ) {
if ( is_shop() && get_post_type( $id ) === 'product' ) {
return substr( $title, 0, 20 ). '...'; // change last number to the number of characters you want
}
elseif(is_product_category() && get_post_type( $id ) === 'product' ){
  return substr( $title, 0, 20 ). '...';
}
else {
return $title;
}
}

// function custom_empty_cart_redirect_url(){

// return home_url();

// }
function wc_empty_cart_redirect_url() {
    return home_url();
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );
add_action( 'wp_footer', 'bbloomer_cart_refresh_update_qty' );

function bbloomer_cart_refresh_update_qty() {
   if (is_cart()) {
      ?>
      <script>
        jQuery('div.woocommerce').on('change', '.qty', function(){
            jQuery("[name='update_cart']").prop("disabled", false);
            jQuery("[name='update_cart']").trigger("click");


        });
        </script>
      <?php
   }
}
// Options: menu_order, popularity, rating, date, price, price-desc

function my_woocommerce_catalog_orderby( $orderby ) {
    unset($orderby["rating"]);
    // unset($orderby["price-desc"]);
    return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "my_woocommerce_catalog_orderby", 20 );
//require_once "woocommerce_functions.php";
add_action('template_redirect','check_if_logged_in');
function check_if_logged_in()
{
    $pageid = 8; // your checkout page id
   /* if(!is_user_logged_in() && is_page($pageid))
    {
        $url = add_query_arg(
            'redirect_to',
            get_permalink($pageid),
            get_permalink(1165) // your my acount url
        );
        wp_redirect($url);
        exit;
    }*/
}
add_action('woocommerce_checkout_process', 'mrd_custom_checkout_field_process');
function mrd_custom_checkout_field_process() {
	if($_POST['billing_accounttype'] == ''){
       $_POST['billing_accounttype'] = "PayPal";
    }
}
// function shapeSpace_register_add_meta($user_id) {
//     add_user_meta($user_id, '_new_user', '1');
// }
// add_action('user_register', 'shapeSpace_register_add_meta');
// function function_check_login_redirect($user_login, $user) {
//    $logincontrol = get_user_meta($user->ID, '_new_user', 'TRUE');
//    if ( $logincontrol ) {
//       //set the user to old
//       update_user_meta( $user->ID, '_new_user', '0' );

//       //Do the redirects or whatever you need to do for the first login
//       wp_redirect( 'https://dev.mrsocialmedia.co.uk/whisky-fix-wp/my-account/lost-password/', 302 ); exit;
//    }
// }
// add_action('wp_login', 'function_check_login_redirect', 10, 2);


// function shapeSpace_first_user_login($user_login, $user) {
//     $new_user = get_user_meta($user->ID, '_new_user', true);
//     if ($new_user) {
//         update_user_meta($user->ID, '_new_user', '0');

//         // do something for first login.. e.g., send a custom email
//     }
// }
// add_action('wp_login', 'shapeSpace_first_user_login', 10, 2);

// function function_new_user($user_id) {
//    add_user_meta( $user_id, '_new_user', '1' );
// }
// add_action( 'user_register', 'function_new_user');
// function function_check_login_redirect($user_login, $user) {
//    $logincontrol = get_user_meta($user->ID, '_new_user', 'TRUE');
//    if ( $logincontrol ) {
//       //set the user to old
//       update_user_meta( $user->ID, '_new_user', '0' );

//       //Do the redirects or whatever you need to do for the first login
//       wp_redirect( 'https://dev.mrsocialmedia.co.uk/whisky-fix-wp/my-account/lost-password/', 302 ); exit;
//    }
// }
// add_action('wp_login', 'function_check_login_redirect', 10, 2);
add_action( 'edit_user_profile', 'wk_custom_user_profile_fields' );

function wk_custom_user_profile_fields( $user )
{
    echo '<h3 class="heading">Custom Fields</h3>';

    ?>

    <table class="form-table">
    <tr>
            <th><label for="contact">new user status</label></th>

        <td><input type="text" class="input-text form-control" name="newuser" id="newuser" />
                </td>

    </tr>
    </table>

    <?php
}
add_action( 'show_user_profile', 'wk_custom_user_profile_fields' );

add_action( 'edit_user_profile_update', 'wk_save_custom_user_profile_fields' );

/**
*   @param User Id $user_id
*/
function wk_save_custom_user_profile_fields( $user_id )
{

    $custom_data = $_POST['newuser'];
    update_user_meta( $user_id, 'newuser', $custom_data );

}

/* REMOVE THIS HOOK AFTER USER IMPORT */
//add_action( 'wp_footer', 'importCSV' );
function importCSV() {
    $row = 1;
    if (($handle = fopen("export-users.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        if (filter_var($data[0], FILTER_VALIDATE_EMAIL)) {
            if(!email_exists( $data[0] )){
                $userdata = array(
                    'user_login' =>  $data[0],
                    'user_email' =>  $data[0],
                    'first_name' =>  $data[1],
                    'last_name'  =>  $data[2],
                    'role'       => 'customer',
                    'user_pass'  =>  NULL // When creating an user, `user_pass` is expected.
                );
                $userId = wp_insert_user($userdata);
                add_user_meta($userId, '_reset_pw', 1);
            }
        }
      }
      fclose($handle);
    }
}

add_action( 'wp_authenticate', 'customerRedirect', 10, 2 );
function customerRedirect(&$user_login, &$user_password){
    if( email_exists( $user_login ) ){
        $user = get_user_by( 'email', $user_login );
        if ( $user->has_cap( 'customer' ) ) {
            $restPW = get_user_meta( $user->ID, '_reset_pw', true );
            if( $restPW == 1 ){
                wp_clear_auth_cookie();
                wp_set_current_user ( $user->ID );
                wp_set_auth_cookie  ( $user->ID );

                wp_safe_redirect( get_permalink(3810) );
                exit();
            }
        }
    }
}

add_action('init', 'updatePassword');
function updatePassword(){
    if(isset($_POST['action']) && $_POST['action'] == 'save_account_details_lk'){
        if ( wp_verify_nonce( $_POST['save-account-nonce'], 'save_account_lk' ) ){
            if($_POST['password_1'] && $_POST['password_2']){
                if($_POST['password_1'] == $_POST['password_2']){
                    $user_id = get_current_user_id();
                    $user_data = wp_update_user( array( 'ID' => $user_id, 'user_pass' => $_POST['password_1'] ) );
                    if ( is_wp_error( $user_data ) ) {
                        wc_add_notice(__('Something went wrong','whisky_fix'), 'error');
                    } else {
                        wc_add_notice(__('Password updated','whisky_fix'), 'success');
                        if(delete_user_meta( $user_id, '_reset_pw' )){
                            wp_safe_redirect( wc_get_page_permalink( 'myaccount' ) );
                            exit();
                        }
                    }
                }
                else wc_add_notice(__('Password mismatch','whisky_fix'), 'error');
            }
            else wc_add_notice(__('Both fields are required','whisky_fix'), 'error');
        }
        else wc_add_notice(__('Security issues, please try again.','whisky_fix'), 'error');
    }
}

// add_filter('woocommerce_default_catalog_orderby', 'pr_default_catalog_orderby');

// function pr_default_catalog_orderby( $sort_by ) {
//     return 'date';
// }
/* Order Posts Alphabetically */
 // function prefix_modify_query_order( $query ) {
 //   if ( is_main_query() ) {

 //     $args =  array( 'post_date' => 'DESC', 'title' => 'DESC' );

 //    $query->set( 'orderby', $args );
 //   }
 // }
//add_action( 'pre_get_posts', 'prefix_modify_query_order' );

add_filter('woocommerce_default_catalog_orderby', 'pr_catalog_orderby_for_category');

function pr_catalog_orderby_for_category( $sort_by ) {
    if( !is_product_category('new-arrivals') ) {
        return $sort_by; // no changes for any page except Uncategorized
    }
    return 'date';
}



add_filter( 'woocommerce_product_subcategories_args', 'njengah_woocommerce_get_subcategories_ordering_args' );

function njengah_woocommerce_get_subcategories_ordering_args( $args ) {

$args['order'] = 'desc';

$args['orderby'] = 'title';

return $args;

}

add_action( 'pre_get_posts', 'my_change_sort_order');
      function my_change_sort_order($query){
        if(is_product_category('new-arrivals')):
              $query->set( 'order', 'desc' );
           //Set the orderby
           $query->set( 'orderby', 'date' );
             elseif (is_product_category('distilleries')):
               $query->set( 'order', 'ASC' );
               $query->set( 'orderby', 'title' );
elseif(is_product_category('scottish-gin')):
    $query->set('meta_query', array(
    'relation' => 'OR',
    array(
      'key' => 'custom_sort_order',
        'compare' => 'NOT EXISTS',
    ),
    array(
      'key' => 'custom_sort_order',
      'value' => '',
      'compare' => 'LIKE',
    ),
    array(
      'key' => 'custom_sort_order',
      'value' => 0,
      'compare' => '>=',
    )
  ));
  //$query->set('meta_key', NULL);
  // $query->set('orderby', array('meta_value' => 'ASC', 'title' => 'ASC'));
  $query->set('orderby', array('meta_value' => 'DESC', 'title' => 'ASC'));
  //$query->set( 'order', 'DESC' );
          // Set the orderby
       //$query->set( 'orderby', 'title' );
//     $query->set( 'meta_key', '_featured');
// $query->set( 'orderby' , "meta_value " . $query->get( 'orderby' ) );
//  $query->set( 'order' , "DESC " . $query->get( 'order' ) );
  //    $query->set('meta_query', array(
  //   'relation' => 'OR',
  //   array(
  //     'key' => '_featured',
  //       'compare' => 'NOT EXISTS',
  //   ),
  //   array(
  //     'key' => '_featured',
  //     'value' => 0,
  //     'compare' => '>=',
  //   )
  // ));
    //$query->set( 'meta_key', '_featured');
 //$query->set('orderby', array('meta_value_num' => 'DESC', 'title' => 'ASC'));
//echo"test";
//$query->set( 'meta_key', '_featured');
//$query->set( 'orderby' , "meta_value " . $query->get( 'orderby' ) );
//$query->set( 'order' , "DESC " . $query->get( 'order' ) );
        elseif(is_archive()):
         //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
           //Set the order ASC or DESC
             $query->set( 'order', 'ASC' );
               $query->set( 'orderby', 'title' );
         //if( $query->get( 'orderby' ) ) {

        // Setting just `meta_key` is not sufficient, as this
        // will ignore posts that do not yet, or never will have
        // a value for the specified key. This meta query will
        // register the `meta_key` for ordering, but will not
        // ignore those posts without a value for this key.
        // $query->set( 'meta_query', array(
        //     'relation' => 'OR',
        //     array(
        //         'key' => 'top_list',
        //         'compare' => 'EXISTS'
        //     ),
        //     array(
        //         'key' => 'top_list',
        //         'compare' => 'NOT EXISTS'
        //     )
        // ) );

        // Order by the meta value, then by the title if multiple
        // posts share the same value for the provided meta key.
        // Use `meta_value_num` if the meta values are numeric.

    //       $query->set( 'order', 'ASC' );
    //     $query->set( 'orderby', 'meta_value title' );


    // }
          // $query->set( 'order', 'ASC' );
           //Set the orderby
                //'meta_key'     => 'list_page_order_',
                  //    'orderby'     => 'meta_value',
           // $args =  array( 'meta_key' => 'top_list','order' => 'ASC' );

            //$query->set( 'orderby', $args );
        //    $query->set( 'meta_query', array(
        //     'relation' => 'OR',
        //     //'order' => 'ASC',
        //     array(
        //         'key' => 'top_list',
        //         'compare' => 'EXISTS',
        //         'order' => 'DESC'
        //     ),
        //     array(
        //         'key' => 'top_list',
        //         'compare' => 'NOT EXISTS',
        //         'order' => 'ASC'
        //     )
        // ) );
        //     if(count($valuecheck) > 0) {
        //         $query->set( 'meta_query', array(
        //     'relation' => 'OR',
        //     //'order' => 'ASC',
        //     array(
        //         'key' => 'top_list',
        //         'compare' => 'EXISTS',
        //         'order' => 'DESC'
        //     ),
        //     array(
        //         'key' => 'top_list',
        //         'compare' => 'NOT EXISTS',
        //         'order' => 'ASC'
        //     )
        // ) );
        //         $query->set( 'orderby', 'meta_value title' );
        //         $query->set('order', 'DESC ASC');
        //     }
        //     else{
        //         $query->set( 'order', 'ASC' );
        //         $query->set( 'orderby', 'title' );
        //     }
//             $query->set(
//     'meta_query',
//     array(
//         'relation' => 'OR',
//         array(
//             'key' => 'top_list',
//             'value' => '',
//             'compare' => 'EXISTS'
//         ),
//         array(
//             'key' => 'top_list',
//             'value' => '',
//             'compare' => 'EXISTS'
//         )
//     )
// );

//$qry->set('orderby', 'meta_value title'); # Sorting works with meta_value as well as meta_value_num - I've tried both
//$qry->set('order', 'ASC DESC');
//$qry->set('meta_key', 'top_list');

        // Order by the meta value, then by the title if multiple
        // posts share the same value for the provided meta key.
        // Use `meta_value_num` if the meta values are numeric.
       // $query->set( 'orderby', 'meta_value title' );
         //$query->set( 'orderby', 'title' );
       // $query->set('order', 'ASC');
         //$query->set( 'orderby', 'title' );
  // $query->set('meta_query', array(
  //   'relation' => 'OR',
  //   array(
  //     'key' => 'top_list___',
  //       'compare' => 'NOT EXISTS',
  //   ),
  //   array(
  //     'key' => 'top_list___',
  //     'value' => 0,
  //     'compare' => '>=',
  //   )
  // ));
  //$query->set('meta_key', NULL);
  //$query->set('orderby', array('meta_value_num' => 'DESC', 'title' => 'ASC'));


  //     $query->set('meta_query', array(
  //   'relation' => 'OR',
  //   array(
  //    'taxonomy' => 'product_visibility',
  //               'field'    => 'name',
  //               'terms'    => 'featured',
  //   ),
  //   // array(
  //   //   'key' => 'featured',
  //   //             'value' => 'yes'
  //   // )
  // ));
     // $args['meta_key'] = '_featured';
//$args['order'] = 'desc';
 //$query->set('orderby', array('meta_value_num' => 'DESC', 'title' => 'ASC'));
      //$query->set( 'order', 'desc' );
           // $query->set( 'order', 'ASC' );
           //Set the orderby
         //  $query->set( 'orderby', '_featured' );



// $query->set('tax_query' => array(
//             'relation' => 'AND',
//             array(
//                 'taxonomy' => 'product_tag',
//                 'field' => 'slug',
//                 // 'terms' => 'white-wines'
//                 //'terms' => $product_tag->slug,
//                 'product_tag'=> "top-product"
//             )
//         ),
//         'post_type' => 'product',
//         'orderby' => 'title,'
//     );
    //  'meta_key' => '_featured',
    // 'meta_value' => 'yes',
  //     $query->set('meta_query', array(
  //   'relation' => 'OR',
  //   array(
  //     'key' => '_featured',
  //       'compare' => 'NOT EXISTS',
  //   ),
  //   array(
  //     'key' => '_featured',
  //     'meta_value' => 'yes',
  //     'compare' => '=',
  //   )
  // ));
      //$query->set('orderby', array('meta_value_num' => 'DESC', 'title' => 'DESC'));
     //$query->set( 'order', 'DESC' );
           //Set the orderby
       // $query->set( 'orderby', '_featured' );

        endif;


    };

  add_action( 'whisky_woocommerce_after_single_product_summary' , 'woocommerce_output_related_products');


add_action('woocommerce_order_item_meta_end', 'getProductMeta', 10, 3 );
function getProductMeta($item_id, $item, $order){
    $product = $item->get_product();
    $attributes = $product->get_attributes();
    if ( ! $attributes ) {
        return;
    }
    $display_result = '';
    foreach ( $attributes as $attribute ) {
        if ( $attribute->get_variation() ) {
            continue;
        }
        $name = $attribute->get_name();
        if($name == 'pa_abv-percentage' || $name == 'pa_discount_product'){
            if ( $attribute->is_taxonomy() ) {
                $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );
                $cwtax = $terms[0]->taxonomy;
                $cw_object_taxonomy = get_taxonomy($cwtax);
                if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                    $tax_label = $cw_object_taxonomy->labels->singular_name;
                } elseif ( isset( $cw_object_taxonomy->label ) ) {
                    $tax_label = $cw_object_taxonomy->label;
                    if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                        $tax_label = substr( $tax_label, 8 );
                    }
                }
                $display_result .= $tax_label . ': ';
                $tax_terms = array();
                foreach ( $terms as $term ) {
                    $single_term = esc_html( $term->name );
                    array_push( $tax_terms, $single_term );
                }
                $display_result .= implode(', ', $tax_terms) .  '<br />';
            } else {
                $display_result .= $name . ': ';
                $display_result .= esc_html( implode( ', ', $attribute->get_options() ) ) . '<br />';
            }
        }
    }
    echo '<p style="padding-top: 20px;">'.$display_result.'</p>';
}

add_filter( 'woocommerce_registration_error_email_exists', function( $html ) {
    $url =  wc_get_page_permalink( 'myaccount' );
    $url = add_query_arg( 'redirect_checkout', 1, $url );
    $html = str_replace( 'An account is already registered with your email address. Please log in', '<a href="'.$url.'">Please log in</a>', $html );
    return $html;
} );


add_action( 'wpo_wcpdf_after_item_meta', 'wpo_wcpdf_show_product_attributes', 10, 3 );
function wpo_wcpdf_show_product_attributes ( $template_type, $item, $order ) {
    if(empty($item['product'])) return;
    $document = wcpdf_get_document( $template_type, $order );
    if ($template_type == 'invoice') {
        printf('<div class="product-attribute">ABV Percentage: %s</div>', $document->get_product_attribute('pa_abv-percentage', $item['product']));
         printf('<div class="product-attribute">Alcohol Content: %s</div>', $document->get_product_attribute('pa_discount_product', $item['product']));
    }
}



// add_action( 'woocommerce_register_form', 'bbloomer_add_registration_privacy_policy', 11 );

// function bbloomer_add_registration_privacy_policy() {

// woocommerce_form_field( 'privacy_policy_reg', array(
//    'type'          => 'checkbox',
//    'class'         => array('form-row privacy'),
//    'label_class'   => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
//    'input_class'   => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
//    'required'      => true,
//    'label'         => 'I agree to being contacted by Whisky Fix and receiving marketing emails inline its GDPR  <a href="/privacy-policy/" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.',
// ));

// }

// Show error if user does not tick

// add_filter( 'woocommerce_registration_errors', 'bbloomer_validate_privacy_registration', 10, 3 );

// function bbloomer_validate_privacy_registration( $errors, $username, $email ) {
// if ( ! is_checkout() ) {
//     if ( ! (int) isset( $_POST['privacy_policy_reg'] ) ) {
//         $errors->add( 'privacy_policy_reg_error', __( 'Privacy Policy consent is required!', 'woocommerce' ) );
//     }
// }
// return $errors;
// }


add_filter( 'gettext', 'bt_rename_coupon_field_on_cart', 10, 3 );
add_filter( 'woocommerce_coupon_error', 'bt_rename_coupon_label', 10, 3 );
add_filter( 'woocommerce_coupon_message', 'bt_rename_coupon_label', 10, 3 );
add_filter( 'woocommerce_cart_totals_coupon_label', 'bt_rename_coupon_label',10, 1 );
add_filter( 'woocommerce_checkout_coupon_message', 'bt_rename_coupon_message_on_checkout' );
/**
 * WooCommerce
 * Change Coupon Text
 * @param string $text
 * @return string
 * @link https://gist.github.com/maxrice/8551024
 */

function bt_rename_coupon_field_on_cart( $translated_text, $text, $text_domain ) {
    // bail if not modifying frontend woocommerce text
    if ( is_admin() || 'woocommerce' !== $text_domain ) {
        return $translated_text;
    }
    if ( 'Coupon:' === $text ) {
        $translated_text = 'Coupon Code:';
    }

    if ('Coupon has been removed.' === $text){
        $translated_text = 'Coupon code has been removed.';
    }

    if ( 'Apply coupon' === $text ) {
        $translated_text = 'Apply';
    }

    if ( 'Coupon code' === $text ) {
        $translated_text = 'Coupon code';

    }

    return $translated_text;
}


// Rename the "Have a Coupon?" message on the checkout page
function bt_rename_coupon_message_on_checkout() {
    return 'Have a coupon code?' . ' ' . __( 'Click here to enter your code', 'woocommerce' ) . '';
}


function bt_rename_coupon_label( $err, $err_code=null, $something=null ){
    $err = str_ireplace("Coupon","Coupon ",$err);
    return $err;
}
// add_filter( 'woocommerce_registration_error_email_exists', function( $html ) {
//     $url =  wc_get_page_permalink( 'myaccount' );
//     $url = add_query_arg( 'redirect_checkout', 1, $url );
//     $html = str_replace( 'An account is already registered with your email address. ', '<a href="'.$url.'"><strong>YOUR CUSTOM TEXT</strong></a>', $html );
//     return $html;
// } );


function my_woocommerce_add_error( $error ) {
    $url = get_permalink(get_option( 'woocommerce_myaccount_page_id' ));
    if($error == '<strong>Error:</strong> An account is already registered with your email address. <a href="#" class="showlogin">Please log in.</a>')
        $error = str_replace('#', $url, $error);

    return $error;
}
add_filter( 'woocommerce_add_error', 'my_woocommerce_add_error' );

add_filter( 'woocommerce_registration_error_email_exists', function( $html ) {
    $url =  wc_get_page_permalink( 'myaccount' );
    $url = add_query_arg( 'redirect_checkout', 1, $url );
    $html = str_replace( 'An account is already registered with your email address. Please log in', '<a href="'.$url.'">Please log in</a>', $html );
    return $html;
} );




add_action( 'woocommerce_register_form', 'wpglorify_add_registration_privacy_policy', 11 );

function wpglorify_add_registration_privacy_policy() {

woocommerce_form_field( 'privacy_policy_reg', array(
    'type'          => 'checkbox',
    'class'         => array('form-row privacy'),
    'label_class'   => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
    'input_class'   => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
    'required'      => true,
    'label'         => 'I agree to being contacted by Whisky Fix and receiving marketing emails inline its   <a href="/privacy-policy/" class="woocommerce-privacy-policy-link" target="_blank"> GDPR privacy policy</a>',
));

}

// Show error if the user does not tick

add_filter( 'woocommerce_registration_errors', 'wpglorify_validate_privacy_registration', 10, 3 );

function wpglorify_validate_privacy_registration( $errors, $username, $email ) {
    if ( ! (int) isset( $_POST['privacy_policy_reg'] ) ) {
        $errors->add( 'privacy_policy_reg_error', __( 'Privacy Policy consent is required!', 'woocommerce' ) );
    }
return $errors;
}
add_filter( 'woocommerce_create_account_default_checked', '__return_true' );

function filter_woocommerce_form_field_checkbox( $field, $key, $args, $value ) {
    // Based on key
    if ( $key == 'privacy_policy_reg' ) {
        $field = str_replace( '<input', '<input required', $field );
    }

    return $field;
}
add_filter( 'woocommerce_form_field_checkbox', 'filter_woocommerce_form_field_checkbox', 10, 4 );

add_filter( 'woocommerce_admin_disabled', '__return_true' );

add_filter( 'woocommerce_available_variation', 'my_variation', 10, 3);
function my_variation( $data, $product, $variation ) {

    $data['price_html'] = '<div class="product-price">';
    $data['price_html'] .= "<strong>" . woocommerce_price($variation->get_price_including_tax()) . "</strong>";
    $data['price_html'] .= "<small>" . woocommerce_price($variation->get_price_excluding_tax()) . " Ex. VAT</small>";
    $data['price_html'] .= "</div>";
    return $data;
}

function theme_taxonomy() {
/*For Portfolio*/
register_taxonomy('cigar_brand', array('product'), array('hierarchical' => true, 'label' => 'Cigar Brand', 'query_var' => true, 'rewrite' => array('slug' => 'brand') ) );

  }

add_action( 'init', 'theme_taxonomy' );


add_action( 'woocommerce_product_query', 'custom_product_query' );
function custom_product_query( $query ) {

    if ( isset( $_GET['instock'] ) && $_GET['instock'] == '1' ) {
        $meta_query = $query->get('meta_query');

        $meta_query[] = array(
            'key' => '_stock_status',
            'value' => 'instock'
        );

        $query->set('meta_query', $meta_query);
    }
}


add_action( 'woocommerce_before_shop_loop', 'custom_stock_filter_checkbox' );
function custom_stock_filter_checkbox() {
    ?>
    <li class="custom-stock-filter">
        <input type="checkbox" id="custom-stock-filter-checkbox" name="custom_stock_filter_checkbox" value="1">
        <label for="custom-stock-filter-checkbox"><?php esc_html_e( 'In Stock Only', 'text-domain' ); ?></label>
    </li>
    <?php
}
function dd_woocommerce_proceed_to_checkout_payment_icons() {
	echo '<img loading="lazy"  src="' . get_template_directory_uri() . '/img/payment-icons.svg" class="dd-payment-icons" alt="Visa, Master Card Payment Icons" width="5556" height="501">';//phpcs:ignore
}


function dd_woocommerce_trust_mark() {
	?>
	<div class="dd-payment-trust-mark">
		<span><i class="fa fa-check"></i></span>
		<div>
			<p><strong><?php esc_attr_e( '100% Secure Online Transactions', 'dd' ); ?></strong></p>
			<p><?php esc_attr_e( 'Secure payment with SSL encryption.', 'dd' ); ?></p>
		</div>
	</div>
	<?php
}

add_action( 'woocommerce_review_order_after_submit', 'dd_woocommerce_proceed_to_checkout_payment_icons', 100 );
add_action( 'woocommerce_review_order_after_submit', 'dd_woocommerce_trust_mark', 101 );

add_filter('wp_get_attachment_image_attributes',function($attr, $attachment, $size ){
	if(!empty($attr['alt'])){
		return $attr;
	}

	if(is_singular( )){
		$yoast = get_post_meta( get_the_ID(),'_yoast_wpseo_focuskw' );

		if(!empty($yoast[0])){
			$attr['alt'] = $yoast[0].' - '.$attachment->post_title;
		} else {
		$attr['alt'] = get_the_title(get_the_ID(  )).' - '.$attachment->post_title;
		}
	} else {
		$attr['alt'] = $attachment->post_title;
	}

	return $attr;
},5,3);



add_filter('woocommerce_page_title',function($title){
	
	if(is_tax() && get_query_var( 'paged' ) && empty(get_query_var('dd_first_title'))){
		if ( get_query_var( 'paged' ) ) {
			set_query_var('dd_first_title',1);
			/* translators: %s: page number */
			$title .= sprintf( __( '<br/><small style="font-size:0.6em;line-height:1;position: relative;top: -0.5em;">Page %s</small>', 'dd' ), get_query_var( 'paged' ) );
		}
	}
	return $title;
});


add_filter('wpseo_twitter_image', 'change_twitter_image');

function change_twitter_image($image) {

    if (!$image) {

        global $post;
        
        if (!$image = get_post_meta($post->ID)["_yoast_wpseo_opengraph-image"][0]) {
            $image = get_option("wpseo_social")["og_default_image"];
        }

		if(empty($image)){
			$image = 'https://whiskyfix.com/wp-content/themes/whisky-fix/img/home-banner-1.png';
		}

    }
 
    return $image; 
  
}; 