<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  // session_regenerate_id();

}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

<header class="bg-light  navbar-sticky col-lg-12 " id="haderId">
  <div class="navbar navbar-expand-lg navbar-light navbar-sticky haderId">
    <div class="container "><a class="  d-sm-block  order-lg-1 " href="/" ><img width="130px"  src="img/pikslide-logo-2.png" alt="Cartzilla" /></a>

      <!-- Toolbar-->
      <div class="navbar-toolbar d-flex align-items-center order-lg-1 ">

        <!-- <a class="navbar-tool d-none d-lg-flex" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox"> -->
        </a>
        <?php if (isset($_SESSION['user_id'])) { ?>
          <!-- <a class="navbar-tool d-none d-lg-flex" href="dashboard-favorites"><span class="navbar-tool-tooltip">Favorites</span>
            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-heart"></i></div>
          </a> -->
          <div class="navbar-tool dropdown ml-2"><a class="navbar-tool-icon-box border dropdown-toggle" href="dashboard-sales"><img width="50" class=" rounded-circle" src="img/marketplace/account/avatar-sm.png" alt="Createx Studio" /></a><a class="navbar-tool-text ml-n1 text-accent" href="dashboard-sales"><small><?php echo  $_SESSION['username']; ?></small>$137</a>
            <div class="dropdown-menu dropdown-menu-right" style="min-width: 14rem;">
              <h6 class="dropdown-header">Account</h6><a class="dropdown-item d-flex align-items-center" href="dashboard-settings"><i class="czi-settings opacity-60 mr-2"></i>Settings</a><a class="dropdown-item d-flex align-items-center" href="dashboard-purchases"><i class="czi-basket opacity-60 mr-2"></i>Purchases</a><a class="dropdown-item d-flex align-items-center" href="dashboard-favorites"><i class="czi-heart opacity-60 mr-2"></i>Favorites<span class="font-size-xs text-muted ml-auto">4</span></a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Seller Dashboard</h6><a class="dropdown-item d-flex align-items-center" href="dashboard-sales"><i class="czi-dollar opacity-60 mr-2"></i>Sales<span class="font-size-xs text-muted ml-auto">$1,375.00</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-products"><i class="czi-package opacity-60 mr-2"></i>Products<span class="font-size-xs text-muted ml-auto">5</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-add-new-product"><i class="czi-cloud-upload opacity-60 mr-2"></i>Add New Product</a><a class="dropdown-item d-flex align-items-center" href="dashboard-payouts"><i class="czi-currency-exchange opacity-60 mr-2"></i>Payouts</a>
              <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="pages-logout"><i class="czi-sign-out opacity-60 mr-2"></i>Sign Out</a>
            </div>
          </div>
        <?php }; ?>


      </div>
      <div class="navbar-toolbar d-flex align-items-center order-lg-3 ">
        <?php if (!isset($_SESSION['user_id'])) { ?>
          <div class=""><a class="ml-6 mb-2 text-dark bg-light btn btn-light border-secondary " href="pages-login">Sign In</a></div>
        <?php }; ?>
        <?php if (!isset($_SESSION['user_id'])) { ?>
          <div class="navbar-tool ml-4 mb-2"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="#exampleModal" data-toggle="modal" data-target="#exampleModal"><i class="navbar-tool-icon czi-cart"></i></a></div>
        <?php } ?>
        <?php if (isset($_SESSION['user_id'])) { ?>
          <div class="navbar-tool ml-4 mb-2"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="marketplace-cart"><?php if (isset($_SESSION['user_id'])) { ?><span class="navbar-tool-label ">3</span><?php } ?> <i class="navbar-tool-icon czi-cart "></i></a></div>
        <?php } ?>
      </div>

      <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
        <!-- Categories dropdown-->
            <div class="col-lg col-md-6 col-sm-12 col">
              <form action="#" class="search-header">
                  <div class="input-group w-100">
                      <input
                          type="text" class="form-control" style="width: 60%" placeholder="Search your design">
                      <div class="input-group-append">
                          <button class="btn btn-primary " type="submit"><i class="fa fa-search text-dark"></i></button>
                      </div>
                  </div>
              </form>
              <!-- search-wrap .end// -->
          </div>
      </div>
    </div>
  </div>

  <!-- ========================================================== -->

  <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n3 pt-0 pb-1">
    <div class="container mx-auto  center">
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Search-->
        <!-- <div class="input-group-overlay d-lg-none my-3">
          <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
          <input class="form-control prepended-form-control" type="text" placeholder="Search for products">
        </div> -->
        <!-- Departments menu-->

        <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-view-grid mr-2"></i>Departments</a>
            <div class="dropdown-menu px-2 pl-0 pb-4">
              <div class="d-flex flex-wrap flex-md-nowrap">
                <div class="mega-dropdown-column pt-4 px-3">
                  <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/01.jpg" alt="Shoes" /></a>
                    <h6 class="font-size-base mb-2">Clothing</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Women's clothing</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Men's clothing</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's clothing</a></li>
                    </ul>
                  </div>
                </div>
                <div class="mega-dropdown-column pt-4 px-3">
                  <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/02.jpg" alt="Shoes" /></a>
                    <h6 class="font-size-base mb-2">Shoes</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Women's shoes</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Men's shoes</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's shoes</a></li>
                    </ul>
                  </div>
                </div>
                <div class="mega-dropdown-column pt-4 px-3">
                  <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/03.jpg" alt="Shoes" /></a>
                    <h6 class="font-size-base mb-2">Gadgets</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Smartphones &amp; Tablets</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Wearable gadgets</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">E-book readers</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-wrap flex-md-nowrap">
                <div class="mega-dropdown-column pt-4 px-3">
                  <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/04.jpg" alt="Shoes" /></a>
                    <h6 class="font-size-base mb-2">Furniture &amp; Decor</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Home furniture</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Office furniture</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Lighting and decoration</a></li>
                    </ul>
                  </div>
                </div>
                <div class="mega-dropdown-column pt-4 px-3">
                  <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/05.jpg" alt="Shoes" /></a>
                    <h6 class="font-size-base mb-2">Accessories</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Hats</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Bags</a></li>
                    </ul>
                  </div>
                </div>
                <div class="mega-dropdown-column pt-4 px-3">
                  <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="img/shop/departments/06.jpg" alt="Shoes" /></a>
                    <h6 class="font-size-base mb-2">Entertainment</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's toys</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Video games</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Outdoor / Camping</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-menu align-middle mt-n1 mr-2"></i>Categories</a>
            <ul class="dropdown-menu py-1">
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Photos</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item product-title font-weight-medium"><a href="#">All Photos<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Abstract</a></li>
                  <li><a class="dropdown-item" href="#">Animals</a></li>
                  <li><a class="dropdown-item" href="#">Architecture</a></li>
                  <li><a class="dropdown-item" href="#">Beauty &amp; Fashion</a></li>
                  <li><a class="dropdown-item" href="#">Business</a></li>
                  <li><a class="dropdown-item" href="#">Education</a></li>
                  <li><a class="dropdown-item" href="#">Food &amp; Drink</a></li>
                  <li><a class="dropdown-item" href="#">Holidays</a></li>
                  <li><a class="dropdown-item" href="#">Industrial</a></li>
                  <li><a class="dropdown-item" href="#">People</a></li>
                  <li><a class="dropdown-item" href="#">Sports</a></li>
                  <li><a class="dropdown-item" href="#">Technology</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Graphics</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item product-title font-weight-medium"><a href="#">All Graphics<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Icons</a></li>
                  <li><a class="dropdown-item" href="#">Illustartions</a></li>
                  <li><a class="dropdown-item" href="#">Patterns</a></li>
                  <li><a class="dropdown-item" href="#">Textures</a></li>
                  <li><a class="dropdown-item" href="#">Web Elements</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">UI Design</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item product-title font-weight-medium"><a href="#">All UI Design<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">PSD Templates</a></li>
                  <li><a class="dropdown-item" href="#">Sketch Templates</a></li>
                  <li><a class="dropdown-item" href="#">Adobe XD Templates</a></li>
                  <li><a class="dropdown-item" href="#">Figma Templates</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Web Themes</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item product-title font-weight-medium"><a href="#">All Web Themes<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">WordPress Themes</a></li>
                  <li><a class="dropdown-item" href="#">Bootstrap Themes</a></li>
                  <li><a class="dropdown-item" href="#">eCommerce Templates</a></li>
                  <li><a class="dropdown-item" href="#">Muse Templates</a></li>
                  <li><a class="dropdown-item" href="#">Plugins</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Fonts</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item product-title font-weight-medium"><a href="#">All Fonts<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Blackletter</a></li>
                  <li><a class="dropdown-item" href="#">Display</a></li>
                  <li><a class="dropdown-item" href="#">Non Western</a></li>
                  <li><a class="dropdown-item" href="#">Sans Serif</a></li>
                  <li><a class="dropdown-item" href="#">Script</a></li>
                  <li><a class="dropdown-item" href="#">Serif</a></li>
                  <li><a class="dropdown-item" href="#">Slab Serif</a></li>
                  <li><a class="dropdown-item" href="#">Symbols</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Add-Ons</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item product-title font-weight-medium"><a href="#">All Add-Ons<i class="czi-arrow-right font-size-xs ml-1"></i></a></li>
                  <li class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Photoshop Add-Ons</a></li>
                  <li><a class="dropdown-item" href="#">Illustrator Add-Ons</a></li>
                  <li><a class="dropdown-item" href="#">Sketch Plugins</a></li>
                  <li><a class="dropdown-item" href="#">Procreate Brushes</a></li>
                  <li><a class="dropdown-item" href="#">InDesign Palettes</a></li>
                  <li><a class="dropdown-item" href="#">Lightroom Presets</a></li>
                  <li><a class="dropdown-item" href="#">Other Software</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Primary menu-->
        <ul class="navbar-nav">
          <li class="nav-item dropdown active b-b-1"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
            <ul class="dropdown-menu">
              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion Store v.1</span><small class="d-block text-muted">Classic shop layout</small></a>
                <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-fashion-store-v1.html" style="width: 250px;"><img src="img/home/preview/th01.jpg" alt="Fashion Store v.1" /></a></div>
              </li>
              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-electronics-store.html"><span class="d-block text-heading">Electronics Store</span><small class="d-block text-muted">Slider + Promo banners</small></a>
                <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-electronics-store.html" style="width: 250px;"><img src="img/home/preview/th03.jpg" alt="Electronics Store" /></a></div>
              </li>
              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-marketplace.html"><span class="d-block text-heading">Marketplace</span><small class="d-block text-muted">Multi-vendor, digital goods</small></a>
                <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-marketplace.html" style="width: 250px;"><img src="img/home/preview/th04.jpg" alt="Marketplace" /></a></div>
              </li>
              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-grocery-store.html"><span class="d-block text-heading">Grocery Store</span><small class="d-block text-muted">Full width + Side menu</small></a>
                <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-grocery-store.html" style="width: 250px;"><img src="img/home/preview/th06.jpg" alt="Grocery Store" /></a></div>
              </li>
              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-food-delivery.html"><span class="d-block text-heading">Food Delivery Service</span><small class="d-block text-muted">Food &amp; Beverages delivery</small></a>
                <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-food-delivery.html" style="width: 250px;"><img src="img/home/preview/th07.jpg" alt="Food Delivery Service" /></a></div>
              </li>
              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v2.html"><span class="d-block text-heading">Fashion Store v.2</span><small class="d-block text-muted">Slider + Featured categories</small></a>
                <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-fashion-store-v2.html" style="width: 250px;"><img src="img/home/preview/th02.jpg" alt="Fashion Store v.2" /></a></div>
              </li>
              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2" href="home-single-store.html"><span class="d-block text-heading">Single Product Store</span><small class="d-block text-muted">Single product / mono brand</small></a>
                <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-single-store.html" style="width: 250px;"><img src="img/home/preview/th05.jpg" alt="Single Product / Brand Store" /></a></div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Shop</a>
            <div class="dropdown-menu p-0">
              <div class="d-flex flex-wrap flex-md-nowrap px-2">
                <div class="mega-dropdown-column py-4 px-3">
                  <div class="widget widget-links mb-3">
                    <h6 class="font-size-base mb-3">Shop layouts</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                    </ul>
                  </div>
                  <div class="widget widget-links">
                    <h6 class="font-size-base mb-3">Marketplace</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-category.html">Category Page</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-single.html">Single Item Page</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-vendor.html">Vendor Page</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-cart.html">Cart</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-checkout.html">Checkout</a></li>
                    </ul>
                  </div>
                </div>
                <div class="mega-dropdown-column py-4 px-3">
                  <div class="widget widget-links">
                    <h6 class="font-size-base mb-3">Shop pages</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-categories.html">Shop Categories</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-single-v1.html">Product Page v.1</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-single-v2.html">Product Page v.2</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-cart.html">Cart</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-details.html">Checkout - Details</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-shipping.html">Checkout - Shipping</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-payment.html">Checkout - Payment</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-review.html">Checkout - Review</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-complete.html">Checkout - Complete</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="order-tracking.html">Order Tracking</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="comparison.html">Product Comparison</a></li>
                    </ul>
                  </div>
                </div>
                <div class="mega-dropdown-column py-4 pr-3">
                  <div class="widget widget-links mb-3">
                    <h6 class="font-size-base mb-3">Grocery store</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="grocery-catalog.html">Product Catalog</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="grocery-single.html">Single Product Page</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="grocery-checkout.html">Checkout</a></li>
                    </ul>
                  </div>
                  <div class="widget widget-links">
                    <h6 class="font-size-base mb-3">Food Delivery</h6>
                    <ul class="widget-list">
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-category.html">Category Page</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-single.html">Single Item (Restaurant)</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-cart.html">Cart (Your Order)</a></li>
                      <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-checkout.html">Checkout (Address &amp; Payment)</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Account</a>
            <ul class="dropdown-menu">
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Shop User Account</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                  <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a></li>
                  <li><a class="dropdown-item" href="account-address.html">Account Addresses</a></li>
                  <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                  <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                  <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                  <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vendor Dashboard</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="dashboard-settings.html">Settings</a></li>
                  <li><a class="dropdown-item" href="dashboard-purchases.html">Purchases</a></li>
                  <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                  <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                  <li><a class="dropdown-item" href="dashboard-products.html">Products</a></li>
                  <li><a class="dropdown-item" href="dashboard-add-new-product.html">Add New Product</a></li>
                  <li><a class="dropdown-item" href="dashboard-payouts.html">Payouts</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
              <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
            <ul class="dropdown-menu">
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Navbar Variants</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a></li>
                  <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a></li>
                  <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a></li>
                  <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a></li>
                  <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a></li>
                  <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a></li>
                  <li><a class="dropdown-item" href="home-electronics-store.html">Electronics Store</a></li>
                  <li><a class="dropdown-item" href="home-marketplace.html">Marketplace</a></li>
                  <li><a class="dropdown-item" href="home-grocery-store.html">Side Menu (Grocery)</a></li>
                  <li><a class="dropdown-item" href="home-single-store.html">Transparent</a></li>
                </ul>
              </li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="about.html">About Us</a></li>
              <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Help Center</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                  <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                  <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">404 Not Found</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a></li>
                  <li><a class="dropdown-item" href="404-illustration.html">404 - Illustration</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
            <ul class="dropdown-menu">
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog List Layouts</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="blog-list-sidebar.html">List with Sidebar</a></li>
                  <li><a class="dropdown-item" href="blog-list.html">List no Sidebar</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog Grid Layouts</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid with Sidebar</a></li>
                  <li><a class="dropdown-item" href="blog-grid.html">Grid no Sidebar</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Single Post Layouts</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="blog-single-sidebar.html">Article with Sidebar</a></li>
                  <li><a class="dropdown-item" href="blog-single.html">Article no Sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Docs / Components</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="docs/dev-setup.html">
                  <div class="d-flex">
                    <div class="lead text-muted pt-1"><i class="czi-book"></i></div>
                    <div class="ml-2"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                  </div>
                </a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="components/typography.html">
                  <div class="d-flex">
                    <div class="lead text-muted pt-1"><i class="czi-server"></i></div>
                    <div class="ml-2"><span class="d-block text-heading">Components<span class="badge badge-info ml-2">40+</span></span><small class="d-block text-muted">Faster page building</small></div>
                  </div>
                </a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="docs/changelog.html">
                  <div class="d-flex">
                    <div class="lead text-muted pt-1"><i class="czi-edit"></i></div>
                    <div class="ml-2"><span class="d-block text-heading">Changelog<span class="badge badge-success ml-2">v1.4</span></span><small class="d-block text-muted">Regular updates</small></div>
                  </div>
                </a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="mailto:contact@createx.studio">
                  <div class="d-flex">
                    <div class="lead text-muted pt-1"><i class="czi-help"></i></div>
                    <div class="ml-2"><span class="d-block text-heading">Support</span><small class="d-block text-muted">contact@createx.studio</small></div>
                  </div>
                </a></li>
            </ul>
          </li>
        </ul>
        <!-- <div class="dropdown show">
          <a type="button" class="text-primary dropdown " id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-ellipsis-h "></i></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">User Rankings</a>
            <a class="dropdown-item" href="#">Sell With Us</a>
            <a class="dropdown-item" href="#">Advertise</a>
            <a class="dropdown-item" href="#">Stories</a>
            <a class="dropdown-item" href="#">About</a>
            <a class="dropdown-item" href="#">Terms</a>
            <a class="dropdown-item" href="#">Privacy Policy</a>
            <a class="dropdown-item" href="#">FAQ</a>
            <a class="dropdown-item" href="#">Contact Support</a>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Search collapse-->
  <!-- <div class="search-box collapse" id="searchBox">
    <div class="card pt-2 pb-4 border-0 rounded-0">
      <div class="container">
        <div class="input-group-overlay">
          <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
          <input class="form-control prepended-form-control" type="text" placeholder="Search marketplace">
        </div>
      </div>
    </div>
  </div> -->
</header>