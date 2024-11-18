<?php
/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}

//echo wc_get_rating_html( $product->get_average_rating() ); // WordPress.XSS.EscapeOutput.OutputNotEscaped.
$average = $product->get_average_rating();

// echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
echo '<div class="ratestar">';
    $select=$average;
    $a=5-$select;
    $j=1;
if($average!=0){
    for ($i=1; $i<=$select; $i++) 
    { 
        echo "★"; 
        if($i==$select){
            for ($j=1; $j<=$a; $j++){
                echo "☆";
            }
        }
    }
 }
 else{
    for ($i=1; $i<=5; $i++) 
    {       
       echo "☆";
        
    }
 }
 echo '</div>';
?>
