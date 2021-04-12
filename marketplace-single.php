<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cartzilla | Isometric Device Mockups Bundle
  </title>
  <link rel="stylesheet" href="css/theme.min.css" type="text/css">
 
  <?php include('links-page/links-page.php'); ?>
  <?php include('model-page.php'); ?>
  <style>
    body {
      background-color: #F4F6F9;
    }
  
  </style>
</head>

<body class="toolbar-enabled">
  <?php include('main-page/header-page.php'); ?>
  <!-- Page title-->
  <!-- Page Title-->
  <div class="page-title-overlap  pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a class="text-nowrap" href="index"><i class="czi-home"></i>Home</a></li>
            <li class="breadcrumb-item text-nowrap"><a href="marketplace-category">Market</a>
            </li>
            <li class="breadcrumb-item text-nowrap active" aria-current="page">Single Item</li>
          </ol>
        </nav>
      </div>
      <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
        <h1 class="h3 text-dark mb-0">Isometric Device Mockups Bundle</h1>
      </div>
    </div>
  </div>
  <!-- Page Content-->
  <!-- Shadow box-->
  <section class="container mb-3 pb-3">
    <div class="bg-light box-shdow-lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Content-->
        <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-lg-3">
          <div class="pt-2 px-4 pr-lg-0 pl-xl-5">
            <!-- Product gallery-->
            <div class="cz-gallery"><a class="gallery-item rounded-lg mb-grid-gutter" href="https://assets.materialup.com/uploads/73001380-3512-45db-8a8e-2e4c70065b3a/preview.jpg" data-sub-html="&lt;h6 class=&quot;font-size-sm text-light&quot;&gt;Simple iPhone X Mockups&lt;/h6&gt;"><img src="https://assets.materialup.com/uploads/73001380-3512-45db-8a8e-2e4c70065b3a/preview.jpg" alt="Gallery preview" /><span class="gallery-item-caption">Simple iPhone X Mockups</span></a>
              <div class="row">
                <div class="col-sm-6"><a class="gallery-item rounded-lg mb-grid-gutter" href="https://assets.materialup.com/uploads/5eb6cba2-25f2-4947-ae4b-b26c135e7d3e/preview.jpg" alt="Gallery preview" data-sub-html="&lt;h6 class=&quot;font-size-sm text-light&quot;&gt;UI Psd iPhone X Monochrome&lt;/h6&gt;"><img src="https://assets.materialup.com/uploads/5eb6cba2-25f2-4947-ae4b-b26c135e7d3e/preview.jpg" alt="Gallery preview" /><span class="gallery-item-caption">UI Psd iPhone X Monochrome</span></a></div>
                <div class="col-sm-6"><a class="gallery-item rounded-lg mb-grid-gutter" href="https://assets.materialup.com/uploads/49a9b01a-3b10-4a7a-97cc-9da246be1c02/preview.jpg" data-sub-html="&lt;h6 class=&quot;font-size-sm text-light&quot;&gt;iPhone 11 Clay Mockup&lt;/h6&gt;"><img src="https://assets.materialup.com/uploads/49a9b01a-3b10-4a7a-97cc-9da246be1c02/preview.jpg" alt="Gallery preview" /><span class="gallery-item-caption">iPhone 11 Clay Mockup</span></a></div>
              </div>
            </div>
            <!-- Wishlist + Sharing-->
            <div class="d-flex flex-wrap justify-content-between align-items-center border-top pt-3">
              <div class="py-2 mr-2">
                <button class="btn btn-outline-accent" type="button"><i class="czi-heart font-size-lg mr-2"></i>Add to Favorites</button>
              </div>
              <div class="py-2"><i class="czi-share-alt font-size-lg align-middle text-muted mr-2"></i><a class="social-btn sb-outline sb-facebook sb-sm ml-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-outline sb-twitter sb-sm ml-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-outline sb-pinterest sb-sm ml-2" href="#"><i class="czi-pinterest"></i></a><a class="social-btn sb-outline sb-instagram sb-sm ml-2" href="#"><i class="czi-instagram"></i></a></div>
            </div>
          </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4">
          <hr class="d-lg-none">
          <div class="cz-sidebar-static h-100 ml-auto border-left">
            <div class="accordion" id="licenses">
              <div class="card border-top-0 border-left-0 border-right-0">
                <div class="card-header d-flex justify-content-between align-items-center py-3 border-0">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="license" id="license-std" checked>
                    <label class="custom-control-label font-weight-medium text-dark" for="license-std" data-toggle="collapse" data-target="#standard-license">Standard license</label>
                  </div>
                  <h5 class="mb-0 text-accent font-weight-normal">$18.<small>00</small></h5>
                </div>
                <div class="collapse show" id="standard-license" data-parent="#licenses">
                  <div class="card-body py-0 pb-2">
                    <ul class="list-unstyled font-size-sm">
                      <li class="d-flex align-items-center"><i class="czi-check-circle text-success mr-1"></i><span class="font-size-ms">Quality verified</span></li>
                      <li class="d-flex align-items-center"><i class="czi-check-circle text-success mr-1"></i><span class="font-size-ms">Use for a single project</span></li>
                      <li class="d-flex align-items-center"><i class="czi-check-circle text-success mr-1"></i><span class="font-size-ms">Non-paying users only</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-bottom-0 border-left-0 border-right-0">
                <div class="card-header d-flex justify-content-between align-items-center py-3 border-0">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="license" id="license-ext">
                    <label class="custom-control-label font-weight-medium text-dark" for="license-ext" data-toggle="collapse" data-target="#extended-license">Extended license</label>
                  </div>
                  <h5 class="mb-0 text-accent font-weight-normal">$299.<small>00</small></h5>
                </div>
                <div class="collapse" id="extended-license" data-parent="#licenses">
                  <div class="card-body py-0 pb-2">
                    <ul class="list-unstyled font-size-sm">
                      <li class="d-flex align-items-center"><i class="czi-check-circle text-success mr-1"></i><span class="font-size-ms">Quality verified</span></li>
                      <li class="d-flex align-items-center"><i class="czi-check-circle text-success mr-1"></i><span class="font-size-ms">Use for a single project</span></li>
                      <li class="d-flex align-items-center"><i class="czi-check-circle text-success mr-1"></i><span class="font-size-ms">Paying users allowed</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <button class="btn btn-primary btn-shadow btn-block mt-4" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
            <div class="bg-secondary rounded p-3 mt-4 mb-2"><a class="media align-items-center" href="marketplace-vendor"><img class="rounded-circle" width="50" src="img/testimonials/01.jpg" alt="Sara Palson" />
                <div class="media-body pl-2"><span class="font-size-ms text-muted">Created by</span>
                  <h6 class="font-size-sm mb-0"> <?php if (!isset($_SESSION['fname']) == "0") {
                                                    echo $_SESSION['fname'];
                                                  } ?></h6>

                </div>
              </a></div>
            <div class="bg-secondary rounded p-3 mb-2"><i class="czi-download h5 text-muted align-middle mb-0 mt-n1 mr-2"></i><span class="d-inline-block h6 mb-0 mr-1">715</span><span class="font-size-sm">Sales</span></div>
            <div class="bg-secondary rounded p-3 mb-4">
              <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
              </div><span class="font-size-ms ml-2">4.1/5</span>
              <div class="font-size-ms text-muted">based on 74 reviews</div>
            </div>
            <ul class="list-unstyled font-size-sm">
              <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">Last update</span><span class="text-muted">April 27, 2019</span></li>
              <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">Released</span><span class="text-muted">February 13, 2019</span></li>
              <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">Category</span><a class="product-meta" href="#">Graphics</a></li>
              <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">Compatible with</span><span class="text-muted">Photoshop CS5</span></li>
              <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark font-weight-medium">File type</span><span class="text-muted">PSD, JPG</span></li>
              <li class="d-flex justify-content-between pb-3 border-bottom"><span class="text-dark font-weight-medium">File size</span><span class="text-muted">56 MB</span></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- Product description + Reviews + Comments-->
  <section class="container mb-4 mb-lg-5">
    <!-- Nav tabs-->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item"><a class="nav-link p-4 active" href="#details" data-toggle="tab" role="tab">Product details</a></li>
      <li class="nav-item"><a class="nav-link p-4" href="#reviews" data-toggle="tab" role="tab">Comments</a></li>
    </ul>
    <div class="tab-content pt-2">
      <!-- Product details tab-->
      <div class="tab-pane fade show active" id="details" role="tabpanel">
        <div class="row">
          <div class="col-lg-8">
            <p class="font-size-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h3 class="h5 pt-2">Main features</h3>
            <ul class="font-size-md">
              <li>Nemo enim ipsam voluptatem quia voluptas sit</li>
              <li>Ut enim ad minima veniam, quis nostrum exercitationem</li>
              <li>Duis aute irure dolor in reprehenderit in voluptate</li>
              <li>At vero eos et accusamus et iusto odio dignissimos</li>
              <li>Omnis voluptas assumenda est omnis dolor</li>
              <li>Quis autem vel eum iure reprehenderit qui in ea voluptate</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Reviews tab-->
      <div class="tab-pane fade" id="reviews" role="tabpanel">
        <!-- Reviews-->
        <div class="row pt-2 pb-3">
          <div class="col-lg-4 col-md-5">
            <h3 class="h4 mb-4">74 Reviews</h3>
            <div class="star-rating mr-2"><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star font-size-sm text-muted mr-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
            <p class="pt-3 font-size-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
          </div>
          <div class="col-lg-8 col-md-7">
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">5</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">43</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">4</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">16</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">3</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">9</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">2</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">4</span>
            </div>
            <div class="d-flex align-items-center">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">1</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">2</span>
            </div>
          </div>
        </div>
        <hr class="mt-4 pb-4 mb-3">
        <div class="row pb-4">
          <!-- Reviews list-->
          <div class="col-md-7">
            <div class="d-flex justify-content-end pb-4">
              <div class="form-inline flex-nowrap">
                <label class="text-muted text-nowrap mr-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                <select class="custom-select custom-select-sm" id="sort-reviews">
                  <option>Newest</option>
                  <option>Oldest</option>
                  <option>Popular</option>
                  <option>High rating</option>
                  <option>Low rating</option>
                </select>
              </div>
            </div>
            <!-- Review-->
            <!-- Review-->
            <div class="row">
              <div class="col-lg-12">
                <!-- comment-->
                <div class="media py-4 border-bottom"><img class="rounded-circle" width="50" src="img/testimonials/04.jpg" alt="Laura Willson" />
                  <div class="media-body pl-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h6 class="font-size-md mb-0">Laura Willson</h6><a class="nav-link-style font-size-sm font-weight-medium" href="#"><i class="czi-reply mr-2"></i>Reply</a>
                    </div>
                    <p class="font-size-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Sep 7, 2019</span>
                    <!-- comment reply-->
                    <div class="media border-top pt-4 mt-4"><img class="rounded-circle" width="50" src="img/testimonials/01.jpg" alt="Sara Palson" />
                      <div class="media-body pl-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <h6 class="font-size-md mb-0">Sara Palson</h6>
                        </div>
                        <p class="font-size-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Sep 13, 2019</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- comment-->
                <div class="media py-4"><img class="rounded-circle" width="50" src="img/testimonials/02.jpg" alt="Benjamin Miller" />
                  <div class="media-body pl-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h6 class="font-size-md mb-0">Benjamin Miller</h6><a class="nav-link-style font-size-sm font-weight-medium" href="#"><i class="czi-reply mr-2"></i>Reply</a>
                    </div>
                    <p class="font-size-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Aug 15, 2019</span>
                  </div>
                </div>
                <!-- Post comment form-->
                <div class="card border-0 ">
                  <div class="card-body">
                    <div class="media"><img class="rounded-circle border p-2" width="50" src="img/marketplace/account/avatar-sm.png" alt="Createx Studio" />
                      <form class="media-body needs-validation ml-3" novalidate>
                        <div class="form-group">
                          <textarea class="form-control" rows="4" placeholder="Write comment..." required></textarea>
                          <div class="invalid-feedback">Please write your comment.</div>
                        </div>
                        <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button class="btn btn-outline-accent mt-5" type="button"><i class="czi-reload mr-2"></i>Load more comments</button>
            </div>
          </div>
          <!-- Leave review form-->
          <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
            <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-lg">
              <h3 class="h4 pb-2">Write a review</h3>
              <form class="needs-validation" method="post" novalidate>
                <div class="form-group">
                  <label for="review-name">Your name<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" required id="review-name">
                  <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                </div>
                <div class="form-group">
                  <label for="review-email">Your email<span class="text-danger">*</span></label>
                  <input class="form-control" type="email" required id="review-email">
                  <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                </div>
                <div class="form-group">
                  <label for="review-rating">Rating<span class="text-danger">*</span></label>
                  <select class="custom-select" required id="review-rating">
                    <option value="">Choose rating</option>
                    <option value="5">5 stars</option>
                    <option value="4">4 stars</option>
                    <option value="3">3 stars</option>
                    <option value="2">2 stars</option>
                    <option value="1">1 star</option>
                  </select>
                  <div class="invalid-feedback">Please choose rating!</div>
                </div>
                <div class="form-group">
                  <label for="review-text">Review<span class="text-danger">*</span></label>
                  <textarea class="form-control" rows="6" required id="review-text"></textarea>
                  <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                </div>
                <button class="btn btn-primary btn-shadow btn-block" type="submit">Submit a Review</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Related products carousel-->
  <section class="container mb-5 pb-lg-3">
    <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom pb-4 mb-4">
      <h2 class="h3 mb-0 pt-2">Related mockups</h2>
      <div class="pt-2"><a class="btn btn-outline-accent btn-sm" href="marketplace-category">More mockups<i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
    </div>
    <!-- Carousel-->
    <div class="cz-carousel">
      <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2 },&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:4}}}">
        <!-- Product-->
        <div>
          <div class="card product-card-alt">
            <div class="product-thumb">
              <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i class="czi-eye"></i></a>
                <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
              </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/02.jpg" alt="Product">
            </div>
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                </div>
              </div>
              <h3 class="product-title font-size-sm mb-2"><a href="#">Floating Phone and Tablet Mockup</a></h3>
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
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i class="czi-eye"></i></a>
                <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
              </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/03.jpg" alt="Product">
            </div>
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">Createx Std. </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                </div>
              </div>
              <h3 class="product-title font-size-sm mb-2"><a href="#">Project Devices Showcase (PSD)</a></h3>
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
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i class="czi-eye"></i></a>
                <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
              </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/08.jpg" alt="Product">
            </div>
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                </div>
              </div>
              <h3 class="product-title font-size-sm mb-2"><a href="#">Business Card Branding Mockup</a></h3>
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
              <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i class="czi-eye"></i></a>
                <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
              </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/07.jpg" alt="Product">
            </div>
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium" href="#">pixels </a>in <a class="product-meta font-weight-medium" href="#">Graphics</a></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                </div>
              </div>
              <h3 class="product-title font-size-sm mb-2"><a href="#">Gravity Device Mockups (PSD)</a></h3>
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>234<span class="font-size-xs ml-1">Sales</span></div>
                <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$16.<small>00</small></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
  <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
  <!-- <script src="vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script> -->
  <script src="vendor/lg-zoom.js/dist/lg-zoom.min.js"></script>
  <!-- Main theme script-->
  <script src="js/theme.min.js"></script>
</body>

</html>