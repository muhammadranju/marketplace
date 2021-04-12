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
  <title>Cartzilla | Payouts
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

  <?php include('main-page/header-page.php'); ?>
  <?php include('main-page/sell-page.php'); ?>
  <div class="container mb-5 pb-3">
    <div class="bg-light box--lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <?php include('main-page/aside-page.php'); ?>
        <!-- Content-->
        <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
            <h2 class="h3 py-2 text-center text-sm-left">Payouts</h2>
            <div class="row mx-n2 py-2">
              <div class="col-sm-6 px-2 mb-4">
                <div class="bg-secondary h-100 rounded-lg p-4">
                  <h3 class="h5">Next payout</h3>
                  <p class="font-size-sm">Your current earnings of <span class='font-weight-medium'>$1,375.00</span> will be sent to you 8/15/2019</p>
                </div>
              </div>
              <div class="col-sm-6 px-2 mb-4">
                <div class="bg-secondary h-100 rounded-lg p-4">
                  <h3 class="h5">Payout method</h3>
                  <div class="d-flex flex-wrap align-items-center py-1 mb-2"><img class="d-block mb-2 mr-2" src="img/marketplace/account/paypal-logo.png" width="100" alt="PayPal"><span class="font-size-xs mb-2"><?php echo $_SESSION['email_id'] ; ?></span></div><a class="btn btn-info btn-sm" href="#">Change payout method</a>
                </div>
              </div>
            </div>
            <h3 class="h5 pb-2">Payout history</h3>
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead class="table-info">
                  <tr>
                    <th>Amount</th>
                    <th>Payout method</th>
                    <th>Date processed</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>$1,233.84</td>
                    <td>PayPal</td>
                    <td>July 16, 2019</td>
                  </tr>
                  <tr>
                    <td>$805.79</td>
                    <td>PayPal</td>
                    <td>July 1, 2019</td>
                  </tr>
                  <tr>
                    <td>$1,564.98</td>
                    <td>PayPal</td>
                    <td>June 17, 2019</td>
                  </tr>
                  <tr>
                    <td>$697.79</td>
                    <td>PayPal</td>
                    <td>June 2, 2019</td>
                  </tr>
                  <tr>
                    <td>$2,060.80</td>
                    <td>Payoneer</td>
                    <td>May 15, 2019</td>
                  </tr>
                  <tr>
                    <td>$754.30</td>
                    <td>Payoneer</td>
                    <td>May 1, 2019</td>
                  </tr>
                  <tr>
                    <td>$1,372.26</td>
                    <td>Payoneer</td>
                    <td>April 16, 2019</td>
                  </tr>
                  <tr>
                    <td>$1,296.41</td>
                    <td>SWIFT</td>
                    <td>April 3, 2019</td>
                  </tr>
                  <tr>
                    <td>$339.57</td>
                    <td>SWIFT</td>
                    <td>March 17, 2019</td>
                  </tr>
                  <tr>
                    <td>$493.24</td>
                    <td>SWIFT</td>
                    <td>February 28, 2019</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr class="mb-grid-gutter">
            <!-- Pagination-->
            <!-- <nav class="d-md-flex justify-content-between align-items-center text-center text-md-left" aria-label="Page navigation">
              <div class="d-md-flex align-items-center w-100"><span class="font-size-sm text-muted mr-md-3">Showing 10 of 52 records</span>
                <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <button class="btn btn-outline-primary btn-sm" type="button">More records</button>
            </nav> -->
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