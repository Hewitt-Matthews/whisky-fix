<?php
get_header(); 
/*
Template Name:delivery Page
*/
?>
         <!-- Main Page -->
         <div id="page" class="site-page">

            <!-- ============ BANNER **============ -->
             <?php $headerimage=get_field('header_image_____delivery'); ?>
            <section class="si-delivery-return-banner" style="background: #000000 url(<?php echo $headerimage['url']; ?>) no-repeat center/cover;">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="panel-content">
                           <h1 class="main-title"><span class="brand-color"><?php the_field('page_title_color_delivery'); ?></span> <?php the_field('page_title___delivarypage'); ?></h1>
                           <p><?php the_field('header_description____delivery'); ?></p>
                         <?php if ( function_exists('yoast_breadcrumb') ) {
                              yoast_breadcrumb('<li class="breadcrumb-item">','</li>');
                           } ?>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <!-- ============ SECTION ============ -->
            <section class="si-delivery-return-main">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-10 mx-auto">
                        <div class="panel-content">
                           <?php the_field('content_area___delivery'); ?>
                           <br>
                           <h4>United Kingdom</h4>
                           <ul class="country-panel">
                              <li>
                                 <div class="mb-2">Standard Delivery</div>
                                 <div><?php the_field('delivery_days'); ?></div>
                              </li>
                              <li>
                                 <div class="mb-2"><?php the_field('united_kingdom__delivery_charge'); ?></div>
                                 <div>No Cutt-off</div>
                              </li>
                           </ul>
                           <br>
                           <br>
                           <h4>International Shipping</h4>
                           <ul class="country-panel international">
                              <li>
                                 <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/map-outline-europe.svg" alt="Europe Icon">
                                 <div>
                                    <strong>Europe</strong>
                                    <span><?php the_field('europe_shipping_days'); ?></span>
                                 </div>
                              </li>
                              <li>
                                 <img loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/img/map-outline-world.svg" alt="Global Icon">
                                 <div>
                                    <strong>Rest of World</strong>
                                    <span><?php the_field('rest_of_world_shipping_days_'); ?></span>
                                 </div>
                              </li>
                           </ul>
                           <br>
                           <p>Prices specified below are per bottle</p>
                           <p>If your country is not listed please get in touch for prices as we can ship to most countries worldwide.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <!-- ============ SECTION ============ -->
            <section class="si-country-charges">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-10 mx-auto">
                        <div class="accordion accordion-country-charges">
                           <?php $i=1;
                        while ( have_rows('delivery__charges') ) : the_row();
                       $country_name = get_sub_field('country_name___');
                       // number_of_bottle_
                       //$banner_title = get_sub_field('banner_title');
                       if($i==1):
                           ?>
                           <div class="card">
                              <div class="card-header" id="head1">
                                 <h2 data-toggle="collapse" data-target="#idc<?php echo $i;?>" aria-expanded="true" aria-controls="idc<?php echo $i;?>"><?php echo $country_name; ?></h2>
                              </div>
                              <div id="idc<?php echo $i;?>" class="collapse show" aria-labelledby="head<?php echo $i;?>">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                         <?php 
                        while ( have_rows('number_of_bottle_') ) : the_row();
                       $bottle_count = get_sub_field('bottle_count');
                       $pricebottle = get_sub_field('price____bottle');
                       ?>
                                       <div class="panel-inner"><p><?php echo $bottle_count?></p><p class="brand-color"><?php  echo $pricebottle;?></p></div>
                                    <?php  endwhile;?>
                                   
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php else:?>
                       
                           <div class="card">
                              <div class="card-header" id="head<?php echo $i;?>">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc<?php echo $i;?>" aria-expanded="false" aria-controls="idc<?php echo $i;?>"><?php echo $country_name; ?></h2>
                              </div>
                              <div id="idc<?php echo $i;?>" class="collapse" aria-labelledby="head<?php echo $i;?>">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                        <?php 
                        while ( have_rows('number_of_bottle_') ) : the_row();
                       $bottle_count = get_sub_field('bottle_count');
                       $pricebottle = get_sub_field('price____bottle');
                       ?>
                                       <div class="panel-inner"><p><?php echo $bottle_count?></p><p class="brand-color"><?php  echo $pricebottle;?></p></div>
                                    <?php  endwhile;?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php endif;?>
                         <?php $i++; endwhile;?>
                        <!--    <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc3" aria-expanded="false" aria-controls="idc3">Belgium</h2>
                              </div>
                              <div id="idc3" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£13</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£14</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£16</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc4" aria-expanded="false" aria-controls="idc4">Bulgaria</h2>
                              </div>
                              <div id="idc4" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc5" aria-expanded="false" aria-controls="idc5">Channel Islands</h2>
                              </div>
                              <div id="idc5" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£13</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£14</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£16</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc6" aria-expanded="false" aria-controls="idc6">China</h2>
                              </div>
                              <div id="idc6" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£50</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£55</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£80</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£100</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc7" aria-expanded="false" aria-controls="idc7">Croatia</h2>
                              </div>
                              <div id="idc7" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc8" aria-expanded="false" aria-controls="idc8">Cyprus</h2>
                              </div>
                              <div id="idc8" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc9" aria-expanded="false" aria-controls="idc9">Czech Republic</h2>
                              </div>
                              <div id="idc9" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc10" aria-expanded="false" aria-controls="idc10">Denmark</h2>
                              </div>
                              <div id="idc10" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£13</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£14</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£16</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc11" aria-expanded="false" aria-controls="idc11">Faroe Islands</h2>
                              </div>
                              <div id="idc11" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc12" aria-expanded="false" aria-controls="idc12">Finland</h2>
                              </div>
                              <div id="idc12" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£20</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£21</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£22</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£23</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc13" aria-expanded="false" aria-controls="idc13">France</h2>
                              </div>
                              <div id="idc13" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£13</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£14</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£16</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc14" aria-expanded="false" aria-controls="idc14">Germany</h2>
                              </div>
                              <div id="idc14" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£13</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£14</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£16</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc15" aria-expanded="false" aria-controls="idc15">Gibraltar</h2>
                              </div>
                              <div id="idc15" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc16" aria-expanded="false" aria-controls="idc16">Greece</h2>
                              </div>
                              <div id="idc16" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc17" aria-expanded="false" aria-controls="idc17">Greenland</h2>
                              </div>
                              <div id="idc17" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc18" aria-expanded="false" aria-controls="idc18">Hong Kong</h2>
                              </div>
                              <div id="idc18" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£40</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£55</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£75</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£100</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc19" aria-expanded="false" aria-controls="idc19">Hungary</h2>
                              </div>
                              <div id="idc19" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc20" aria-expanded="false" aria-controls="idc20">India</h2>
                              </div>
                              <div id="idc20" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£40</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£75</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£110</p></div>
                                       <div class="panel-inner"><p>4-6 bottle</p><p class="brand-color">£145</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc21" aria-expanded="false" aria-controls="idc21">Iceland</h2>
                              </div>
                              <div id="idc21" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc22" aria-expanded="false" aria-controls="idc22">Ireland</h2>
                              </div>
                              <div id="idc22" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£16</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£17</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£18</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc23" aria-expanded="false" aria-controls="idc23">Italy</h2>
                              </div>
                              <div id="idc23" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£20</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£21</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£22</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£23</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc24" aria-expanded="false" aria-controls="idc24">Japan</h2>
                              </div>
                              <div id="idc24" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£50</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£55</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£60</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£70</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc25" aria-expanded="false" aria-controls="idc25">Latvia</h2>
                              </div>
                              <div id="idc25" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc26" aria-expanded="false" aria-controls="idc26">Liechtenstein</h2>
                              </div>
                              <div id="idc26" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc27" aria-expanded="false" aria-controls="idc27">Lithuania</h2>
                              </div>
                              <div id="idc27" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc28" aria-expanded="false" aria-controls="idc28">Luxembourg</h2>
                              </div>
                              <div id="idc28" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£13</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£14</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£16</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc29" aria-expanded="false" aria-controls="idc29">Malta</h2>
                              </div>
                              <div id="idc29" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc30" aria-expanded="false" aria-controls="idc30">Monaco</h2>
                              </div>
                              <div id="idc30" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£13</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£14</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£16</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc31" aria-expanded="false" aria-controls="idc31">New Zealand</h2>
                              </div>
                              <div id="idc31" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£30</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£35</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£40</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£45</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc32" aria-expanded="false" aria-controls="idc32">Netherlands</h2>
                              </div>
                              <div id="idc32" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£13</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£14</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£16</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc33" aria-expanded="false" aria-controls="idc33">Norway</h2>
                              </div>
                              <div id="idc33" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc34" aria-expanded="false" aria-controls="idc34">Poland</h2>
                              </div>
                              <div id="idc34" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£16</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£17</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£18</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc35" aria-expanded="false" aria-controls="idc35">Portugal</h2>
                              </div>
                              <div id="idc35" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£20</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£21</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£22</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£23</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc36" aria-expanded="false" aria-controls="idc36">Singapore</h2>
                              </div>
                              <div id="idc36" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£30</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£35</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£40</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£45</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc37" aria-expanded="false" aria-controls="idc37">Slovakia</h2>
                              </div>
                              <div id="idc37" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc38" aria-expanded="false" aria-controls="idc38">Slovenia</h2>
                              </div>
                              <div id="idc38" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc39" aria-expanded="false" aria-controls="idc39">South Africa</h2>
                              </div>
                              <div id="idc39" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£35</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£40</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£45</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£50</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc40" aria-expanded="false" aria-controls="idc40">Spain</h2>
                              </div>
                              <div id="idc40" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£17</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£21</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£22</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£23</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc41" aria-expanded="false" aria-controls="idc41">Sweden</h2>
                              </div>
                              <div id="idc41" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£15</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£16</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£17</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£18</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc42" aria-expanded="false" aria-controls="idc42">Switzerland</h2>
                              </div>
                              <div id="idc42" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£25</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£27</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£29</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£31</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc43" aria-expanded="false" aria-controls="idc43">Taiwan</h2>
                              </div>
                              <div id="idc43" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£50</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£60</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£65</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£70</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc44" aria-expanded="false" aria-controls="idc44">USA 1</h2>
                              </div>
                              <div id="idc44" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£50</p></div>
                                       <div class="panel-inner"><p>2 bottle</p><p class="brand-color">£60</p></div>
                                       <div class="panel-inner"><p>3 bottle</p><p class="brand-color">£70</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£80</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="head3">
                                 <h2 class="collapsed" data-toggle="collapse" data-target="#idc45" aria-expanded="false" aria-controls="idc45">USA 2</h2>
                              </div>
                              <div id="idc45" class="collapse" aria-labelledby="head3">
                                 <div class="card-body">
                                    <div class="country-charges-panel">
                                       <div class="panel-inner"><p>1 bottle</p><p class="brand-color">£130</p></div>
                                       <div class="panel-inner"><p>2-3 bottle</p><p class="brand-color">£175</p></div>
                                       <div class="panel-inner"><p>4-12 bottle</p><p class="brand-color">£200</p></div>
                                       <div class="panel-inner"><p>+12 bottle</p><p class="brand-color">£300</p></div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </section>

       <?php get_footer();?>   