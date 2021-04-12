<?php 
if(session_status()==PHP_SESSION_NONE){
  session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cartzilla | Multi-vendor Marketplace
  </title>
  <link rel="stylesheet" href="css/theme.min.css" type="text/css">
  <?php include('links-page/links-page.php'); ?>
</head>
<!-- Body-->

<body class="toolbar-enabled">

  <!-- Sign in / sign up modal-->
  <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
            <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
          </ul>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body tab-content py-4">
          <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
            <div class="form-group">
              <label for="si-email">Email address</label>
              <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
              <div class="invalid-feedback">Please provide a valid email address.</div>
            </div>
            <div class="form-group">
              <label for="si-password">Password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="si-password" required>
                <label class="password-toggle-btn">
                  <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                </label>
              </div>
            </div>
            <div class="form-group d-flex flex-wrap justify-content-between">
              <div class="custom-control custom-checkbox mb-2">
                <input class="custom-control-input" type="checkbox" id="si-remember">
                <label class="custom-control-label" for="si-remember">Remember me</label>
              </div><a class="font-size-sm" href="#">Forgot password?</a>
            </div>
            <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
          </form>
          <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
            <div class="form-group">
              <label for="su-name">Full name</label>
              <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
              <div class="invalid-feedback">Please fill in your name.</div>
            </div>
            <div class="form-group">
              <label for="su-email">Email address</label>
              <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
              <div class="invalid-feedback">Please provide a valid email address.</div>
            </div>
            <div class="form-group">
              <label for="su-password">Password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="su-password" required>
                <label class="password-toggle-btn">
                  <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="su-password-confirm">Confirm password</label>
              <div class="password-toggle">
                <input class="form-control" type="password" id="su-password-confirm" required>
                <label class="password-toggle-btn">
                  <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar-->
  <!-- Navbar Marketplace-->
  <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
  <?php include('main-page/header-page.php'); ?>
  <!-- Page title-->
  <!-- Page Content-->
  <!-- Hero section-->
  <section class="bg-accent bg-position-center-top bg-no-repeat py-5" style="background-image: url(img/home/marketplace-hero.jpg);">
    <div class="pb-lg-5 mb-lg-3">
      <div class="container py-lg-5 my-lg-5">
        <div class="row mb-4 mb-sm-5">
          <div class="col-lg-7 col-md-9 text-center text-sm-left">
            <h1 class="text-white line-height-base"><span class='font-weight-light'>Over</span> 1,500 <span class='font-weight-light'>curated</span> Design <span class='font-weight-light'>resources</span>, Images, Graphic <span class='font-weight-light'>&amp;</span> Website <span class='font-weight-light'>templates</span></h1>
            <h2 class="h5 text-white font-weight-light">High quality items created by our global community</h2>
          </div>
        </div>
        <div class="row pb-lg-5 mb-4 mb-sm-5">
          <div class="col-lg-6 col-md-8">
            <div class="input-group input-group-overlay input-group-lg">
              <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
              <input class="form-control form-control-lg prepended-form-control rounded-right-0" type="text" placeholder="Start your search">
              <div class="input-group-append">
                <button class="btn btn-primary btn-lg dropdown-toggle font-size-base" type="button" data-toggle="dropdown">All categories</button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Photos</a><a class="dropdown-item" href="#">Graphics</a><a class="dropdown-item" href="#">UI Design</a><a class="dropdown-item" href="#">Web Themes</a><a class="dropdown-item" href="#">Add-Ons</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Featured products (Carousel)-->
  <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
    <div class="card px-lg-2 border-0 box-shadow-lg">
      <div class="card-body px-4 pt-5 pb-4">
        <h2 class="h3 text-center">Discover featured products</h2>
        <p class="text-muted text-center">Every week we hand-pick some of the best items from our collection</p>
        <!-- Carousel-->
        <div class="cz-carousel pt-4">
          <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 15, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
            <!-- Product-->
            <div>
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                  <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
                    <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                  </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/02.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                    </div>
                  </div>
                  <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Floating Phone and Tablet Mockup (PSD)</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>109<span class="font-size-xs ml-1">Sales</span></div>
                    <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$15.<small>00</small></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                  <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
                    <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                  </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/03.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                  <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Project Devices Showcase (PSD)</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>95<span class="font-size-xs ml-1">Sales</span></div>
                    <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$18.<small>00</small></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                  <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
                    <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                  </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/08.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                    </div>
                  </div>
                  <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Business Card Branding Mockup</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>316<span class="font-size-xs ml-1">Sales</span></div>
                    <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$17.<small>00</small></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                  <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
                    <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                  </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/07.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                  <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Gravity Device Mockups (PSD)</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>234<span class="font-size-xs ml-1">Sales</span></div>
                    <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$16.<small>00</small></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Recent products grid-->
  <section class="container pb-5 mb-lg-3">
    <!-- Heading-->
    <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
      <h2 class="h3 mb-0 pt-3 mr-2">The most recent releases</h2>
      <div class="pt-3">
        <select class="custom-select">
          <option>All categories</option>
          <option>Photos</option>
          <option>Graphics</option>
          <option>UI Design</option>
          <option>Web Themes</option>
          <option>Fonts</option>
          <option>Add-Ons</option>
        </select>
      </div>
    </div>
    <!-- Grid-->
    <div class="row pt-2 mx-n2">
      <!-- Product-->
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <!-- Product-->
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/01.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">UI Design</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Square Style Mobile UI Kit (Sketch)</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>153<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$24.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/04.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Flat-line E-Commerce Icons (AI)</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>26<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$18.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/09.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">UI Design</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Isometric Device Mockups (PSD)</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>36<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$16.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/10.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">theDesigner </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Coffe Paper Cup Mockup</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>57<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$10.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/06.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Travel &amp; Landmark Icon Pack (AI)</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>21<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$17.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/05.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">UI Design</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Minimal Mobile App UI Kit (Sketch)</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>117<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$23.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/11.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Printed T-Shirt Mockup (PSD)</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>94<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$12.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/12.jpg" alt="Product">
          </div>
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
              <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
            <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Corporate Branding Mockup (PSD)</a></h3>
            <div class="d-flex flex-wrap justify-content-between align-items-center">
              <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>122<span class="font-size-xs ml-1">Sales</span></div>
              <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$18.<small>00</small></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- More button-->
    <div class="text-center"><a class="btn btn-outline-accent" href="marketplace-category">View more products<i class="czi-arrow-right font-size-ms ml-1"></i></a></div>
  </section>
  <!-- Seller of the month-->
  <section class="border-top py-5">
    <div class="container py-lg-2">
      <h2 class="h3 mb-3 pb-3 pb-lg-4 text-center">Seller of the month</h2>
      <div class="row">
        <div class="col-lg-4 text-center text-lg-left pb-3 pt-lg-2">
          <div class="d-inline-block text-left">
            <div class="media media-ie-fix align-items-center pb-3">
              <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img class="rounded-circle" src="img/marketplace/account/avatar.png" alt="Createx Studio"></div>
              <div class="media-body pl-3">
                <h3 class="font-size-lg mb-0">Createx Studio</h3><span class="d-block text-muted font-size-ms pt-1 pb-2">Member since November 2017</span><a class="btn btn-primary btn-sm" href="marketplace-vendor">View products</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="cz-carousel">
            <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}}}">
              <div>
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
                      <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                    </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/13.jpg" alt="Product">
                  </div>
                  <div class="card-body">
                    <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Hardcover Book Catalog Mockup</a></h3>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>39<span class="font-size-xs ml-1">Sales</span></div>
                      <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$12.<small>00</small></div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
                      <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                    </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/14.jpg" alt="Product">
                  </div>
                  <div class="card-body">
                    <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Top View Smartwatch 3D Render</a></h3>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>28<span class="font-size-xs ml-1">Sales</span></div>
                      <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$14.<small>00</small></div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                    <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
                      <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                    </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="img/marketplace/products/07.jpg" alt="Product">
                  </div>
                  <div class="card-body">
                    <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Gravity Device Mockups (PSD)</a></h3>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>234<span class="font-size-xs ml-1">Sales</span></div>
                      <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$16.<small>00</small></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Marketplace features-->
  <section class="bg-accent bg-size-cover bg-position-center pt-5 pb-4 pb-lg-5" style="background-image: url(img/marketplace/features/features-bg.jpg);">
    <div class="container pt-lg-3">
      <h2 class="h3 mb-3 pb-4 text-light text-center">Why our marketplace?</h2>
      <div class="row pt-lg-2 text-center">
        <div class="col-lg-3 col-sm-6 mb-grid-gutter">
          <div class="d-inline-block">
            <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/quality.png" width="52" alt="Quality Guarantee">
              <div class="media-body pl-3">
                <h6 class="text-light font-size-base mb-1">Quality Guarantee</h6>
                <p class="text-light font-size-ms opacity-70 mb-0">Quality checked by our team</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-grid-gutter">
          <div class="d-inline-block">
            <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/support.png" width="52" alt="Customer Support">
              <div class="media-body pl-3">
                <h6 class="text-light font-size-base mb-1">Customer Support</h6>
                <p class="text-light font-size-ms opacity-70 mb-0">Friendly 24/7 customer support</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-grid-gutter">
          <div class="d-inline-block">
            <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/updates.png" width="52" alt="Free Updates">
              <div class="media-body pl-3">
                <h6 class="text-light font-size-base mb-1">Lifetime Free Updates</h6>
                <p class="text-light font-size-ms opacity-70 mb-0">Never pay for an update</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-grid-gutter">
          <div class="d-inline-block">
            <div class="media media-ie-fix align-items-center text-left"><img src="img/marketplace/features/secure.png" width="52" alt="Secure Payments">
              <div class="media-body pl-3">
                <h6 class="text-light font-size-base mb-1">Secure Payments</h6>
                <p class="text-light font-size-ms opacity-70 mb-0">We posess SSL / Secure сertificate</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog posts carousel-->
  <section class="py-5">
    <div class="container py-lg-3">
      <h2 class="h3 text-center">From the blog</h2>
      <p class="text-muted text-center mb-3 pb-4">Latest marketplace news, success stories and tutorials</p>
      <div class="cz-carousel">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 15, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
          <div>
            <div class="card"><a class="blog-entry-thumb" href="blog-single"><img class="card-img-top" src="img/blog/05.jpg" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single">We start selling WordPress themes soon</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p>
                <div class="font-size-xs text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Nov 23</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single#comments"><i class="czi-message"></i>19</a></div>
              </div>
            </div>
          </div>
          <div>
            <div class="card"><a class="blog-entry-thumb" href="blog-single"><img class="card-img-top" src="img/blog/06.jpg" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single">Shoot like a pro. Tips &amp; tricks</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p>
                <div class="font-size-xs text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Oct 10</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single#comments"><i class="czi-message"></i>28</a></div>
              </div>
            </div>
          </div>
          <div>
            <div class="card"><a class="blog-entry-thumb" href="blog-single"><img class="card-img-top" src="img/blog/07.jpg" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single">Designing engaging mobile experiences</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p>
                <div class="font-size-xs text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Sep 15</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single#comments"><i class="czi-message"></i>46</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- More button-->
      <div class="text-center pt-4 mt-md-2"><a class="btn btn-outline-accent" href="blog-grid-sidebar">Ream more posts<i class="czi-arrow-right font-size-ms ml-1"></i></a></div>
    </div>
  </section>
  <!-- Toast: Added to Cart-->
  <div class="toast-container toast-bottom-center">
    <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
        <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
        <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="toast-body">This item has been added to your cart.</div>
    </div>
  </div>
  <!-- Footer-->
  <!-- Footer-->
  <?php include('main-page/footer-page.php') ; ?>
  <!-- Toolbar for handheld devices-->
  <div class="cz-handheld-toolbar">
    <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="marketplace-cart"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
    </div>
  </div>
  <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2"></span><i class="btn-scroll-top-icon czi-arrow-up"> </i></a>
  <!-- Vendor scrits: js libraries and plugins-->
  <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <!-- Main theme script-->
  <script src="js/theme.min.js"></script>
</body>

</html>