<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cartzilla | Vendor Page
  </title>

  <link rel="stylesheet" href="css/theme.min.css" type="text/css">
  <?php include('links-page/links-page.php'); ?>
  <style>
    body {
      background-color: #F4F6F9;
    }
  </style>
</head>
<?php include('main-page/header-page.php'); ?>
<!-- Body-->
<?php include('model-page.php'); ?>

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

  <!-- Page title-->
  <!-- Page Content-->
  <!-- Header-->
  <?php include('main-page/sell-page.php'); ?>
  <div class="container mb-5 pb-3">
    <div class="bg-light box--lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4">
          <div class="cz-sidebar-static h-100 -right">
            <h6>About</h6>
            <p class="font-size-ms text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium viras doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <hr class="my-4">
            <h6>Contacts</h6>
            <ul class="list-unstyled font-size-sm">
              <li><a class="nav-link-style d-flex align-items-center" href="mailto:contact@example.com"><i class="czi-mail opacity-60 mr-2"></i>contact@pikslide.com</a></li>
              <li><a class="nav-link-style d-flex align-items-center" href="/"><i class="czi-globe opacity-60 mr-2"></i>www.pikslde.com</a></li>
            </ul><a class="social-btn sb-facebook sb-outline sb-sm mr-2 mb-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-instagram sb-outline sb-sm mr-2 mb-2" href="#"><i class="czi-instagram"></i></a><a class="social-btn sb-twitter sb-outline sb-sm mr-2 mb-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-dribbble sb-outline sb-sm mr-2 mb-2" href="#"><i class="czi-dribbble"></i></a><a class="social-btn sb-behance sb-outline sb-sm mr-2 mb-2" href="#"><i class="czi-behance"></i></a>
            <hr class="my-4">

            <label  class=" text-accent"><i class="fas fa-medal  fa-3x"></i></label>
            <i class="fas fa-award text-info fa-3x"></i>
            <i class="fab fa-adn text-success fa-3x"></i>
            <i class="fas fa-camera text-primary  fa-3x"></i>
            <i class="fas fa-radiation text-danger fa-3x"></i>
            <i class="fas fa-clipboard-check text-info fa-3x"></i>

            <h6 class="pb-1">Send message</h6>
            <form class="needs-validation pb-2" method="post" novalidate>
              <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Your message" required></textarea>
                <div class="invalid-feedback">Please wirte your message!</div>
              </div>
              <button class="btn btn-primary btn-sm btn-block" type="submit">Send</button>
            </form>
          </div>
        </aside>
        <!-- Content-->
        <section class="col-lg-8 pt-lg-4 pb-md-4">
          <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
            <h2 class="h3 pt-2 pb-4 mb-4 text-center text-sm-left border-bottom">Products<span class="badge badge-secondary font-size-sm text-body align-middle ml-2">6</span></h2>
            <div class="row pt-2">

              <!-- Product-->
              <div class="col-sm-3 mb-grid-gutter">
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="12"><i class="czi-thumb-up"></i></button>
                    <div class="product-card-actions">
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
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-2 col-sm-6 px-2 mb-4 ">
                <div class="card product-card border rounded   ">
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
              <div class="col-sm-3 mb-grid-gutter">
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-thumb-up"></i></button>
                    <div class="product-card-actions">
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
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="col-sm-3 mb-grid-gutter">
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-thumb-up"></i></button>
                    <div class="product-card-actions">
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
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="col-sm-3 mb-grid-gutter">
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-thumb-up"></i></button>
                    <div class="product-card-actions">
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
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="col-sm-3 mb-grid-gutter">
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-thumb-up"></i></button>
                    <div class="product-card-actions">
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
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="col-sm-3 mb-grid-gutter">
                <div class="card product-card-alt">
                  <div class="product-thumb">
                    <button class="btn-wishlist btn-sm" type="button"><i class="czi-thumb-up"></i></button>
                    <div class="product-card-actions">
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <nav aria-label="..." class=" float-right">
              <ul class="pagination">
                <li class="page-item disabled">
                  <span class="page-link">Prev</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
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
  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
</body>

</html>