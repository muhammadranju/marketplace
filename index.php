<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pikslide Marketplace
  </title>
  <link rel="stylesheet" href="css/theme.min.css" type="text/css">
  <?php include('links-page/links-page.php'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/placeholder-loading/dist/css/placeholder-loading.min.css" />
  <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
  <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
  <style>
    body {
      background-color: #F4F6F9;
    }
  </style>
</head>

<body class="">

  <?php include('main-page/header-page.php'); ?>
  <?php include('model-page.php'); ?>
  <!-- Quick View Modal-->
  <div class="modal-quick-view modal fade " id="quick-view" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="card-body">
        <div class="modal-content">
          <div class="modal-body">
            <div><img src="https://assets.materialup.com/uploads/73001380-3512-45db-8a8e-2e4c70065b3a/preview.jpg" width="100%" height="100%" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero section-->
  <?php if (!isset($_SESSION['user_id'])) { ?>
    <section class=" bg-primary bg-position-center-top bg-no-repeat w-100" style="background-image: url(img/home/market.jpg); ">
      <div class="pb-lg-12 mb-lg-0"></div>
      <div class="container py-lg-5 my-lg-0">
        <div class="row mb-3 mb-sm-1">
          <div class="col-lg-12 col-md-12 text-center ">
            <h1 class="text-dark line-height-base"><span class='font-weight-bold'> &#127752;The &#128293;#1 place for design resources</span></h1>
           <h2 class="h4 text-dark font-normal mt-3">Pikslide is the place to find high-quality design resources for designers, creative agencies and developers </h2>
            <h2 class="h5 text-dark font-weight-bold">High quality items created by our global community</h2>
            <a href="pages-register" class="btn  text-dark bg-light font-size-lg  btn-size-12  mt-2">GET START</a>
          </div>
        </div>
      </div>
      </div>
    </section>
  <?php }; ?>
  <!-- Hero section-->
  <section class="container rounded   ">
    <!-- <div class="container"> -->
    <h2 class="h5 font-weight-bold  mt-4 text-dark">Trending Premium Downloads</h2>
    <div class="container row pt-2 mx-n2 col-lg-12">
      <!-- Product-->
      <div class="col-lg-2 col-md-2 col-sm-2 px-2 mb-2">
        <div class="card product-card price-card card-product-grid ">
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/01dd627c-3ec6-4033-b716-62e6a032cfcb/teaser.png" alt="Product"></a>
          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <div class="d-flex justify-content-between">
            </div>
            <hr class="d-sm-none">
          </div>
        </div>
      </div>

      <!-- Product-->
      <div class="col-lg-2 col-md-2 col-sm-2 px-2 mb-2">
        <div class="card product-card price-card card-product-grid   ">
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/ddf8ffd2-b798-472a-95da-374b4ec9131f/teaser.png" alt="Product"></a>
          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <div class="d-flex justify-content-between">
            </div>
            <hr class="d-sm-none">
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-2 col-md-2 col-sm-2 px-2 mb-2">
        <div class="card product-card price-card card-product-grid   ">
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/6ef23aa7-e99b-46e1-8d0d-b4a29ec5fb4c/teaser.png" alt="Product"></a>
          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <div class="d-flex justify-content-between">
            </div>
            <hr class="d-sm-none">
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-2 col-md-2 col-sm-4 px-2 mb-2">
        <div class="card product-card price-card card-product-grid   ">
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png" alt="Product"></a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <div class="d-flex justify-content-between">
            </div>
            <hr class="d-sm-none">
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-2 col-md-2 col-sm-2 px-2 mb-2">
        <div class="card product-card price-card card-product-grid   ">
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/19295a75-6cbe-4681-9807-df1925582601/teaser.png" alt="Product"></a>
          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <div class="d-flex justify-content-between">
            </div>
            <hr class="d-sm-none">
          </div>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg-2 col-md-2 col-sm-2 px-2 mb-2">
        <div class="card product-card price-card card-product-grid   ">
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/30deb877-953c-4ded-84d9-5276a7b874cd/teaser.png" alt="Product"></a>
          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <div class="d-flex justify-content-between">
            </div>
            <hr class="d-sm-none">
          </div>
        </div>
      </div>
      <!-- Product-->
    </div>
  </section>

  <!-- Featured products (Carousel)-->
  <section class="container pb-5 mb-lg-3 position-relative " id="" style="z-index: 10;">
    <div class="card px-lg-2  ">
      <div class="card-body px-4 pt-3 pb-3 " id="#dynamic_content">
        <h2 class="h3 text-center">Discover featured products</h2>
        <p class="text-muted text-center">Every week we hand-pick some of the best items from our collection</p>
        <!-- Carousel-->
        <div class="cz-carousel pt-4">
          <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 15, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
            <!-- Product-->
            <div class="col-xl-3 col-lg-2 col-md-4 col-6">
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="czi-thumb-up"></i></button>
                  <div class="product-card-actions">
                  </div>
                  <a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/73001380-3512-45db-8a8e-2e4c70065b3a/preview.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                    </div>
                  </div>
                  <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Floating Phone and Tablet Mockup (PSD)</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="col-xl-3 col-lg-2 col-md-4 col-6">
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="czi-thumb-up"></i></button>
                  <div class="product-card-actions">
                  </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/5eb6cba2-25f2-4947-ae4b-b26c135e7d3e/preview.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                  <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Project Devices Showcase (PSD)</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>

            <!-- Product-->
            <div class="col-xl-3 col-lg-2 col-md-4 col-6">
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="czi-thumb-up"></i></button>
                  <div class="product-card-actions">
                  </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/49a9b01a-3b10-4a7a-97cc-9da246be1c02/preview.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                    </div>
                  </div>
                  <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Business Card Branding Mockup</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="col-xl-3 col-lg-2 col-md-4 col-6">
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="czi-thumb-up"></i></button>
                  <div class="product-card-actions">
                  </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/d4a21c16-6c9e-40de-9cab-2815f8749a97/banner.png" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                  </div>
                  <h3 class="product-title font-size-sm mb-2"><a href="marketplace-single">Gravity Device Mockups (PSD)</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
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
  <section class="container pb-5 mb-lg-3 ">
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
    <div class="row row-sm">

      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-4">
        <div class="card product-card  ">
          <button class="btn-wishlist btn-lg" type="button" data-toggle="tooltip" data-placement="left" title="12"><i class="fas fa-thumbs-up"></i>
          </button><a class="card-img-top d-block overflow-hidden " href="marketplace-single">
            <img class="img-wrap" src="https://assets.materialup.com/uploads/73001380-3512-45db-8a8e-2e4c70065b3a/preview.jpg" alt="Product"></a>
          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <h3 class="product-title font-size-sm"><a href="marketplace-single">Square Style Mobile UI Kit (Sketch)</a></h3>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="text-accent">$16.<small>00</small></span></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
          </div>
        </div>
        <hr class="d-sm-none">
      </div>


      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-4">
        <div class="card product-card  ">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="12"><i class="czi-thumb-up"></i>
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/dcb86b42-3f31-48cc-9e62-8b2dbb858eec/teaser.png" alt="Product"></a>
          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <h3 class="product-title font-size-sm"><a href="marketplace-single">Square Style Mobile UI Kit (Sketch)</a></h3>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="text-accent">$18.<small>00</small></span></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
          </div>
        </div>
        <hr class="d-sm-none">
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-4">
        <div class="card product-card ">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="12"><i class="czi-thumb-up"></i>
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/17e6fc46-935c-4c53-b270-dfb7af8e5716/teaser.png" alt="Product"></a>
          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <h3 class="product-title font-size-sm"><a href="marketplace-single">Square Style Mobile UI Kit (Sketch)</a></h3>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="text-accent">$13.<small>00</small></span></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
          </div>
        </div>
        <hr class="d-sm-none">
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2  mb-grid-gutter">
        <div class="card product-card ">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="12"><i class="czi-thumb-up"></i>
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/57218c12-abf2-4659-a1f7-d837e5141a05/teaser.png" alt="Product"></a>
          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">by Createx Std.</a>
            <h3 class="product-title font-size-sm"><a href="marketplace-single">Square Style Mobile UI Kit (Sketch)</a></h3>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="text-accent">$15.<small>00</small></span></div>
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div>
            </div>
          </div>
        </div>
        <hr class="d-sm-none">
      </div>
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2  mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/17e6fc46-935c-4c53-b270-dfb7af8e5716/teaser.png" alt="Product">
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
      <div class="col-lg-3 col-md-3 col-sm-6 px-2  mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/57218c12-abf2-4659-a1f7-d837e5141a05/teaser.png" alt="Product">
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
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/b20c170b-2141-411d-a1f8-728d36863cc1/teaser.png" alt="Product">
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
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/cdeb4f01-9a5f-4e1a-8e7f-77d46d6c0a9d/teaser.png" alt="Product">
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
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/3f188a17-5aae-48aa-9405-9e125240460b/teaser.png" alt="Product">
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
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/bf861a3c-80e9-41bd-bd49-cf8ad8930b26/teaser.png" alt="Product">
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
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/0b07b590-2362-4661-afc1-0ef195f99818/teaser.png" alt="Product">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/3bcbd2a4-6f17-4286-8ab4-46ccde02b89a/teaser.png" alt="Product">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/c82e399b-5c21-4736-b531-0ca249f8885f/teaser.png" alt="Product">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/239113df-2cb2-4bbc-8495-8d40b63f538e/teaser.png" alt="Product">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2  mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/c7b0508e-92fb-4ee9-9b41-7e33d5d10fbe/teaser.png" alt="Product">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2  mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/58891ee5-fa2e-4833-af86-bde7c644344d/teaser.png" alt="Product">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2  mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/74187521-48d1-4aec-b2e1-4bf72bff0be4/teaser.png" alt="Product">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2  mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/b30dfaae-8fcd-432b-a0c0-b4538251f8f5/teaser.png" alt="Product">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2  mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/aeca9fd9-86d9-41cc-9156-faa6447d69e4/teaser.png" alt="Product">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-3 col-sm-6 px-2  mb-grid-gutter">
        <div class="card product-card-alt">
          <div class="product-thumb">
            <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
            <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="marketplace-single"><i class="czi-eye"></i></a>
              <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
            </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/25657e5b-6223-4f66-a4aa-9f346adf90f3/teaser.png" alt="Product">
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
  <?php if (isset($_SESSION['user_id'])) { ?>
    <section class="border-top py-5">
      <div class="container py-lg-2">
        <h2 class="h3 mb-3 pb-3 pb-lg-4 text-center">Seller of the month</h2>
        <div class="row">
          <div class="col-lg-4 text-center text-lg-left pb-3 pt-lg-2">
            <div class="d-inline-block text-left">
              <div class="media media-ie-fix align-items-center pb-3">
                <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img class="rounded-circle" src="img/marketplace/account/avatar.png" alt="<?php echo $_SESSION['fname']; ?>"></div>
                <div class="media-body pl-3">
                  <h3 class="font-size-lg mb-0"><?php echo strtoupper($_SESSION['username']); ?></h3><span class="d-block text-muted font-size-ms pt-1 pb-2">Member since November 2017</span><a class="btn btn-primary btn-sm" href="marketplace-vendor">View products</a>
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
                      </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/68fac91a-252f-4b67-89c6-96bae3a64da7/teaser.png" alt="Product">
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
                      </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/655dcd9a-e874-4252-a1bf-a42538e8452b/teaser.png" alt="Product">
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
                      </div><a class="product-thumb-overlay" href="marketplace-single"></a><img src="https://assets.materialup.com/uploads/ab214174-5cb6-449f-84ab-94492d2410ba/teaser.png" alt="Product">
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
  <?php }; ?>
  <!-- Marketplace features-->
  <?php if (!isset($_SESSION['user_id'])) { ?>
    <section class="bg-primary bg-size-cover bg-position-center pt-5 pb-4 pb-lg-5" style="background-image: url(img/marketplace/features/features-bg.jpg);">
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
  <?php }; ?>
  <!-- Blog posts carousel-->
  <section class="py-5">
    <div class="container py-lg-3">
      <h2 class="h3 text-center">Top Category</h2>
      <p class="text-muted text-center mb-3 pb-4">Every week we hand-pick some of the best items from our collection</p>
      <div class="cz-carousel">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 15, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
          <div>
            <div class="card"><a class="blog-entry-thumb" href="blog-single"><img class="card-img-top" src="https://assets.materialup.com/uploads/24146280-61de-4d7d-8378-83b9942e284c/teaser.png" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single">We start selling WordPress themes soon</a></h2>
              </div>
            </div>
          </div>
          <div>
            <div class="card"><a class="blog-entry-thumb" href="blog-single"><img class="card-img-top" src="https://assets.materialup.com/uploads/5fdd2af4-b305-433b-a95d-6839d4d4d70a/teaser.png" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single">Shoot like a pro. Tips &amp; tricks</a></h2>
              </div>
            </div>
          </div>
          <div>
            <div class="card"><a class="blog-entry-thumb" href="blog-single"><img class="card-img-top" src="https://assets.materialup.com/uploads/5fdd2af4-b305-433b-a95d-6839d4d4d70a/teaser.png" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single">Shoot like a pro. Tips &amp; tricks</a></h2>
              </div>
            </div>
          </div>
          <div>
            <div class="card"><a class="blog-entry-thumb" href="blog-single"><img class="card-img-top" src="https://assets.materialup.com/uploads/5fdd2af4-b305-433b-a95d-6839d4d4d70a/teaser.png" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single">Shoot like a pro. Tips &amp; tricks</a></h2>
              </div>
            </div>
          </div>
          <div>
            <div class="card"><a class="blog-entry-thumb" href="blog-single"><img class="card-img-top" src="https://assets.materialup.com/uploads/905eea36-b704-45de-82da-de7e9caa8e75/teaser.png" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single">Designing engaging mobile experiences</a></h2>
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
<!-- <a href="https://pokslide.com/page/login" class="btn btn rounded-pill" style="z-index:100; position: fixed; bottom:1px; left:1px;"><img width="50px"  src="img/pikslide-logo-2.png" alt="Cartzilla" /></a> -->

  <?php include('main-page/footer-page.php'); ?>
  <!-- Toolbar for handheld devices-->
  <?php include('main-page/phone-devices.php'); ?>
  <!-- Vendor scrits: js libraries and plugins-->
  <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <!-- Main theme script-->
  <script src="js/theme.min.js"></script>
<script src="script/index.js"></script>
  <script>
    $('#myModal').on('shown.bs.modal', function() {
      $('#myInput').trigger('focus')
    });
  </script>
</body>

</html>