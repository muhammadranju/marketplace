<?php 
if(session_status()==PHP_SESSION_NONE){
  session_start();
  }
?>
<?php if(!isset($_SESSION['user_id'])){
   ?>
   <script>
      window.location.href = "/";
   </script>
   <?php
 } 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cartzilla | Favorites
  </title>
    <?php include('links-page/links-page.php') ; ?>
    <style>
    body {
      background-color: #F4F6F9;
    }
  </style>
</head>
<!-- Body-->

<body class="toolbar-enabled">
  <?php include("main-page/header-page.php"); ?>
  <?php include('main-page/sell-page.php') ; ?>
  <div class="container mb-5 pb-3">
    <div class="bg-light box-shado-lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <?php include('main-page/aside-page.php'); ?>
        <!-- Content-->
        <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
            <h2 class="h3 pt-2 pb-4 mb-0 text-center text-sm-left border-bottom">Favorites<span class="badge badge-secondary font-size-sm text-body align-middle ml-2">4</span></h2>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th02.jpg" alt="Product"><span class="close-floating" data-toggle="tooltip" title="Remove from Favorites"><i class="czi-close"></i></span></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">UI Isometric Devices Pack (PSD)</a></h3>
                <div class="d-inline-block text-accent">$23.<small>00</small></div><a class="d-inline-block text-accent font-size-ms border-left ml-2 pl-2" href="marketplace-vendor">by uidesigner</a>
                <div class="form-inline pt-2">
                  <select class="custom-select custom-select-sm my-1 mr-2">
                    <option>Standard license</option>
                    <option>Extended license</option>
                  </select>
                  <button class="btn btn-primary btn-sm mx-auto mx-sm-0 my-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart mr-1"></i>Add to Cart</button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th06.jpg" alt="Product"><span class="close-floating" data-toggle="tooltip" title="Remove from Favorites"><i class="czi-close"></i></span></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Project Devices Showcase (PSD)</a></h3>
                <div class="d-inline-block text-accent">$18.<small>00</small></div><a class="d-inline-block text-accent font-size-ms border-left ml-2 pl-2" href="marketplace-vendor">by pixels</a>
                <div class="form-inline pt-2">
                  <select class="custom-select custom-select-sm my-1 mr-2">
                    <option>Standard license</option>
                    <option>Extended license</option>
                  </select>
                  <button class="btn btn-primary btn-sm mx-auto mx-sm-0 my-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart mr-1"></i>Add to Cart</button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th01.jpg" alt="Product"><span class="close-floating" data-toggle="tooltip" title="Remove from Favorites"><i class="czi-close"></i></span></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Top View Smartwatch 3D Render</a></h3>
                <div class="d-inline-block text-accent">$19.<small>00</small></div><a class="d-inline-block text-accent font-size-ms border-left ml-2 pl-2" href="marketplace-vendor">by modello</a>
                <div class="form-inline pt-2">
                  <select class="custom-select custom-select-sm my-1 mr-2" >
                    <option>Standard license</option>
                    <option>Extended license</option>
                  </select>
                  <button class="btn btn-primary btn-sm mx-auto mx-sm-0 my-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart mr-1"></i>Add to Cart</button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center pt-4 pb-2"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th07.jpg" alt="Product"><span class="close-floating" data-toggle="tooltip" title="Remove from Favorites"><i class="czi-close"></i></span></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Gravity Devices UI Mockup (PSD)</a></h3>
                <div class="d-inline-block text-accent">$15.<small>00</small></div><a class="d-inline-block text-accent font-size-ms border-left ml-2 pl-2" href="marketplace-vendor">by pixels</a>
                <div class="form-inline pt-2">
                  <select class="custom-select custom-select-sm my-1 mr-2">
                    <option>Standard license</option>
                    <option>Extended license</option>
                  </select>
                  <button class="btn btn-primary btn-sm mx-auto mx-sm-0 my-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart mr-1"></i>Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Toast: Added to Cart-->
  <div class="toast-container toast-bottom-center">
    <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header bg-primary text-white"><i class="czi-check-circle mr-2"></i>
        <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
        <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="toast-body">This item has been added to your cart.</div>
    </div>
  </div>
  <!-- Footer-->
  <?php include('main-page/footer-page.php'); ?>
  <!-- Footer-->

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
</body>
</html>