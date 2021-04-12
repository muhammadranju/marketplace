<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cartzilla | Marketplace category
  </title>
  <link rel="stylesheet" href="css/theme.min.css" type="text/css">
  <?php include('links-page/links-page.php'); ?>
  <style>
    body {
      background-color: #F4F6F9;
    }
  </style>
</head>

<body class="toolbar-enabled">
  <?php include('main-page/header-page.php'); ?>
  <div class="bg- pt-4 pb-5">
    <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
      <div class="d-lg-flex justify-content-between pb-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="/">Market</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Inside category</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-dark mb-0">Marketplace category</h1>
        </div>
      </div>
    </div>
  </div>
  <?php include('model-page.php'); ?>
  <!-- Page Content-->
  <div class="container pb-5 mb-2 mb-md-4">
    <!-- Toolbar-->
    <div class="bg-light  rounded-lg mt-n5 mb-4">
      <div class="d-flex align-items-center pl-2">
        <!-- Search-->
        <div class="input-group-overlay">
          <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
          <input class="form-control prepended-form-control border-0 box-shadow-0" type="text" placeholder="Search in this category...">
        </div>
        <!-- Sort-->
        <div class="d-flex align-items-center">
          <div class="dropdown py-4 border-left"><a class="nav-link-style font-size-md font-weight-medium dropdown-toggle p-4" href="#" data-toggle="dropdown"><span class="d-inline-block py-1"><i class="czi-thumb-up align-middle opacity-60 mt-n1 mr-2"></i>Popular</span></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="#"><i class="czi-flag mr-2 opacity-60"></i>Newest</a></li>
              <li><a class="dropdown-item" href="#"><i class="czi-rocket mr-2 opacity-60"></i>Bestsellers</a></li>
              <li><a class="dropdown-item" href="#"><i class="czi-loading mr-2 opacity-60"></i>Updated</a></li>
              <li><a class="dropdown-item" href="#"><i class="czi-arrow-down mr-2 opacity-60"></i>Low Price</a></li>
              <li><a class="dropdown-item" href="#"><i class="czi-arrow-up mr-2 opacity-60"></i>High Price</a></li>
            </ul>
          </div>
        </div>
        <!-- Pagination-->
        <div class="d-none d-md-flex align-items-center border-left pl-4"><span class="font-size-md text-nowrap mr-4">Pages&nbsp; 1 / 5</span><a class="nav-link-style p-4 border-left" href="#"><span class="d-inline-block py-1"><i class="czi-arrow-left"></i></span></a><a class="nav-link-style p-4 border-left" href="#"><span class="d-inline-block py-1"><i class="czi-arrow-right"></i></span></a></div>
      </div>
    </div>
    <!-- Products grid-->
    <div class="row pt-3 mx-n2">
      <!-- Product-->
      <div class="col-lg-3 col-md-2 col-sm-6 px-2 mb-4 ">
        <div class="card product-card  rounded   ">
          <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="12"><i class="czi-thumb-up"></i>
          </button><a class="card-img-top d-block overflow-hidden" href="marketplace-single">
            <img src="https://assets.materialup.com/uploads/73001380-3512-45db-8a8e-2e4c70065b3a/preview.jpg" alt="Product"></a>
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
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
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
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
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
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
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
      <!-- Product-->
      <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
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
    <hr class="my-3">
    <!-- Pagination-->
    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#"><i class="czi-arrow-left mr-2"></i>Prev</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
        <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="sr-only">(current)</span></span></li>
        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
      </ul>
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="czi-arrow-right ml-2"></i></a></li>
      </ul>
    </nav>
  </div>
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
  <?php include('main-page/footer-page.php'); ?>

  <?php include('main-page/phone-devices.php'); ?>
  <!-- Footer-->
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