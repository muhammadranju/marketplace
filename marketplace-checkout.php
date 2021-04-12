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
  <title>Cartzilla | Checkout
  </title>
  <?php include('links-page/links-page.php'); ?>
  <style>
    body {
      background-color: #F4F6F9;
    }
  </style>
</head>

<body class="toolbar-enabled">
  <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
  <?php include('main-page/header-page.php'); ?>
  <!-- Page title-->
  <!-- Page Title-->
  <div class="page-title-overlap pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a class="text-nowrap" href="index"><i class="czi-home"></i>Home</a></li>
            <li class="breadcrumb-item text-nowrap"><a href="marketplace-category">Market</a>
            </li>
            <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
          </ol>
        </nav>
      </div>
      <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
        <h1 class="h3 text-dark mb-0">Checkout</h1>
      </div>
    </div>
  </div>
  <!-- Page Content-->
  <div class="container mb-5 pb-3">
    <div class="bg-light box-lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Content-->
        <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 pr-lg-0 pl-xl-5">
            <!-- Title-->
            <h2 class="h6 border-bottom pb-3 mb-3">Billing details</h2>
            <!-- Billing detail-->
            <div class="row pb-4">
              <div class="col-sm-6 form-group">
                <label for="mc-fn">First name <span class='text-danger'>*</span></label>
                <input class="form-control" type="text" value="Jonathan" id="mc-fn">
              </div>
              <div class="col-sm-6 form-group">
                <label for="mc-ln">Last name <span class='text-danger'>*</span></label>
                <input class="form-control" type="text" value="Doe" id="mc-ln">
              </div>
              <div class="col-12 form-group">
                <label for="mc-email">Email address <span class='text-danger'>*</span></label>
                <input class="form-control" type="email" value="contact@createx.studio" id="mc-email">
              </div>
              <div class="col-sm-6 form-group">
                <label for="mc-company">Company</label>
                <input class="form-control" type="text" value="Createx Studio" id="mc-company">
              </div>
              <div class="col-sm-6 form-group">
                <label for="mc-country">Country <span class='text-danger'>*</span></label>
                <select class="custom-select" id="mc-country">
                  <option value>Select country</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Belgium">Belgium</option>
                  <option value="France">France</option>
                  <option value="Germany">Germany</option>
                  <option value="Madagascar" selected>Madagascar</option>
                  <option value="Spain">Spain</option>
                  <option value="UK">United Kingdom</option>
                  <option value="USA">USA</option>
                </select>
              </div>
            </div>
            <!-- Order preview on mobile (screens small than 991px)-->
            <div class="widget mb-3 d-lg-none">
              <h2 class="widget-title">Order summary</h2>
              <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="marketplace-single"><img class="rounded-sm" width="64" src="img/marketplace/products/widget/01.jpg" alt="Product" /></a>
                <div class="media-body pl-1">
                  <h6 class="widget-product-title"><a href="marketplace-single">UI Isometric Devices Pack</a></h6>
                  <div class="widget-product-meta"><span class="text-accent border-right pr-2 mr-2">$23.<small>99</small></span><span class="font-size-xs text-muted">Standard license</span></div>
                </div>
              </div>
              <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="marketplace-single"><img class="rounded-sm" width="64" src="img/marketplace/products/widget/02.jpg" alt="Product" /></a>
                <div class="media-body pl-1">
                  <h6 class="widget-product-title"><a href="marketplace-single">Project Devices Showcase</a></h6>
                  <div class="widget-product-meta"><span class="text-accent border-right pr-2 mr-2">$18.<small>99</small></span><span class="font-size-xs text-muted">Standard license</span></div>
                </div>
              </div>
              <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="marketplace-single"><img class="rounded-sm" width="64" src="img/marketplace/products/widget/03.jpg" alt="Product" /></a>
                <div class="media-body pl-1">
                  <h6 class="widget-product-title"><a href="marketplace-single">Gravity Devices UI Mockup</a></h6>
                  <div class="widget-product-meta"><span class="text-accent border-right pr-2 mr-2">$15.<small>99</small></span><span class="font-size-xs text-muted">Standard license</span></div>
                </div>
              </div>
              <ul class="list-unstyled font-size-sm py-3">
                <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">$58.<small>97</small></span></li>
                <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Taxes:</span><span class="text-right">$10.<small>45</small></span></li>
                <li class="d-flex justify-content-between align-items-center font-size-base"><span class="mr-2">Total:</span><span class="text-right">$69.<small>42</small></span></li>
              </ul>
            </div>
            <!-- Payment methods accordion-->
            <div class="accordion mb-2" id="payment-method" role="tablist">
              <div class="card">
                <div class="card-header" role="tab">
                  <h3 class="accordion-heading"><a href="#card" data-toggle="collapse"><i class="czi-card font-size-lg mr-2 mt-n1 align-middle"></i>Pay with Credit Card<span class="accordion-indicator"></span></a></h3>
                </div>
                <div class="collapse show" id="card" data-parent="#payment-method" role="tabpanel">
                  <div class="card-body">
                    <p class="font-size-sm">We accept following credit cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="img/cards.png" style="width: 187px;" alt="Cerdit Cards"></p>
                    <div class="card-wrapper"></div>
                    <form class="interactive-credit-card row">
                      <div class="form-group col-sm-6">
                        <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                      </div>
                      <div class="form-group col-sm-3">
                        <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                      </div>
                      <div class="form-group col-sm-3">
                        <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                      </div>
                      <div class="col-sm-6">
                        <button class="btn btn-primary btn-block mt-0 btn-shadow" type="submit">Place order</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h3 class="accordion-heading"><a class="collapsed" href="#paypal" data-toggle="collapse"><i class="czi-paypal mr-2 align-middle"></i>Pay with PayPal<span class="accordion-indicator"></span></a></h3>
                </div>
                <div class="collapse" id="paypal" data-parent="#payment-method" role="tabpanel">
                  <div class="card-body font-size-sm">
                    <p><span class='font-weight-medium'>PayPal</span> - the safer, easier way to pay</p>
                    <button class="btn btn-primary btn-shadow" type="button">Checkout with PayPal</button>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h3 class="accordion-heading"><a class="collapsed" href="#points" data-toggle="collapse"><i class="czi-money-bag mr-2"></i>Pay with my account balance<span class="accordion-indicator"></span></a></h3>
                </div>
                <div class="collapse" id="points" data-parent="#payment-method" role="tabpanel">
                  <div class="card-body">
                    <p>You currently have<span class="font-weight-medium">&nbsp;$1,375.<small>00</small></span>&nbsp;on your account balance.</p>
                    <button class="btn btn-primary mt-0" type="submit">Pay with account balance</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Sidebar-->
        <!-- Order preview on desktop (screens larger than 991px)-->
        <aside class="col-lg-4 d-none d-lg-block">
          <hr class="d-lg-none">
          <div class="cz-sidebar-static h-100 ml-auto border-left">
            <div class="widget mb-3">
              <h2 class="widget-title text-center">Order summary</h2>
              <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="marketplace-single"><img class="rounded-sm" width="64" src="img/marketplace/products/widget/01.jpg" alt="Product" /></a>
                <div class="media-body pl-1">
                  <h6 class="widget-product-title"><a href="marketplace-single">UI Isometric Devices Pack</a></h6>
                  <div class="widget-product-meta"><span class="text-accent border-right pr-2 mr-2">$23.<small>00</small></span><span class="font-size-xs text-muted">Standard license</span></div>
                </div>
              </div>
              <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="marketplace-single"><img class="rounded-sm" width="64" src="img/marketplace/products/widget/02.jpg" alt="Product" /></a>
                <div class="media-body pl-1">
                  <h6 class="widget-product-title"><a href="marketplace-single">Project Devices Showcase</a></h6>
                  <div class="widget-product-meta"><span class="text-accent border-right pr-2 mr-2">$18.<small>00</small></span><span class="font-size-xs text-muted">Standard license</span></div>
                </div>
              </div>
              <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="marketplace-single"><img class="rounded-sm" width="64" src="img/marketplace/products/widget/03.jpg" alt="Product" /></a>
                <div class="media-body pl-1">
                  <h6 class="widget-product-title"><a href="marketplace-single">Gravity Devices UI Mockup</a></h6>
                  <div class="widget-product-meta"><span class="text-accent border-right pr-2 mr-2">$15.<small>00</small></span><span class="font-size-xs text-muted">Standard license</span></div>
                </div>
              </div>
              <ul class="list-unstyled font-size-sm pt-3 pb-2 border-bottom">
                <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">$56.<small>00</small></span></li>
                <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Taxes:</span><span class="text-right">$9.<small>30</small></span></li>
              </ul>
              <h3 class="font-weight-normal text-center my-4">$65.<small>30</small></h3>
            </div>
          </div>
        </aside>
      </div>
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