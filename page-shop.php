<?php
get_header(); 
/*
Template Name:New product Page
*/
?>
                  <!-- Main Page -->

        
         <!-- Main Page -->
         <div id="page" class="site-page">

            <!-- ============ PRODUCT LIST BANNER ============  -->
            <section class="product-banner-big">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6 col-lg-8">
                        <h2 class="banner-title">Single Malt <br> Scotch Whisky</h2>
                        <p>Single Malt scotch Whisky is one of the most celebrated and treasured drinks in the world. Made at a single distillery from malted barley under the strictest of regulations, it is matured for many years in Oak casks before being bottled and allowed for sale.</p>
                     </div>
                  </div>
               </div>
            </section>

            <section class="si-product-list">
               <div class="container">

                  <!-- ============ BREADCRUMB HEADER ============  -->
                  <div class="breadcrumb-heading">
                     <div class="row">
                        <div class="col-lg-6">
                           <ol class="breadcrumb breadcrumb-alt">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Single Malt Scotch Whisky</li>
                           </ol>
                        </div>
                        <div class="col-lg-6">
                           <p class="breadcrumb-note">Orders from outside the EU are not subjected to VAT.</p>
                        </div>
                     </div>
                  </div>

                  <!-- ============ PRODUCT LIST OPTIONS ============  -->
                  <div class="product-list-option-panel mb-5">
                     <div class="row align-items-center">
                        <div class="col-lg-6">
                           <h4 class="title">Single Malt Scotch Whisky <small class="text-muted">- 46180 items</small></h4>
                        </div>
                        <div class="col-lg-6">
                           <div class="row">
                              <div class="col-lg-6 d-none d-lg-block">
                                 <div class="spec-search-panel">
                                    <input type="text" class="form-control" placeholder="Search Product">
                                    <button class="btn"><i class="las la-search fa-flip-horizontal"></i></button>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sorting">
                                 <div class="custom-select-box">
                                    <select name="slct" id="slct">
                                       <option selected="selected">Default sorting</option>
                                       <option>Sort by popularity</option>
                                       <option>Sort by average rating</option>
                                       <option>Sort by latest</option>
                                       <option>Sort by price: low to high</option>
                                       <option>Sort by price: high to low</option> 
                                    </select>
                                 </div>
                                 <button class="btn btn-filter-open">
                                    <i class="fa fa-sort" aria-hidden="true"></i> Filter
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- ============ PRODUCT LIST ============  -->
                  <div class="row row-product-main">
                     <aside class="filter-col">
                        <header class="filter-header">
                           <h3 class="title">Filter</h3>
                           <button class="btn btn-filter-close"><i class="las la-times"></i></button>
                        </header>
                        <div class="filter-search-panel">
                           <input type="text" class="form-control" placeholder="Search Product">
                           <span class="search-icon"><i class="las la-search fa-flip-horizontal"></i></span>
                        </div>
                        <div class="accordion product-filters" id="productFilters">
                           <div class="card">
                              <div class="card-header" id="pfHead1">
                                 <button class="btn" type="button" data-toggle="collapse" data-target="#pFilter1" aria-expanded="true" aria-controls="pFilter1">Distilleries</button>
                              </div>
                              <div id="pFilter1" class="collapse show" aria-labelledby="pfHead1" >
                                 <div class="card-body">
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck1">
                                       <label class="custom-control-label" for="customCheck1">Aberlour <span class="custom-count">(23)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck2">
                                       <label class="custom-control-label" for="customCheck2">Ailsa Bay <span class="custom-count">(12)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck3">
                                       <label class="custom-control-label" for="customCheck3">Ardbeg <span class="custom-count">(05)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck4">
                                       <label class="custom-control-label" for="customCheck4">Deanston <span class="custom-count">(15)</span></label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="pfHead2">
                                 <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#pFilter2" aria-expanded="false" aria-controls="pFilter2">Price</button>
                              </div>
                              <div id="pFilter2" class="collapse" aria-labelledby="pfHead2" >
                                 <div class="card-body">
                                    <input type="text" class="price-range-slider" name="price_range" value="" />
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="pfHead3">
                                 <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#pFilter3" aria-expanded="false" aria-controls="pFilter3">Discount Range</button>
                              </div>
                              <div id="pFilter3" class="collapse" aria-labelledby="pfHead3" >
                                 <div class="card-body">
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck12">
                                       <label class="custom-control-label" for="customCheck12">10% and above  <span class="custom-count">(02)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck13">
                                       <label class="custom-control-label" for="customCheck13">20% and above <span class="custom-count">(11)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck14">
                                       <label class="custom-control-label" for="customCheck14">30% and above  <span class="custom-count">(12)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck15">
                                       <label class="custom-control-label" for="customCheck15">40% and above  <span class="custom-count">(15)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck16">
                                       <label class="custom-control-label" for="customCheck16">50% and above <span class="custom-count">(02)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck17">
                                       <label class="custom-control-label" for="customCheck17">60% and above  <span class="custom-count">(05)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck18">
                                       <label class="custom-control-label" for="customCheck18">70% and above <span class="custom-count">(80)</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck19">
                                       <label class="custom-control-label" for="customCheck19">80% and above <span class="custom-count">(11)</span></label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="pfHead3">
                                 <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#pFilter4" aria-expanded="false" aria-controls="pFilter4">Region</button>
                              </div>
                              <div id="pFilter4" class="collapse" aria-labelledby="pfHead3" >
                                 <div class="card-body">
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck20">
                                       <label class="custom-control-label" for="customCheck20">Region 1</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck21">
                                       <label class="custom-control-label" for="customCheck21">Region 2</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck22">
                                       <label class="custom-control-label" for="customCheck22">Region 3</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck23">
                                       <label class="custom-control-label" for="customCheck23">Region 4</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck24">
                                       <label class="custom-control-label" for="customCheck24">Region 5</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-alt">
                                       <input type="checkbox" class="custom-control-input" id="customCheck25">
                                       <label class="custom-control-label" for="customCheck25">Region 6</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </aside>
                     <main class="product-grid-col">
                        <div class="row row-product-grid">
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-1.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-danger">New</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <a href="#quickViewModal" type="button" class="btn btn-text btn-quick-view">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </a>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Aberlour 18 Year Old Whisky</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-2.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-dark">Featured Product</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <a href="#quickViewModal" type="button" class="btn btn-text btn-quick-view">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </a>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Aberlour Abunadh Cask Strength Whisky</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-3.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-dark">Featured Product</span>
                                       <span class="badge badge-info">Old & Rare</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <a href="#quickViewModal" type="button" class="btn btn-text btn-quick-view">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </a>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Aberlour 12 Year Old Whisky</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-4.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-danger">New</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <a href="#quickViewModal" type="button" class="btn btn-text btn-quick-view">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </a>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Ardbeg 21 Year Old</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-2.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-danger">New</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <button class="btn btn-text">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </button>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Aberlour Abunadh Cask Strength Whisky</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-1.jpg" alt="media">
                                    <div class="product-badges"></div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <button class="btn btn-text">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </button>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Aberlour 18 Year Old Whisky</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-4.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-info">Old & Rare</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <button class="btn btn-text">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </button>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Ardbeg 21 Year Old</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-3.jpg" alt="media">
                                    <div class="product-badges"></div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <button class="btn btn-text">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </button>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Aberlour 12 Year Old Whisky</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-1.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-danger">New</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <button class="btn btn-text">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </button>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Aberlour 18 Year Old Whisky</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-2.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-dark">Featured Product</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <button class="btn btn-text">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </button>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Aberlour Abunadh Cask Strength Whisky</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-3.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-dark">Featured Product</span>
                                       <span class="badge badge-info">Old & Rare</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <button class="btn btn-text">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </button>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Aberlour 12 Year Old Whisky</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col">
                              <div class="product-panel">
                                 <div class="product-media">
                                    <img loading="lazy"  src="img/sp-4.jpg" alt="media">
                                    <div class="product-badges">
                                       <span class="badge badge-danger">New</span>
                                    </div>
                                    <div class="product-options">
                                       <button class="btn btn-icon btn-icon-heart"><i class="lar la-heart"></i></button>
                                       <button class="btn btn-text">
                                          <span class="icon"><i class="las la-expand"></i></span>
                                          <span class="text">Quick View</span>
                                       </button>
                                       <button class="btn btn-icon btn-icon-cart"><i class="las la-shopping-cart"></i></button>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <div class="product-units">50% / 70cl</div>
                                    <h5 class="product-title">Ardbeg 21 Year Old</h5>
                                    <div class="product-rating">
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                       <i class="las la-star"></i>
                                    </div>
                                    <div class="product-price">
                                       <span class="price">£35.00</span>
                                       <span class="price-note">Price Ex. VAT £66.67</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="pagination-frame">
                           <div class="row">
                              <div class="col-12">
                                 <ul class="pagination justify-content-center pagination-alt">
                                    <li class="page-item">
                                       <a class="page-link" href="#" aria-label="Previous"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                       <a class="page-link" href="#" aria-label="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>      
                        </div>
                     </main>
                  </div>   

               </div>
            </section>
          </div>
  <?php get_footer();?>      