<?php

$error = $_SERVER["REDIRECT_STATUS"]; 
$error_titel = '';
$error_massege = '';

if($error == 404 ){ 
    $error_titel = "We can't seem to find the page you are looking for.";
    $error_massege = "Back to home page";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cartzilla | 404 - Simple Text
  </title>
  <?php include('links-page/links-page.php'); ?>
</head>
<body class="toolbar-enabled">
  </div>
  <?php include('main-page/header-page.php'); ?>
  <div class="container py-5 mb-lg-10">
    <div class="row justify-content-center pt-lg-4 text-center">
      <div class="col-lg-5 col-md-7 col-sm-9">
        <h1 class="display-404">404</h1>
        <h2 class="h3 mb-4"> <?php echo $error_titel; ?></h2>
        <p class="font-size-md mb-4">
          <u> <a href="http://192.168.0.23/"> <?php echo $error_massege; ?></a></u>
        </p>
      </div>
    </div>
  </div>
  <?php include('main-page/footer-page.php'); ?>
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