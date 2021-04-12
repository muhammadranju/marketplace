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
 } ?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Products
      </title>
      <?php include('links-page/links-page.php'); ?>
      <style>
    body {
      background-color: #F4F6F9;
    }
  </style>
    </head>
    <!-- Body-->
    
    <?php include('main-page/header-page.php'); ?>
    <body class="toolbar-enabled">
      <!-- Google Tag Manager (noscript)-->
      <noscript>
        <iframe src="http://www.googletagmanager.com/ns?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
  </noscript>
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

  <?php include('main-page/sell-page.php') ; ?>
  <div class="container mb-5 pb-3">
    <div class="bg-light box--lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <?php include('main-page/aside-page.php'); ?>
        <!-- Content-->
        <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
            <!-- Title-->
            <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
              <h2 class="h3 py-2 mr-2 text-center text-sm-left">Your products<span class="badge badge-secondary font-size-sm text-body align-middle ml-2">5</span></h2>
              <div class="py-2">
                <div class="form-inline flex-nowrap pb-3">
                  <label class="text-nowrap mr-2" for="sorting">Sort by:</label>
                  <select class="custom-select custom-select-sm mr-2" id="sorting">
                    <option>Date Purchased</option>
                    <option>Product Name</option>
                    <option>Price</option>
                    <option>Rating</option>
                    <option>Updates</option>
                  </select>
                  <button class="btn btn-outline-secondary btn-sm px-2" type="button"><i class="czi-arrow-up"></i></button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;">
            <img class="rounded-lg" src="img/marketplace/products/th08.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Flat-line E-Commerce Icons (AI)</a></h3>
                <div class="d-inline-block text-accent">$18.<small>00</small></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Sales: <span class="font-weight-medium">26</span></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Earnings: <span class="font-weight-medium">$327.<small>60</small></span></div>
                <div class="d-flex justify-content-center justify-content-sm-start pt-3">
                  <button class="btn bg-faded-accent btn-icon mr-2" type="button" data-toggle="tooltip" title="Download"><i class="czi-download text-accent"></i></button>
                  <button class="btn bg-faded-info btn-icon mr-2" type="button" data-toggle="tooltip" title="Edit"><i class="czi-edit text-info"></i></button>
                  <button class="btn bg-faded-danger btn-icon" type="button" data-toggle="tooltip" title="Delete"><i class="czi-trash text-danger"></i></button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;">
            <img class="rounded-lg" src="img/marketplace/products/th09.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Square Style Mobile UI Kit (Sketch)</a></h3>
                <div class="d-inline-block text-accent">$24.<small>00</small></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Sales: <span class="font-weight-medium">153</span></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Earnings: <span class="font-weight-medium">$2,570.<small>40</small></span></div>
                <div class="d-flex justify-content-center justify-content-sm-start pt-3">
                  <button class="btn bg-faded-accent btn-icon mr-2" type="button" data-toggle="tooltip" title="Download"><i class="czi-download text-accent"></i></button>
                  <button class="btn bg-faded-info btn-icon mr-2" type="button" data-toggle="tooltip" title="Edit"><i class="czi-edit text-info"></i></button>
                  <button class="btn bg-faded-danger btn-icon" type="button" data-toggle="tooltip" title="Delete"><i class="czi-trash text-danger"></i></button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;">
            <img class="rounded-lg" src="img/marketplace/products/th10.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Floating Phone and Tablet Mockup (PSD)</a></h3>
                <div class="d-inline-block text-accent">$15.<small>00</small></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Sales: <span class="font-weight-medium">109</span></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Earnings: <span class="font-weight-medium">$1,144.<small>50</small></span></div>
                <div class="d-flex justify-content-center justify-content-sm-start pt-3">
                  <button class="btn bg-faded-accent btn-icon mr-2" type="button" data-toggle="tooltip" title="Download"><i class="czi-download text-accent"></i></button>
                  <button class="btn bg-faded-info btn-icon mr-2" type="button" data-toggle="tooltip" title="Edit"><i class="czi-edit text-info"></i></button>
                  <button class="btn bg-faded-danger btn-icon" type="button" data-toggle="tooltip" title="Delete"><i class="czi-trash text-danger"></i></button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th11.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Minimal Mobile App UI Kit (Sketch)</a></h3>
                <div class="d-inline-block text-accent">$23.<small>00</small></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Sales: <span class="font-weight-medium">117</span></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Earnings: <span class="font-weight-medium">$1,883.<small>70</small></span></div>
                <div class="d-flex justify-content-center justify-content-sm-start pt-3">
                  <button class="btn bg-faded-accent btn-icon mr-2" type="button" data-toggle="tooltip" title="Download"><i class="czi-download text-accent"></i></button>
                  <button class="btn bg-faded-info btn-icon mr-2" type="button" data-toggle="tooltip" title="Edit"><i class="czi-edit text-info"></i></button>
                  <button class="btn bg-faded-danger btn-icon" type="button" data-toggle="tooltip" title="Delete"><i class="czi-trash text-danger"></i></button>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center pt-4 pb-2"><a class="d-block position-relative mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th12.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Travel &amp; Landmark Icon Pack (AI)</a></h3>
                <div class="d-inline-block text-accent">$17.<small>00</small></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Sales: <span class="font-weight-medium">21</span></div>
                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">Earnings: <span class="font-weight-medium">$249.<small>90</small></span></div>
                <div class="d-flex justify-content-center justify-content-sm-start pt-3">
                  <button class="btn bg-faded-accent btn-icon mr-2" type="button" data-toggle="tooltip" title="Download"><i class="czi-download text-accent"></i></button>
                  <button class="btn bg-faded-info btn-icon mr-2" type="button" data-toggle="tooltip" title="Edit"><i class="czi-edit text-info"></i></button>
                  <button class="btn bg-faded-danger btn-icon" type="button" data-toggle="tooltip" title="Delete"><i class="czi-trash text-danger"></i></button>
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
      <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
        <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
        <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="toast-body">This item has been added to your cart.</div>
    </div>
  </div>
  <!-- Footer-->
  <?php include('main-page/footer-page.php') ; ?>
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