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
  <title>Cartzilla | Sales
  </title>
  <link rel="stylesheet" href="css/theme.min.css" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <?php include('links-page/links-page.php'); ?>
  <style>
    body {
      background-color: #F4F6F9;
    }
  </style>
</head>
<body class="toolbar-enabled">
  <?php include('main-page/header-page.php'); ?>
  <?php include('main-page/sell-page.php') ; ?>
  <div class="container mb-5 pb-3">
    <div class="bg-light box--lg rounded-lg overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <?php include('main-page/aside-page.php'); ?>
        <!-- Content-->
        <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
            <h2 class="h3 py-2 text-center text-sm-left">Your sales / earnings</h2>
            <div class="row mx-n2 pt-2">
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="bg-secondary h-100 rounded-lg p-4 text-center">
                  <h3 class="font-size-sm text-muted">Earnings (before taxes)</h3>
                  <p class="h2 mb-2">$1,690.<small>50</small></p>
                  <p class="font-size-ms text-muted mb-0">Sales 8/1/2019 - 8/15/2019</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="bg-secondary h-100 rounded-lg p-4 text-center">
                  <h3 class="font-size-sm text-muted">Your balance</h3>
                  <p class="h2 mb-2">$1,375.<small>00</small></p>
                  <p class="font-size-ms text-muted mb-0">To be paid on 8/15/2019</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-12 px-2 mb-4">
                <div class="bg-secondary h-100 rounded-lg p-4 text-center">
                  <h3 class="font-size-sm text-muted">Lifetime earnings</h3>
                  <p class="h2 mb-2">$9,156.<small>74</small></p>
                  <p class="font-size-ms text-muted mb-0">Based on list price</p>
                </div>
              </div>
            </div>
            <div class="row mx-n2">
              <div class="col-lg-12 px-2">
                <div class="card mb-4">
                  <div class="card-body">
                    <h3 class="font-size-sm pb-3 mb-3 border-bottom">Sales value, USD <span class="font-weight-normal font-size-xs text-muted">(Past 2 weeks)</span></h3>
                    <canvas id="lineChart" class="chartjs-render-monito" aria-label="chart" height="40" width="100" ></canvas>
                    <!-- <div class="ct-chart ct-perfect-fourth" data-line-chart="{&quot;labels&quot;: [&quot;22 Jul&quot;, &quot;&quot;, &quot;24 Jul&quot;, &quot;&quot;, &quot;26 Jul&quot;, &quot;&quot;, &quot;28 Jul&quot;, &quot;&quot;, &quot;30 Jul&quot;, &quot;&quot;, &quot;01 Aug&quot;, &quot;&quot;, &quot;03 Aug&quot;, &quot;&quot;, &quot;05 Aug&quot;], &quot;series&quot;: [[0, 100, 200, 150, 50, 0, 0, 50, 0, 50, 50, 50, 0, 100, 0]]}"></div> -->
                    <div class="card-body">
                      <h4 class="card-title">Sales Table</h4>
                      <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                          <thead class="table-info">
                            <tr>
                              <th>Date</th>
                              <th>Reference</th>
                              <th>Product</th>
                              <th>Earnings</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><?php echo date("D d M"); ?></td>
                              <td><span>#200185</span></td>
                              <td><a  target="block" href="#" class="h6 product-title mb-2">System Architect</a></td>
                              <td><span>$</span>0.32</td>
                            </tr>
                        </table>
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
  <!-- Toolbar for handheld devices-->
  <?php include('main-page/phone-devices.php'); ?>
  <!-- Vendor scrits: js libraries and plugins-->
  <?php include('links-page/chartjs.php'); ?>
  <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
  <script src="vendor/simplebar/dist/simplebar.min.js"></script>
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="vendor/chartist/dist/chartist.min.js"></script>
  <!-- Main theme script-->
  <script src="js/theme.min.js"></script>
  <script src="js/theme.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.js"></script>
  <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
  <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
  <script>
    $(document).ready(function() {
      $('#zero_config').dataTable();
    });
  </script>
</body>
</body>

</html>