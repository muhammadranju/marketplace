<?php
if(session_status()==PHP_SESSION_NONE){
  session_start();
  }
  include('config/config.php');
  include('config/functions.php');
  $user_info = profile_info();
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
    <title><?php if(isset($user_info)) {echo $user_info['username'];} ?> | RanjuHossain | Account Settings
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
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <img width="142" src="img/ranju.png" alt="Cartzilla" />
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="needs-validation tab-pane fade show active" action="update-profile.php" method="POST" autocomplete="off" novalidate id="signup-tab">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="su-name">First name</label>
                  <input class="form-control" type="text" id="su-name" placeholder="Enter your parsonal first name" name="fname" value="<?php if(isset($user_info)) {echo $user_info['fname'];} ?>" required>
                  <div class="invalid-feedback">Please fill in your first name.</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="su-name">Last name</label>
                  <input class="form-control" type="text" id="su-name" placeholder="Enter your parsonal last name" name="lname" value="<?php if(isset($user_info)) {echo $user_info['lname'];} ?>" required>
                  <div class="invalid-feedback">Please fill in your last name.</div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="dashboard-city">Country</label>
                  <input class="form-control" type="text" id="dashboard-city"placeholder="Enter your country" name="country" value="<?php if(isset($user_info)){ echo $user_info['country'];} ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="dashboard-city">City</label>
                  <input class="form-control" type="text" id="dashboard-city" placeholder="Enter your city" name="city" value="<?php if(isset($user_info)) {echo $user_info['city'];} ?>">
                </div>
              </div>
              <div class="col-sm-4">
                    <div class="form-group">
                      <label for="dashboard-zip">ZIP Code</label>
                      <input class="form-control" type="text" id="dashboard-zip" placeholder="Enter your zip cord" name="zip_code" value="<?php if(isset($user_info)) {echo $user_info['zip_code'];} ?>" >
                    </div>
                  </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="dashboard-address">Address Line</label>
                  <textarea class="form-control" type="text" id="dashboard-address"placeholder="Enter your address line" name="address_line"><?php if(isset($user_info)) {echo $user_info['address_line'];} ?></textarea>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <input type="hidden" name="edit_id" value="<?php if(isset($user_info)) {echo $user_info['id'];} ?>">
                  <button class="btn btn-primary btn-block btn-shadow"  value="Save changes"  type="submit">Save changes</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      </div>
    </div>
  </div>
  <!-- <?php include('update-modal.php') ; ?> -->
  <!-- Navbar-->
  <!-- Add Payment Method-->
  <form class="needs-validation modal fade" method="post" id="add-payment" tabindex="-1" novalidate>
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add a payment method</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="custom-control custom-radio mb-4">
            <input class="custom-control-input" type="radio" id="paypal" name="payment-method">
            <label class="custom-control-label" for="paypal">PayPal<img class="d-inline-block align-middle ml-2" src="img/card-paypal.png" width="39" alt="PayPal"></label>
          </div>
          <div class="custom-control custom-radio mb-4">
            <input class="custom-control-input" type="radio" id="card" name="payment-method" checked>
            <label class="custom-control-label" for="card">Credit / Debit card<img class="d-inline-block align-middle ml-2" src="img/cards.png" width="187" alt="Credit card"></label>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <input class="form-control" type="text" name="number" placeholder="Card Number" required>
              <div class="invalid-feedback">Please fill in the card number!</div>
            </div>
            <div class="form-group col-sm-6">
              <input class="form-control" type="text" name="name" placeholder="Full Name" required>
              <div class="invalid-feedback">Please provide name on the card!</div>
            </div>
            <div class="form-group col-sm-3">
              <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
              <div class="invalid-feedback">Please provide card expiration date!</div>
            </div>
            <div class="form-group col-sm-3">
              <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
              <div class="invalid-feedback">Please provide card CVC code!</div>
            </div>
            <div class="col-sm-6">
              <button class="btn btn-primary btn-shadow btn-block mt-0" type="submit">Register this card</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

    <?php include('main-page/sell-page.php') ; ?>
  <div class="container mb-5 pb-3">
    <div class="bg-light box--lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <?php include('main-page/aside-page.php'); ?>
        <!-- Content-->
        <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
            <h2 class="h3 py-2 text-center text-sm-left">Settings</h2>
            <!-- Tabs-->
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="nav-item"><a class="nav-link px-0 active" href="#profile" data-toggle="tab" role="tab">
                  <div class="d-none d-lg-block"><i class="czi-user opacity-60 mr-2"></i>Profile</div>
                  <div class="d-lg-none text-center"><i class="czi-user opacity-60 d-block font-size-xl mb-2"></i><span class="font-size-ms">Profile</span></div>
                </a></li>
              <li class="nav-item"><a class="nav-link px-0" href="#notifications" data-toggle="tab" role="tab">
                  <div class="d-none d-lg-block"><i class="czi-bell opacity-60 mr-2"></i>Notifications</div>
                  <div class="d-lg-none text-center"><i class="czi-bell opacity-60 d-block font-size-xl mb-2"></i><span class="font-size-ms">Notifications</span></div>
                </a></li>
              <li class="nav-item"><a class="nav-link px-0" href="#payment" data-toggle="tab" role="tab">
                  <div class="d-none d-lg-block"><i class="czi-card opacity-60 mr-2"></i>Payment methods</div>
                  <div class="d-lg-none text-center"><i class="czi-card opacity-60 d-block font-size-xl mb-2"></i><span class="font-size-ms">Payment</span></div>
                </a></li>
            </ul>
            <!-- Tab content-->
            <div class="tab-content">
              <!-- Profile-->
              <div class="tab-pane fade show active" id="profile" role="tabpanel">
                <div class="bg-secondary rounded-lg p-4 mb-4">
                  <div class="media align-items-center"><img class="rounded-circle" src="img/marketplace/account/avatar.png" width="90" alt="Createx Studio">
                    <div class="media-body pl-3">
                      <a class="btn btn-light btn-shadow mb-2 "  href="" ><input type="file" id="file" class="cz-file-drop-input"><label for="file" class="custom-upload-css" >Upload your image</label> </a>
                      <!-- <a class="btn btn-light btn-shadow btn-sm mb-2" type="file" href="" > <input type="file" class='d-none d-sm-inline'> <i class="czi-loading mr-2"></i>Change <span class='d-none d-sm-inline'>avatar</span></a> -->
                      <!-- <button class="btn btn-light btn-shadow btn-sm mb-2" type="button"><i class="czi-loading mr-2"></i>Change <span class='d-none d-sm-inline'>avatar</span></button> -->
                      <div class="p mb-0 font-size-ms text-muted">Upload JPG, GIF or PNG image. 300 x 300 required.</div>
                    </div>
                  </div>
                </div>
                <?php

                include('config/config.php');
                if (isset($_POST['save_changes'])) {

                    $id = $_POST['edit_id'];
                    $username = $_POST['username'];
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $country = $_POST['country'];
                    $city = $_POST['city'];
                    $address_line = $_POST['address_line'];
                    $zip_code = $_POST['zip_code'];

                    $sql = "UPDATE uder_info SET username='$username', fname='$fname',lname='$lname',  country='$country', city='$city', address_line='$address_line', zip_code='$zip_code' WHERE id=$id";
                    $query = mysqli_query($con,$sql);
                  if($query){
                  ?>
                  <script>
                    window.location.href = "dashboard-settings";
                  </script>
                  <?php
                }else{
                  ?>
                  <script>
                    window.location.href = "dashboard-settings";
                  </script>
                  <?php
                }
                }
                ?>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="dashboard-fn">First Name</label>
                      <input class="form-control" type="text" id="dashboard-fn" name="fname" value=" <?php if(isset($user_info)) {echo $user_info['fname'];} ?>" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="dashboard-ln">Last Name</label>
                      <input class="form-control" type="text" id="dashboard-ln" name="lname" value="<?php if(isset($user_info)) {echo $user_info['lname'];} ?>" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="dashboard-profile-name">Username</label>
                      <input class="form-control" type="text" id="dashboard-email" name="username" value="<?php if(isset($user_info)) {echo $user_info['username'];} ?>" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="dashboard-email">Email address</label>
                      <input class="form-control" type="text" id="dashboard-email" name="email" value="<?php if(isset($user_info)) {echo $user_info['email'];} ?>" disabled>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="dashboard-city">Country</label>
                      <input class="form-control" type="text" id="dashboard-city" name="country" value="<?php if(isset($user_info)) {echo $user_info['country'];} ?>" disabled>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="dashboard-city">City</label>
                      <input class="form-control" type="text" id="dashboard-city" name="city" value="<?php if(isset($user_info)) {echo $user_info['city'];} ?>" disabled>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="dashboard-zip">ZIP Code</label>
                      <input class="form-control" type="text" id="dashboard-zip" name="zip_code" value="<?php if(isset($user_info)) {echo $user_info['zip_code'];} ?>" disabled>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="dashboard-address">Address Line</label>
                      <textarea class="form-control" rows="1" type="text" id="dashboard-address" name="address_line" disabled><?php if(isset($user_info)) {echo $user_info['address_line'];} ?></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                      <button class="btn btn-primary mt-3 mt-sm-0 btn-shadow" type="button" data-toggle="modal" data-target="#exampleModal" name="save_changes" >Update profile </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Notifications-->
              <div class="tab-pane fade" id="notifications" role="tabpanel">
                <div class="bg-secondary rounded-lg p-4">
                  <div class="custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="nf-disable-all">
                    <label class="custom-control-label font-weight-medium" for="nf-disable-all">Disable all notifications</label>
                  </div>
                </div>
                <div class="border-bottom p-4">
                  <div class="custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="nf-product-sold" checked>
                    <label class="custom-control-label" for="nf-product-sold">Product sold notifications</label>
                  </div><small class="form-text text-muted">Send an email when someone purchased one of my products</small>
                </div>
                <div class="border-bottom p-4">
                  <div class="custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="nf-product-updated" checked>
                    <label class="custom-control-label" for="nf-product-updated">Product update notifications</label>
                  </div><small class="form-text text-muted">Send an email when a product I've purchased is updated</small>
                </div>
                <div class="border-bottom p-4">
                  <div class="custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="nf-product-comment" checked>
                    <label class="custom-control-label" for="nf-product-comment">Product comment notifications</label>
                  </div><small class="form-text text-muted">Send an email when someone comments on one of my products</small>
                </div>
                <div class="border-bottom p-4">
                  <div class="custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="nf-product-review" checked>
                    <label class="custom-control-label" for="nf-product-review">Product review notification</label>
                  </div><small class="form-text text-muted">Send an email when someone leaves a review with their rating</small>
                </div>
                <div class="border-bottom p-4">
                  <div class="custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="nf-daily-summary">
                    <label class="custom-control-label" for="nf-daily-summary">Daily summary emails</label>
                  </div><small class="form-text text-muted">Send me a daily summary of all products sold, commented or reviewed</small>
                </div>
                <div class="text-right mt-4">
                  <button class="btn btn-primary btn-shadow" type="button">Save changes</button>
                </div>
              </div>
              <!-- Payment methods-->
              <div class="tab-pane fade" id="payment" role="tabpanel">
                <div class="bg-secondary rounded-lg p-4 mb-4">
                  <p class="font-size-sm text-muted mb-0">Primary payment method is used by default</p>
                </div>
                <div class="table-responsive font-size-md">
                  <table class="table table-hover mb-0">
                    <thead>
                      <tr>
                        <th>Your credit / debit cards</th>
                        <th>Name on card</th>
                        <th>Expires on</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-3 align-middle">
                          <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                            <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 4999<span class="align-middle badge badge-info ml-2">Primary</span></div>
                          </div>
                        </td>
                        <td class="py-3 align-middle">John doe</td>
                        <td class="py-3 align-middle">08 / 2019</td>
                        <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                            <div class="czi-trash"></div>
                          </a></td>
                      </tr>
                      <tr>
                        <td class="py-3 align-middle">
                          <div class="media align-items-center"><img class="mr-2" src="img/card-master.png" width="39" alt="MesterCard">
                            <div class="media-body"><span class="font-weight-medium text-heading mr-1">MasterCard</span>ending in 0015</div>
                          </div>
                        </td>
                        <td class="py-3 align-middle">John doe</td>
                        <td class="py-3 align-middle">11 / 2021</td>
                        <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                            <div class="czi-trash"></div>
                          </a></td>
                      </tr>
                      <tr>
                        <td class="py-3 align-middle">
                          <div class="media align-items-center"><img class="mr-2" src="img/card-paypal.png" width="39" alt="PayPal">
                            <div class="media-body"><span class="font-weight-medium text-heading mr-1">PayPal</span>j.doe@example.com</div>
                          </div>
                        </td>
                        <td class="py-3 align-middle">&mdash;</td>
                        <td class="py-3 align-middle">&mdash;</td>
                        <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                            <div class="czi-trash"></div>
                          </a></td>
                      </tr>
                      <tr>
                        <td class="py-3 align-middle">
                          <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                            <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 6073</div>
                          </div>
                        </td>
                        <td class="py-3 align-middle">John doe</td>
                        <td class="py-3 align-middle">09 / 2021</td>
                        <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                            <div class="czi-trash"></div>
                          </a></td>
                      </tr>
                      <tr>
                        <td class="py-3 align-middle">
                          <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                            <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 9791</div>
                          </div>
                        </td>
                        <td class="py-3 align-middle">John doe</td>
                        <td class="py-3 align-middle">05 / 2021</td>
                        <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                            <div class="czi-trash"></div>
                          </a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <hr class="pb-4">
                <div class="text-sm-right"><a class="btn btn-primary btn-shadow" href="#add-payment" data-toggle="modal">Add payment method</a></div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Footer-->
  <!-- Footer-->
  <?php include('main-page/footer-page.php'); ?>
   <?php include('main-page/phone-devices.php'); ?>
  <?php include('links-page/chartjs.php'); ?>
   <!-- Vendor scrits: js libraries and plugins-->
  <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <!-- Main theme script-->

</body>

</html>