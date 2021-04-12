<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    session_regenerate_id();
}
?>
<?php if (isset($_SESSION['user_id'])) {
?>
    <script>
        window.location.href = "/";
    </script>
<?php
}
include("config/config.php");
include("config/functions.php");
$email_error = '';
$password_error = '';

if (isset($_POST['login'])) {
    extract($_POST);
    $submit = true;
    if (!$password) {
        $password_error = 'Please enter your password';
        $submit = false;
    }
    if (!$email) {
        $email_error = 'Please enter your email';
        $submit = false;
    } else if ($email && (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $email_err = 'Invalid email address';
        $submit = false;
    }

    if ($email && $password) {
        $filter_email =  mysqli_real_escape_string($con, chak_data($email));
        $filter_password =  mysqli_real_escape_string($con, chak_data($password));
        login($filter_email, $filter_password);
    }
    if ($email && $password) {
        login(chak_data($email), chak_data($password));
    }

    if ($password && $password) {
        $password_error = 'Incorrect password not match';
        $submit = false;
    }
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
                <div class="col-xl-5 ">
                    <div class="card box-shadow-lg shadow">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12 p-5">
                                    <div class="mx-auto mb-5">
                                        <a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="/" style="min-width: 12rem;">
                                            <img width="200px" src="img/pikslide-logo.png" alt="Pikslide" /></a>
                                       <a class="navbar-brand d-sm-none mr-2 order-lg-1 ce" href="/" style="min-width: 4.625rem;">
                                            <img width="200" src="img/pikslide-logo.png" alt="Pikslide" /></a>
                                    </div>

                                    <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                                    <p class="text-muted mt-1 mb-4">Enter your email address and password to
                                        access admin panel.</p>

                                    <form action="pages-login" method="POST" class="authentication-form">
                                        <div class="form-group">
                                            <i class="fas fa-envelope"></i> <label for="su-email">Email address<strong class="text-danger">*</strong></label>
                                            <input class="form-control" type="email" id="su-email" name="email" value="<?php if (isset($email)) {
                                                                                                                            echo $email;
                                                                                                                        } ?>" placeholder="Enter your email">
                                            <strong class="text-danger"><?php echo $email_error; ?> </strong>
                                        </div>

                                        <div class="form-group ">
                                            <i class="fas fa-lock"></i> <label for="su-password ">Password<strong class="text-danger">*</strong></label>
                                            <small><a href="pages-recoverpw" class="float-right text-muted text-unline-dashed text-danger">Forgot your password?</a></small>
                                            <div class="password-toggle">
                                                <input class="form-control" type="password" id="su-password" name="password" placeholder="Enter your password">
                                                <label class="password-toggle-btn">
                                                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                                                </label>
                                                <strong class="text-danger"><?php echo $password_error; ?> </strong>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                                <label class="custom-control-label" for="checkbox-signin">Remember
                                                    me</label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0  text-center">
                                            <button class="btn btn-primary btn-block btn-bule btn-shadow btndark " name="login" type="submit"> Log In
                                            </button>
                                        </div>
                                    </form>
                                    <div class="py-3 text-center"><span class="font-size-16 font-weight-bold">Or</span></div>
                                    <div class="row  mb-0  ">
                                        <div class="col-6 mb-0">
                                            <a href="#" class="btn btn-white"><i class="fab fa-google text-success"></i> </i>Google</a>
                                        </div>
                                        <div class="col-6 text-right mb-0">
                                            <a href="#" class="btn btn-white"><i class="fab fa-facebook text-info"></i> </i>Facebook</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- end col -->
                    <div class="row mt-3">
                        <div class="col-12 text-center ">
                            <p class="text-muted">Don't have an account? <a href="pages-register" class="text-dark font-weight-bold ml-1 ">Sign Up</a></p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- <div class="cz-handheld-toolbar">
            <div class="d-table table-fixed w-100">
                <a class="d-table-cell cz-handheld-toolbar-item" href="/"><span class="cz-handheld-toolbar-icon"><i class="czi-home"></i></span><span class="cz-handheld-toolbar-label">Home</span></a>
                <a class="d-table-cell cz-handheld-toolbar-item" href="pages-register"><span class="cz-handheld-toolbar-icon"><i class="fas fa-sign-in-alt"></i></span><span class="cz-handheld-toolbar-label">Sign Up</span></a>
            </div>
        </div> -->
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