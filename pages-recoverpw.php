<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php if (isset($_SESSION['user_id'])) {
?>
    <script>
        window.location.href = "/";
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
                <div class="col-xl-6 ">
                    <div class="card box-shadow-lg shadow">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12 p-5">
                                    <div class="mx-auto mb-5">
                                        <a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="/" style="min-width: 12rem;">
                                            <img width="200px" src="img/pikslide-logo.png" alt="Pikslide" /></a>
                                        <a class="navbar-brand d-sm-none mr-2 order-lg-1" href="/" style="min-width: 4.625rem;">
                                            <img width="74" src="img/pikslide-logo.png" alt="Pikslide" /></a>
                                    </div>

                                    <h6 class="h5 mb-0 mt-4">Reset Password</h6>
                                    <p class="text-muted mt-1 mb-5">
                                        Enter your email address and we'll send you an email with instructions to reset your password.
                                    </p>

                                    <form action="#" class="authentication-form">
                                        <div class="form-group">
                                            <label class="form-control-label">Email Address</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" id="email" placeholder="hello@coderthemes.com">
                                            </div>
                                        </div>

                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-primary btn-block" type="submit"> Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Back to <a href="pages-login" class="text-primary font-weight-bold ml-1">Login</a></p>
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