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
  <title>Cartzilla | Purchases
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
  <!-- Quick View Modal-->
  <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="card-body">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Product gallery-->
            <div><img src="https://assets.materialup.com/uploads/73001380-3512-45db-8a8e-2e4c70065b3a/preview.jpg" width="100%" height="100%" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('main-page/header-page.php'); ?>
  <?php include('main-page/sell-page.php') ; ?>
  <div class="container mb-5 pb-3">
    <div class="bg-light  rounded-lg overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <?php include('main-page/aside-page.php'); ?>
        <!-- Content-->
        <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
            <!-- Title-->
            <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
              <h2 class="h3 py-2 mr-2 text-center text-sm-left">Your purchases</h2>
              <div class="py-2">
                <div class="form-inline flex-nowrap pb-3">
                  <label class="text-nowrap mr-2" for="sorting">Sort by:</label>
                  <select class="custom-select custom-select-sm mr-2" id="sorting">
                    <option>Date Purchased</option>
                    <option>Product Name</option>
                    <option>Price</option>
                    <option>Your Rating</option>
                    <option>Updates</option>
                  </select>
                  <button class="btn btn-outline-secondary btn-sm px-2" type="button"><i class="czi-arrow-up"></i></button>
                </div>
              </div>
            </div>
            <!-- Products list-->
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="#quick-view" data-toggle="modal" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th01.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Top View Smartwatch 3D Render</a></h3>
                <div class="text-accent font-size-sm mb-1">Standard license</div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="update-info-1" checked>
                  <label class="custom-control-label font-size-ms" for="update-info-1">Notify me when this product is updated</label>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-sm-start pt-2">
                  <div class="my-2">
                    <button class="btn btn-primary btn-sm mr-3" type="button"><i class="czi-download mr-1"></i>Download</button>
                  </div><a class="d-block text-muted text-center my-2" href="#">
                    <div class="star-rating"><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                    </div>
                    <div class="font-size-xs">Reate this product</div>
                  </a>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th02.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">UI Isometric Devices Pack (PSD)</a></h3>
                <div class="text-accent font-size-sm mb-1">Extended license</div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="update-info-2" checked>
                  <label class="custom-control-label font-size-ms" for="update-info-2">Notify me when this product is updated</label>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-sm-start pt-2">
                  <div class="my-2">
                    <button class="btn btn-primary btn-sm mr-3" type="button"><i class="czi-download mr-1"></i>Download</button>
                  </div><a class="d-block text-muted text-center my-2" href="#">
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div>
                    <div class="font-size-xs">You rated this product</div>
                  </a>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th03.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Cartzilla - Multipurpose E-Commerce Template</a></h3>
                <div class="text-accent font-size-sm mb-1">Standard license</div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="update-info-3" checked>
                  <label class="custom-control-label font-size-ms" for="update-info-3">Notify me when this product is updated</label>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-sm-start pt-2">
                  <div class="my-2">
                    <button class="btn btn-primary  btn-sm mr-3" type="button"><i class="czi-download mr-1"></i>Download</button>
                  </div><a class="d-block text-muted text-center my-2" href="#">
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                    </div>
                    <div class="font-size-xs">You rated this product</div>
                  </a>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th04.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Hardcover Book Catalog Mockup (PSD)</a></h3>
                <div class="text-accent font-size-sm mb-1">Standard license</div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="update-info-4">
                  <label class="custom-control-label font-size-ms" for="update-info-4">Notify me when this product is updated</label>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-sm-start pt-2">
                  <div class="my-2">
                    <button class="btn btn-primary btn-sm mr-3" type="button"><i class="czi-download mr-1"></i>Download</button>
                  </div><a class="d-block text-muted text-center my-2" href="#">
                    <div class="star-rating"><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                    </div>
                    <div class="font-size-xs">Reate this product</div>
                  </a>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom"><a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single" style="width: 12.5rem;"><img class="rounded-lg" src="img/marketplace/products/th05.jpg" alt="Product"></a>
              <div class="media-body text-center text-sm-left">
                <h3 class="h6 product-title mb-2"><a href="marketplace-single">Photo of Business Meeting</a></h3>
                <div class="text-accent font-size-sm mb-1">Standard license</div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="update-info-5">
                  <label class="custom-control-label font-size-ms" for="update-info-5">Notify me when this product is updated</label>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-sm-start pt-2">
                  <div class="my-2">
                    <button class="btn btn-primary btn-sm mr-3" type="button"><i class="czi-download mr-1"></i>Download</button>
                  </div><a class="d-block text-muted text-center my-2" href="#">
                    <div class="star-rating"><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                    </div>
                    <div class="font-size-xs">Reate this product</div>
                  </a>
                </div>
              </div>
            </div>
            <!-- Pagination-->
            <nav class="d-md-flex justify-content-between align-items-center text-center text-md-left mt-4" aria-label="Page navigation">
              <div class="d-md-flex align-items-center w-100"><span class="font-size-sm text-muted mr-md-3">Showing 5 of 9 products</span>
                <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <button class="btn btn-outline-primary btn-sm" type="button">More products</button>
            </nav>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Footer-->
  <?php include('main-page/footer-page.php') ; ?>
  <!-- Footer-->
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