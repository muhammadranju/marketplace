<?php
if(session_status()==PHP_SESSION_NONE){
  session_start();
}
?>
<?php if(isset($_SESSION['user_id'])){
   ?>
   <script>
      window.location.href = "http://192.168.0.23/php-marketplace";
   </script>
   <?php
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Shreyu - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/theme.min.css" type="text/css">
    <?php include('links-page/links-page.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <style>
    body {
      background-color: #F4F6F9;
    }
  </style>


</head>

<body class="authentication-bg">

    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="card box-shadow-lg shadow">
                        <div class="card-body p-4">
                            <div class="text-center">
                                    <div class="mx-auto mb-5">
                                        <a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="/" style="min-width: 7rem;">
                                            <img width="142" src="img/logo-dark.png" alt="Cartzilla" /></a>
                                        <a class="navbar-brand d-sm-none mr-2 order-lg-1" href="/" style="min-width: 4.625rem;">
                                            <img width="74" src="img/logo-icon.png" alt="Cartzilla" /></a>
                                    </div>

                                <h6 class="h5 mb-0 mt-5">Confirm your email</h6>
                                <p class="text-muted mt-3 mb-3">Your account has been successfully registered. To
                                    complete the verification process, please check your email for a validation request.
                                </p>
                            </div>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Return to <a href="pages-login"
                                    class="text-primary font-weight-bold ml-1">Login</a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
