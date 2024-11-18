<?php
$product = wc_get_product( get_the_id() );?>
<!-- Main Page -->
<div id="page" class="site-page">

  <div class="breadcrumb-heading">
    <div class="container">
      <?php wc_print_notices(); ?>
      <div class="row">
        <div class="col-lg-6">
          <ol class="breadcrumb breadcrumb-alt">
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

  <!-- ============= PRODUCT MAIN **============= -->
  <section class="si-product-main">
    <div class="product-single-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-media">
            <div class="product-media">
              <?php  $imageprdouct = wp_get_attachment_image_src( get_post_thumbnail_id(), 'product_single' ); ?>
              <img loading="lazy"  src="<?php echo $imageprdouct[0]; ?>" alt="<?php the_title(); ?>">
            </div>
          </div>
          <div class="col-lg-6 col-summery">
            <div class="product-summery">
              <h1 class="product-title"><?php the_title(); ?></h1>
              <div class="product-description">
                <?php
                               echo  $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
                                ?>
              </div>
              <div class="product-price">
                <?php
                                   $discount_val = $product->get_attribute('discount');
                                   $vat_price = $product->get_attribute('vat_priceproduct' );
                                   $includevat=$product->get_price_including_tax();
                                    $excludevat=$product->get_price_excluding_tax();
                                   ?>
                <strong style="line-height:25px; font-size:20px;" class="mb-4"><?php //echo $product->get_price_including_tax();
                                 echo $product->get_price_html(); ?></strong>
                <!-- <small> <?php //echo $excludevat;//$product->get_price_html($excludevat);
                                 //echo $product->get_price_excluding_tax();?><?php //echo $vat_price; //the_field('vat_price'); ?> <?php echo woocommerce_price($product->get_price_excluding_tax()); ?> Ex. VAT</small> -->


              </div>
              <div class="product-buttons">
                <?php if($product && $product->is_type( 'variable' )){
                                    do_action('woocommerce_variable_add_to_cart');
                                  ?>

                <?php } else{ ?>
                <?php do_action('woocommerce_simple_add_to_cart');
                                   }?>

              </div>
              <div class="row product-options">
                <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>

                <?php

                      global $post;
                      $cigar_brand = wp_get_post_terms( get_the_id(), $taxonomy = 'cigar_brand', $args = array('fields'=> 'all') );
                      if($cigar_brand){
                          $brand_url = get_field('brand_logo', $cigar_brand[0]);
                          if($brand_url){
                            ?>
                            <div class="product-brand">
                              <img loading="lazy"  src="<?php echo $brand_url; ?>" alt="media">
                            </div>
                            <?php
                          }
                      } else {

                        $cats = get_the_terms( $post->ID, 'product_cat' );
                        if ( ! empty( $cats ) ) {
                        foreach ( $cats as $term ) {
                         // If parent cat ID = 116 echo subcat name...
                          if( $term->parent == 42 ) {
                           // echo '<p>Publisher : <a href="' . site_url() . '/product-category/' . $term->slug . '">' . $term->name . '</a>';
                                                            ?>

                          <?php //$terms = wp_get_post_terms( get_the_id(), 'product_cat' );
                                           ///$term  = reset($terms);
                                     $wthumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
                               $wimage1 = wp_get_attachment_url( $wthumbnail_id );
                                      ?>
                              <div class="product-brand">
                                <?php if($wimage1):?>
                                <img loading="lazy"  src="<?php echo $wimage1; ?>" alt="media">
                                <?php else:?>
                                <span><?php echo $term->name;?>
                                  <?php endif;?>
                              </div>

                              <a href="<?php echo get_term_link( $term->slug, $term->taxonomy ); ?>" class="product-brand-link">More from this distillery</a>
                      <?php }
                          }
                        }?>

                        <?php
                      }
                      ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="product-specification-panel">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="product-specification-nav">
            <?php $post_term = wp_get_post_terms( get_the_id(), 'product_cat', $args = array('fields'=>'all') );
            if($post_term && $post_term[0]->slug == 'cigar'){?>
              <li>
                <div class="panel">
                  <div class="panel-body">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Group_7908" data-name="Group 7908" width="27.429" height="27.46" viewBox="0 0 27.429 27.46">
                      <defs>
                        <clipPath id="clip-path">
                          <rect id="Rectangle_227" data-name="Rectangle 227" width="27.429" height="27.46" fill="#bd8951"/>
                        </clipPath>
                      </defs>
                      <g id="Group_7907" data-name="Group 7907" clip-path="url(#clip-path)">
                        <path id="Path_11347" data-name="Path 11347" d="M6.192,4.892a7.156,7.156,0,0,1-1.082-.346,2.355,2.355,0,0,1-1.3-2.461A2.408,2.408,0,0,1,5.646.073,2.957,2.957,0,0,1,6.337,0Q10.223,0,14.111,0a2.409,2.409,0,0,1,.512,4.784c-.115.015-.229.032-.364.052,0,.089-.011.175-.011.262,0,1.153,0,2.305,0,3.458a1.192,1.192,0,0,0,.1.461q1.379,3.107,2.776,6.206a.849.849,0,0,0,.312.333c.375.241.768.453,1.146.689a.261.261,0,0,0,.333,0,9.512,9.512,0,0,1,3.91-1.521,18.863,18.863,0,0,1,2-.141c.58-.022,1.161-.009,1.742,0a.787.787,0,0,1,.856.828,27.493,27.493,0,0,1-.154,3.741,9.349,9.349,0,0,1-5.234,7.228,9.92,9.92,0,0,1-4.5,1.063q-6.755.024-13.511,0A4,4,0,0,1,0,23.439a3.888,3.888,0,0,1,.356-1.663c.779-1.723,1.566-3.443,2.342-5.167q1.706-3.8,3.4-7.6a1.258,1.258,0,0,0,.1-.488c.009-1.144,0-2.288,0-3.431,0-.079-.007-.158-.009-.2m8.184,20.952c0-.6-.011-1.182.006-1.759a.529.529,0,0,0-.2-.459,9.344,9.344,0,0,1-2.47-3.643,11.568,11.568,0,0,1-.564-4.7.747.747,0,0,1,.757-.7c.66-.007,1.322,0,1.982.027.405.017.808.084,1.253.133-.152-.344-.305-.646-.42-.962-.08-.221-.2-.242-.4-.2A6.394,6.394,0,0,1,12,13.638a7.981,7.981,0,0,1-2.4-.872,4.864,4.864,0,0,0-2.964-.482.416.416,0,0,0-.373.279c-.312.73-.64,1.452-.967,2.176C4.143,17.3,2.98,19.855,1.838,22.421a2.627,2.627,0,0,0-.222.982,2.394,2.394,0,0,0,2.5,2.44q5.011.005,10.021,0h.244M16,24.885l3.366-3.368a4.063,4.063,0,0,1,.328-.315.8.8,0,0,1,1.284.452.834.834,0,0,1-.289.816q-1.575,1.571-3.146,3.146c-.06.06-.115.126-.227.248.5-.046.921-.067,1.34-.127a8,8,0,0,0,5.6-3.262,9.147,9.147,0,0,0,1.554-6.25,8.575,8.575,0,0,0-9.8,8.66M13.921,12.037c-.045-.114-.074-.2-.11-.276-.324-.725-.64-1.453-.977-2.172a2.138,2.138,0,0,1-.2-.955c.01-1.17,0-2.341,0-3.511v-.3c-.3,0-.561.009-.819,0a.8.8,0,1,1,.05-1.6c.777-.006,1.554,0,2.332,0a.8.8,0,1,0-.024-1.6c-1.456,0-2.912,0-4.369,0-1.179,0-2.359,0-3.538,0a.816.816,0,0,0-.846.6.807.807,0,0,0,.82,1c.768.007,1.537,0,2.3,0a.806.806,0,1,1,0,1.608c-.238,0-.476,0-.731,0v.327c0,1.179.011,2.359-.008,3.538a2.625,2.625,0,0,1-.177.824c-.131.365-.309.714-.49,1.121.257,0,.461-.011.664,0a7.333,7.333,0,0,1,3.018.93,4.737,4.737,0,0,0,3.1.468m3.511,5.379a7.444,7.444,0,0,0-4.676-1.177A7.752,7.752,0,0,0,14.73,21.9c.129-.354.238-.682.368-1s.29-.648.449-1c-.241-.233-.492-.461-.727-.705a.806.806,0,0,1-.021-1.153.8.8,0,0,1,1.15.016c.16.153.3.328.458.5l1.024-1.145" transform="translate(0.001 0)" fill="#bd8951"/>
                        <path id="Path_11348" data-name="Path 11348" d="M42.877,183.425a2.409,2.409,0,1,1,2.388,2.423,2.422,2.422,0,0,1-2.388-2.423m1.61.017a.8.8,0,0,0,.8.8.8.8,0,1,0-.01-1.6.8.8,0,0,0-.791.807" transform="translate(-38.279 -161.613)" fill="#bd8951"/>
                        <path id="Path_11349" data-name="Path 11349" d="M57.875,151.831a.8.8,0,0,1,.785-.809.8.8,0,1,1,.012,1.606.8.8,0,0,1-.8-.8" transform="translate(-51.669 -134.827)" fill="#bd8951"/>
                      </g>
                    </svg>
                    <p class="text">Flavour</p>
                  </div>
                </div>
                <?php $flav = get_field('flavour'); ?>
                <p class="panel-title"> <?php if($flav) echo $flav; else echo '-'; ?></p>
              </li>
              <li>
                <div class="panel">
                  <div class="panel-body">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Group_7910" data-name="Group 7910" width="30.003" height="25.366" viewBox="0 0 30.003 25.366">
                      <defs>
                        <clipPath id="clip-path">
                          <rect id="Rectangle_228" data-name="Rectangle 228" width="30.003" height="25.366" fill="#bd8951"/>
                        </clipPath>
                      </defs>
                      <g id="Group_7909" data-name="Group 7909" clip-path="url(#clip-path)">
                        <path id="Path_11350" data-name="Path 11350" d="M15,3.45v2.3H14.59A19.02,19.02,0,0,0,11,6.075a5.75,5.75,0,0,0-1.631.515c-.025.013-.048.03-.105.066a2.219,2.219,0,0,0,.369.307,7.17,7.17,0,0,0,1.023.466,13.678,13.678,0,0,0,3.058.559,21.292,21.292,0,0,0,3.139.02,16.5,16.5,0,0,0,3.752-.568,5.209,5.209,0,0,0,1.627-.756,1.9,1.9,0,0,0,.837-1.408A1.428,1.428,0,0,0,22.7,4.17a3.666,3.666,0,0,0-1.3-.9,10.09,10.09,0,0,0-2.666-.727,26.607,26.607,0,0,0-4.958-.228,26.133,26.133,0,0,0-5.151.662A14.5,14.5,0,0,0,5.369,4.132,6.891,6.891,0,0,0,3.2,5.752a3.6,3.6,0,0,0-.878,2.013,1.817,1.817,0,0,0,.421,1.367,5.233,5.233,0,0,0,1.433,1.2,13.681,13.681,0,0,0,3.439,1.412,24.6,24.6,0,0,0,4.254.776,31.29,31.29,0,0,0,4.645.116c1.14-.059,2.278-.147,3.409-.305a20.41,20.41,0,0,0,4.652-1.119,6.8,6.8,0,0,0,2.309-1.364,2.462,2.462,0,0,0,.81-1.9c-.008-.339,0-.678,0-1.027H30c0,.035.006.071.006.106q0,4.424,0,8.849c0,.83,0,1.661,0,2.491a4.027,4.027,0,0,1-.9,2.541,7.833,7.833,0,0,1-2.52,2.038A17.941,17.941,0,0,1,22.013,24.6a29.037,29.037,0,0,1-4.534.671,33.884,33.884,0,0,1-3.851.064,28.5,28.5,0,0,1-7.188-1.151,15.389,15.389,0,0,1-3.385-1.452A7.47,7.47,0,0,1,.9,20.9,4.076,4.076,0,0,1,0,18.35Q.006,13.294,0,8.237A5.973,5.973,0,0,1,.524,5.675a6.328,6.328,0,0,1,1.2-1.727,9.581,9.581,0,0,1,2.662-1.9A18.345,18.345,0,0,1,9.2.5,26.092,26.092,0,0,1,13.28.033C14.326,0,15.374-.013,16.42.017a18.652,18.652,0,0,1,4.343.592,8.014,8.014,0,0,1,3.1,1.48,4.069,4.069,0,0,1,1.375,1.988,3.886,3.886,0,0,1,0,2.167A4.265,4.265,0,0,1,23.3,8.75,8.785,8.785,0,0,1,20.39,9.878a24.287,24.287,0,0,1-5.672.478,17.839,17.839,0,0,1-4.08-.527,7.161,7.161,0,0,1-2.312-.957A3.064,3.064,0,0,1,7.11,7.432a2.068,2.068,0,0,1,.8-2.655,6.155,6.155,0,0,1,2.151-.861,20.869,20.869,0,0,1,4.874-.471c.016,0,.032,0,.058.005M9.238,22.523V19.606h2.305v3.275l2.31.168V17.3h2.309v5.75l2.3-.168V19.6h2.311v2.93l2.307-.591v-5.8H25.39v4.8a.212.212,0,0,0,.046-.01,6.091,6.091,0,0,0,1.7-1.271,1.928,1.928,0,0,0,.558-1.311q-.006-3.037,0-6.075c0-.03-.005-.06-.008-.086-.329.2-.645.4-.975.578a13.734,13.734,0,0,1-2.593,1.034,27.992,27.992,0,0,1-4.909.935c-1.2.13-2.4.215-3.6.236a32.517,32.517,0,0,1-5.867-.411,23.841,23.841,0,0,1-4.122-1.035,13.823,13.823,0,0,1-2.913-1.4c-.128-.083-.255-.169-.4-.262v.164c0,2.086,0,4.173,0,6.259a1.888,1.888,0,0,0,.437,1.22,5.861,5.861,0,0,0,1.8,1.414.694.694,0,0,0,.072.028v-4.81H6.925v.133q0,2.761,0,5.522c0,.1.028.134.118.158.3.078.589.172.886.248.427.109.857.208,1.31.316" transform="translate(0 0)" fill="#bd8951"/>
                      </g>
                    </svg>
                    <p class="text">Length (Ins.)</p>
                  </div>
                </div>
                <?php $lin = get_field('length_in_inches'); ?>
                <p class="panel-title"> <?php if($lin) echo $lin; else echo '-'; ?></p>
              </li>
              <li>
                <div class="panel">
                  <div class="panel-body">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.565" height="25.6" viewBox="0 0 25.565 25.6">
                      <defs>
                        <clipPath id="clip-path">
                          <rect id="Rectangle_230" data-name="Rectangle 230" width="25.565" height="25.6" fill="none"/>
                        </clipPath>
                      </defs>
                      <g id="Group_7916" data-name="Group 7916" transform="translate(0 0)">
                        <g id="Group_7915" data-name="Group 7915" transform="translate(0 0)" clip-path="url(#clip-path)">
                          <path id="Path_11359" data-name="Path 11359" d="M25.023,17.053,8.549.529a1.908,1.908,0,0,0-2.636,0L.546,5.895a1.864,1.864,0,0,0,0,2.635L17.019,25.054a1.864,1.864,0,0,0,2.636,0l5.369-5.368a1.868,1.868,0,0,0,0-2.634M1.927,7.277h0ZM18.336,23.61l-1.41-1.415,3.455-3.454A.976.976,0,1,0,19,17.36l-3.453,3.453-.632-.633L16.5,18.595a.976.976,0,1,0-1.38-1.38L13.538,18.8l-.684-.687L16.3,14.661a.976.976,0,0,0-1.38-1.38l-3.447,3.447-.633-.633,1.578-1.578a.976.976,0,1,0-1.38-1.38L9.464,14.711,8.853,14.1,12.3,10.655a.976.976,0,0,0-1.381-1.38L7.475,12.716l-.632-.633L8.416,10.51a.976.976,0,0,0-1.38-1.38L5.465,10.7l-.583-.586L8.319,6.679A.976.976,0,1,0,6.939,5.3L3.5,8.732,1.989,7.212,7.23,1.972l16.348,16.4Z" transform="translate(0 0)" fill="#b48a5a"/>
                        </g>
                      </g>
                    </svg>
                    <p class="text">Length (mm)</p>
                  </div>
                </div>
                <?php $lmm = get_field('length_in_millimeters'); ?>
                <p class="panel-title"> <?php if($lmm) echo $lmm; else echo '-'; ?></p>
              </li>
              <li>
                <div class="panel">
                  <div class="panel-body">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Group_7914" data-name="Group 7914" width="23.412" height="28.163" viewBox="0 0 23.412 28.163">
                      <defs>
                        <clipPath id="clip-path">
                          <rect id="Rectangle_229" data-name="Rectangle 229" width="23.412" height="28.163" fill="#bd8951"/>
                        </clipPath>
                      </defs>
                      <g id="Group_7913" data-name="Group 7913" clip-path="url(#clip-path)">
                        <path id="Path_11351" data-name="Path 11351" d="M21.443,28.163H1.979c0-.394.01-.787.012-1.181a2.006,2.006,0,0,1,2.125-2.114h6.158V23.321c-.249-.04-.492-.075-.733-.12A11.71,11.71,0,0,1,.215,13.838C.121,13.318.071,12.791,0,12.268V11.113c.072-.523.117-1.052.221-1.568A11.743,11.743,0,0,1,6.43,1.213,10.607,10.607,0,0,1,10.958.026a11.263,11.263,0,0,1,6.088,1.209A11.683,11.683,0,0,1,23.241,13.56a11.371,11.371,0,0,1-7.745,9.2,23.439,23.439,0,0,1-2.338.614v1.493h6.175a2.005,2.005,0,0,1,2.1,2.086q.006.6.012,1.209m.177-16.45a9.909,9.909,0,1,0-9.957,9.9,9.882,9.882,0,0,0,9.957-9.9" transform="translate(0 0)" fill="#bd8951"/>
                        <path id="Path_11352" data-name="Path 11352" d="M82.483,242.921a8.226,8.226,0,0,1-16.1,0c.09-.006.177-.017.264-.017,1.118,0,2.236,0,3.353,0,.19,0,.282.038.342.246a4.274,4.274,0,0,0,8.191,0c.04-.137.056-.252.252-.251,1.191.009,2.382,0,3.573.006a.972.972,0,0,1,.127.019" transform="translate(-62.722 -229.51)" fill="#bd8951"/>
                        <path id="Path_11353" data-name="Path 11353" d="M178.567,119.451c.319.326.6.6.863.893a.487.487,0,0,1,.079.3c.006.871.008,1.741,0,2.612a.42.42,0,0,0,.2.4,1.961,1.961,0,0,1,.675,2.435,1.98,1.98,0,0,1-3.786-.886,1.845,1.845,0,0,1,.8-1.518.513.513,0,0,0,.241-.492q-.019-1.278,0-2.557a.65.65,0,0,1,.156-.377c.231-.27.487-.519.767-.812" transform="translate(-166.864 -112.868)" fill="#bd8951"/>
                        <path id="Path_11354" data-name="Path 11354" d="M201.2,52.39c0,.237.006.475,0,.712a.577.577,0,0,1-.559.591.542.542,0,0,1-.607-.529c-.023-.528-.02-1.058,0-1.587a.571.571,0,0,1,.586-.534.59.59,0,0,1,.578.58c.01.255,0,.511,0,.767" transform="translate(-188.99 -48.23)" fill="#bd8951"/>
                        <path id="Path_11355" data-name="Path 11355" d="M263.57,68.773a.626.626,0,0,1,.562.881c-.239.462-.506.91-.78,1.353a.582.582,0,0,1-1.011-.573c.249-.467.511-.929.8-1.372.087-.133.283-.195.43-.289" transform="translate(-247.821 -64.983)" fill="#bd8951"/>
                        <path id="Path_11356" data-name="Path 11356" d="M126.227,72.973a1.429,1.429,0,0,1,.386.314c.263.393.488.812.718,1.226a.591.591,0,1,1-1.027.577c-.241-.408-.485-.815-.707-1.233s.058-.88.63-.884" transform="translate(-118.604 -68.951)" fill="#bd8951"/>
                        <path id="Path_11357" data-name="Path 11357" d="M311.379,124.075a1.643,1.643,0,0,1-.327.431c-.419.276-.858.521-1.3.762a.576.576,0,0,1-.8-.228.59.59,0,0,1,.241-.8c.408-.242.818-.483,1.235-.709a.637.637,0,0,1,.953.549" transform="translate(-291.855 -116.637)" fill="#bd8951"/>
                        <path id="Path_11358" data-name="Path 11358" d="M74.069,130.761a.576.576,0,0,1-.86.506c-.433-.234-.859-.484-1.279-.74a.574.574,0,0,1-.225-.8.581.581,0,0,1,.811-.207c.416.228.827.466,1.235.709a.565.565,0,0,1,.319.535" transform="translate(-67.675 -122.3)" fill="#bd8951"/>
                      </g>
                    </svg>
                    <p class="text">Guage</p>
                  </div>
                </div>
                <?php $guage = get_field('guage'); ?>
                <p class="panel-title"> <?php if($guage) echo $guage; else echo '-'; ?></p>
              </li>
				<?php $cuba = get_field('cuba'); ?>
				<?php if($cuba){?>
				<li>
                <div class="panel">
                  <div class="panel-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="46.096" height="16.081" viewBox="0 0 46.096 16.081">
  <g id="Group_7918" data-name="Group 7918" transform="translate(414.108 -312.003)">
    <path id="Path_11360" data-name="Path 11360" d="M-368.012,325.71c-.491.57-1.172.5-1.828.6-.6.09-1.15.434-1.745.545a5,5,0,0,1-2.17.16,12.2,12.2,0,0,0-6.019-.05,11.277,11.277,0,0,1-1.139.057c-.686.068-1.37.166-2.056.24a1.407,1.407,0,0,1-.359-.054c.044-.106.058-.25.137-.312.724-.574,1.477-1.113,2.18-1.711a1.713,1.713,0,0,0,.4-.783c.015-.046-.3-.191-.46-.3-.07-.05-.11-.14-.174-.2-.207-.193-.4-.505-.633-.544a4.141,4.141,0,0,0-1.777-.056c-1.439.434-1.846-.964-2.765-1.429-.166-.084-.221-.462-.258-.715-.224-1.508-.691-2.308-2.5-1.769-.6.18-1.376-.2-2.067-.339a4.92,4.92,0,0,1-.745-.253,6.781,6.781,0,0,1-2.076-.856,2.951,2.951,0,0,0-2.529-.746c-.649.084-1.224.016-1.352-.8-.007-.045-.07-.082-.106-.122a2.407,2.407,0,0,0-.052.288c-.009.138,0,.276,0,.414-.26-.046-.521-.09-.781-.14a10.033,10.033,0,0,1-1.506-.313,18.106,18.106,0,0,1-1.7-.807c.089-.085.171-.233.268-.244.419-.047.847-.022,1.262-.088a1.85,1.85,0,0,0,.557-.314c-.149-.167-.284-.463-.449-.48q-1.747-.184-3.5-.266c-1.042-.049-1.613.773-2.375,1.279-.523.348-.792,1.266-1.8.892-.442-.164-1.064.155-1.6.259-.032.006-.08.048-.081.074-.037,1.441-1.6.876-2.161,1.634-.03.04-.129.03-.2.043a2.223,2.223,0,0,0,.062-.253c.019-.147.027-.3.04-.443a1.49,1.49,0,0,0-.394.039c-.313.119-.607.295-.927.388a1.36,1.36,0,0,1-.577-.043c-.054-.009-.093-.1-.139-.155.144-.039.29-.074.433-.119.624-.2,1.241-.418,1.872-.588.454-.122.42-.066.078-.6a.885.885,0,0,1,.064-.81,5.844,5.844,0,0,1,1.52-1.638,14.1,14.1,0,0,1,2.672-.9c.036-.011.086,0,.109-.027a2.131,2.131,0,0,1,1.711-.47,4.623,4.623,0,0,0,2.243-.537c1-.59,1.966-.24,2.944-.215.311.008.611.279.925.409a.339.339,0,0,0,.258-.058c.4-.256.762-.386,1.161.03.079.083.357-.04.542-.038a6.455,6.455,0,0,0,.818.047,2.46,2.46,0,0,1,1.944.452c.265.205.786.076,1.189.111a3.631,3.631,0,0,1,.552.1c.257.063.511.142.765.217a.224.224,0,0,1,.112.059,2.474,2.474,0,0,0,.269.363c.157.138.417.2.507.365a2.6,2.6,0,0,0,2.776,1.52,2.517,2.517,0,0,1,.974.261,18,18,0,0,1,2.116.762,7.512,7.512,0,0,1,1.3.981,1.988,1.988,0,0,1,.263.315l.174-.4c.24.809.931.716,1.523.908a11.777,11.777,0,0,1,2.025,1.029,11.218,11.218,0,0,0,1.088.7c.714.293,1.468.49,2.195.757.189.069.321.292.509.366a3.694,3.694,0,0,0,.706.118c.5.087,1.007.174,1.506.283.034.007.048.2.038.3-.021.216-.063.431-.086.579l-.674.47c.054.073.115.213.162.209.409-.038.816-.1,1.224-.158a.241.241,0,0,1,.077,0,26.031,26.031,0,0,1,2.856.578c.372.115.6.642.943.923a4.14,4.14,0,0,0,.892.485c.264.124.544.215.817.321Z" transform="translate(0)" fill="#bd8951"/>
    <path id="Path_11361" data-name="Path 11361" d="M-313.726,383.034a1.707,1.707,0,0,1,1.5,1.6.2.2,0,0,1-.028.069,2.1,2.1,0,0,1-2.542.135,1.109,1.109,0,0,1-.077-.168.85.85,0,0,0,.182.035c.2,0,.393-.017.59-.027-.049-.16-.1-.319-.146-.481a1.54,1.54,0,0,1-.143-.63,3.979,3.979,0,0,1,.37-.823Z" transform="translate(-91.596 -65.292)" fill="#bd8951"/>
    <path id="Path_11362" data-name="Path 11362" d="M-66.086,348.526a3.819,3.819,0,0,0,1.343.651c.915.063,1.116.942,1.764,1.271.179.091.3.281.473.4.13.089.375.1.414.206s-.087.3-.141.452a2.1,2.1,0,0,1-.611-.266c-.688-.627-1.3-1.347-2.041-1.9a4.621,4.621,0,0,0-1.454-.421c-.075-.022-.125-.129-.187-.2Z" transform="translate(-320.824 -33.712)" fill="#bd8951"/>
    <path id="Path_11363" data-name="Path 11363" d="M-57.71,516.939l.042.3c-.069,0-.182.023-.2-.006a1.162,1.162,0,0,1-.076-.29l.134.225Z" transform="translate(-328.747 -189.16)" fill="#bd8951"/>
  </g>
</svg>
                    <p class="text">Origin</p>
                  </div>
                </div>
                
					
                <p class="panel-title">Cuba</p>
              </li> <?php }?>
            <?php } else{ ?>
              <li>
                <div class="panel">
                  <div class="panel-body">
                    <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-abv.svg" alt="icon">
                    <p class="text">Abv</p>
                  </div>
                </div>
                <?php //$abv=get_field('abv_specification');
                                  $abv = $product->get_attribute('abv-percentage');
                                 if($abv):
                                  ?>

                <p class="panel-title"> <?php echo $abv; ?></p>
                <?php else:?>
                <p class="panel-title"> - </p>
                <?php endif;?>
              </li>
              <li>
                <div class="panel">
                  <div class="panel-body">
                    <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-type.svg" alt="icon">
                    <p class="text">Type</p>
                  </div>
                </div>
                <?php //$type=get_field('type_specification');
                                 $type = $product->get_attribute('whiskytype');
                                 if($type):
                                  ?>
                <p class="panel-title"> <?php echo $type; ?></p>
                <?php else:?>
                <p class="panel-title"> - </p>
                <?php  endif;?>
              </li>
              <li>
                <div class="panel">
                  <div class="panel-body">
                    <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-region.svg" alt="icon">
                    <p class="text">Region</p>
                  </div>
                </div>
                <?php //$region=get_field('region_specification');
                                  $region=$product->get_attribute('regions');
                                 if($region):
                                  ?>
                <p class="panel-title"> <?php echo $region; ?></p>
                <?php else:?>
                <p class="panel-title"> - </p>
                <?php  endif;?>
              </li>
              <li>
                <div class="panel">
                  <div class="panel-body">
                    <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-age.svg" alt="icon">
                    <p class="text">Age</p>
                  </div>
                </div>
                <?php //$age=get_field('age_specification');
                                  $age=$product->get_attribute('age-whisky');
                                 if($age):
                                  ?>
                <p class="panel-title"> <?php echo $age; ?></p>
                <?php else:?>
                <p class="panel-title"> - </p>
                <?php  endif;?>
              </li>
              <li>
                <div class="panel">
                  <div class="panel-body">
                    <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/icon-volume.svg" alt="icon">
                    <p class="text">Volume</p>
                  </div>
                </div>
                <?php //$volume=get_field('volume_specification');
                                 $volume=$product->get_attribute('discount_product');
                                 if($volume):
                                  ?>
                <p class="panel-title"> <?php echo $volume; ?></p>
                <?php else:?>
                <p class="panel-title"> - </p>
                <?php  endif;?>
              </li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <?php //do_action( 'whisky_woocommerce_after_single_product_summary' );?>
  </section>


  <!-- ============= RELATED PRODUCTS **============= -->
  <?php $termsp = wp_get_post_terms( get_the_id(), 'product_cat' );
                              $term1  = reset($termsp);
                              $catname=$term->slug;
                              $catnid=$term->term_id;

                              $args = array('post__not_in' => array( $post->ID ),
                              'post_status' => 'publish',
                              'post_type' => 'product',
                              'meta_query' => array(
                                   array(
                                       'key' => 'product_cat',
                                       'value' => serialize( array( $catnid ) ),
                                       'compare' => '='
                                   )
                                 ),
                              'posts_per_page' => 10,

                                   'orderby' => 'rand'
                                 );
                              //print_r($args);
                              //exit();
                              $loop = new WP_Query( $args );
                              //$num = $obj_name->post_count;
                              $totalpost = $loop->found_posts;

                               if (!empty($totalpost)) {

                             ?>
  <section class="si-related-products">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
          <h4 class="main-title"><span class="brand-color">Related</span> Products</h4>
        </div>
        <div class="col-md-5 text-right">
          <a href="<?php echo $link = get_term_link( $catnid, 'product_cat' );?>" class="btn-brand-link">View All Products</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="owl-carousel related-products">
            <?php
                            while ( $loop->have_posts() ) : $loop->the_post();
                           $imagepro = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                           $includevat1=$product->get_price_including_tax();
                           $excludevat1=$product->get_price_excluding_tax();
                            ?>
            <div class="item">
              <div class="product-panel">
                <div class="product-media">
                  <a href="<?php  the_permalink(); ?>"><img loading="lazy"  src="<?php echo $imagepro[0]; ?>" alt="media"></a>
                  <div class="product-badges"></div>
                  <div class="product-options">
                    <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');
                                      //echo do_shortcode('[ti_wishlistsview]'); ?>
                    <a class="btn btn-text" href="<?php  the_permalink(); ?>">
                      <span class="icon"><i class="las la-expand"></i></span>
                      <span class="text">Quick View</span>
                    </a>
                    <a href=" <?php echo home_url(); ?>/cart/?add-to-cart=<?php echo $post->ID;?> " class="btn btn-icon btn-icon-cart"> <i class="las la-shopping-cart"></i></a>
                    <?php //do_action('woocommerce_simple_add_to_cart'); ?>
                  </div>
                </div>
                <div class="product-content">
                  <?php  $discount_value = $product->get_attribute('discount_product',$post->ID );  ?>
                  <?php
                                  $vat_value = $product->get_attribute('vat_priceproduct',$post->ID );
                                 ?>

                  <h5 class="product-title"><a href="<?php echo get_permalink() ?>"><?php  echo mb_strimwidth(get_the_title(), 0, 20, '...');//the_title();?></a></h5>

                  <div class="product-price">
                    <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
                    <span class="price"><?php  echo $product->get_price_html($includevat1); //echo wc_price( $price ); ?></span>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile;  wp_reset_query();?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php }?>
<?php $args = array(
    'post_type' => 'product',
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 4,
    'meta_query' => array(
         array(
             'key' => 'product_cat',
             'value' => serialize( array( $catnid ) ),
             'compare' => '='
         )
       ),
);
$loop = new WP_Query( $args );
if($loop->have_posts()){?>
  <!-- ============= BEST PRODUCTS **============= -->
  <?php //echo do_shortcode('[best_selling_products]');?>
  <section class="si-best-products">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h4 class="main-title"><span class="brand-color">Best Selling</span> Right Now</h4>
        </div>
      </div>
      <div class="row">
        <?php

$x=1;
while ( $loop->have_posts() ) : $loop->the_post();
global $product; ?>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="best-product-panel best-product-panel-min bg-<?php echo $x;?>">
            <a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>" title="<?php the_title(); ?>">

              <?php
$product_featuredimg = get_sub_field('product_featured__imagebestproduct');
 echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
 ?>
              <div class="overlay">
                <div class="top-panel">
                  <h4 class="title"><?php the_title(); ?></h4>
                  <div class="price">
                    <strong> <?php
                            $includevat2=$product->get_price_including_tax();
                            echo $product->get_price_html($includevat2);
                           //echo get_post_meta($bestprd->ID, '_regular_price', true);?>
                    </strong><br>

                    <!-- <small><?php //echo woocommerce_price($product->get_price_excluding_tax()); ?> Ex. VAT</small> -->
                  </div>

                </div>
                <div class="bottom-panel">
                  <a href="<?php the_permalink($loop->post->ID); ?>" class="btn btn-brand">Buy Now</a>
                  <?php //do_action('woocommerce_simple_add_to_cart'); ?>
                </div>
              </div>
            </a>
          </div>
        </div>
        <?php $x++; endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </section>
<?php } ?>
  <?php wp_reset_query();?>
