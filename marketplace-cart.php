<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<?php if (!isset($_SESSION['user_id'])) {
?>
  <script>
    window.location.href = "/";
  </script>
<?php
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cartzilla | Your cart
  </title>
  <?php include('links-page/links-page.php'); ?>
  <style>
    body {
      background-color: #F4F6F9;
    }
  </style>
</head>
<!-- Body-->

<body class="toolbar-enabled">
  <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->

  <!-- Page Title-->
  <?php include('main-page/header-page.php'); ?>
  <div class="page-title-overlap  pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a class="text-nowrap" href="index"><i class="czi-home"></i>Home</a></li>
            <li class="breadcrumb-item text-nowrap"><a href="marketplace-category">Market</a>
            </li>
            <li class="breadcrumb-item text-nowrap active" aria-current="page">Cart</li>
          </ol>
        </nav>
      </div>
      <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
        <h1 class="h3 text-dark mb-0">Your cart</h1>
      </div>
    </div>
  </div>
  <!-- Page Content-->
  <div class="container mb-5 pb-3">
    <div class="bg-light box--lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Content-->
        <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 pr-lg-0 pl-xl-5">
            <!-- Header-->
            <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom pb-3">
              <div class="py-1"><a class="btn btn-outline-accent btn-sm" href="marketplace-category"><i class="czi-arrow-left mr-1 ml-n1"></i>Back to shopping</a></div>
              <div class="d-none d-sm-block py-1 font-size-ms">You have 3 products in your cart</div>
              <div class="py-1"><a class="btn btn-outline-danger btn-sm" href="marketplace-category"><i class="czi-close font-size-xs mr-1 ml-n1"></i>Clear cart</a></div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th02.jpg" alt="Product"><span class="close-floating" data-toggle="tooltip" title="Remove from Cart"><i class="czi-close"></i></span></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">UI Isometric Devices Pack (PSD)</a></h3>
                <div class="d-inline-block text-accent">$23.<small>00</small></div><a class="d-inline-block text-accent font-size-ms border-left ml-2 pl-2" href="#">by uidesigner</a>
                <div class="form-inline pt-2">
                  <select class="custom-select custom-select-sm my-1 mr-2">
                    <option>Standard license</option>
                    <option>Extended license</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th06.jpg" alt="Product"><span class="close-floating" data-toggle="tooltip" title="Remove from Cart"><i class="czi-close"></i></span></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Project Devices Showcase (PSD)</a></h3>
                <div class="d-inline-block text-accent">$18.<small>00</small></div><a class="d-inline-block text-accent font-size-ms border-left ml-2 pl-2" href="#">by pixels</a>
                <div class="form-inline pt-2">
                  <select class="custom-select custom-select-sm my-1 mr-2">
                    <option>Standard license</option>
                    <option>Extended license</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center pt-4 pb-2"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th07.jpg" alt="Product"><span class="close-floating" data-toggle="tooltip" title="Remove from Cart"><i class="czi-close"></i></span></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Gravity Devices UI Mockup (PSD)</a></h3>
                <div class="d-inline-block text-accent">$15.<small>00</small></div><a class="d-inline-block text-accent font-size-ms border-left ml-2 pl-2" href="#">by pixels</a>
                <div class="form-inline pt-2">
                  <select class="custom-select custom-select-sm my-1 mr-2">
                    <option>Standard license</option>
                    <option>Extended license</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4">
          <hr class="d-lg-none">
          <div class="cz-sidebar-static h-100 ml-auto border-left">
            <div class="text-center mb-4 pb-3 border-bottom">
              <h2 class="h6 mb-3 pb-1">Cart total</h2>
              <h3 class="font-weight-normal">$56.<small>00</small></h3>
            </div>
            <div class="text-center mb-4 pb-3 border-bottom">
              <h2 class="h6 mb-3 pb-1">Promo code</h2>
              <form class="needs-validation pb-2" method="post" novalidate>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Promo code" required>
                  <div class="invalid-feedback">Please provide promo code.</div>
                </div>
                <button class="btn btn-secondary btn-block" type="submit">Apply promo code</button>
              </form>
            </div><a class="btn btn-primary btn-shadow btn-block mt-4" href="marketplace-checkout"><i class="czi-locked font-size-lg mr-2"></i>Secure Checkout</a>
            <div class="text-center pt-2"><small class="text-form text-muted">100% money back guarantee</small></div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <!-- Footer-->
  <?php include('main-page/footer-page.php'); ?>
  <!-- Footer-->
  <?php include('main-page/phone-devices.php'); ?>
  <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="js/theme.min.js"></script>
</body>

</html>