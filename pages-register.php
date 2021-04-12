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
include('config/config.php');
include('config/functions.php');

$username_error = '';
$full_name_error = '';
$email_error = '';
$password_error = '';
$conpassword_error = '';
$checked_error = '';
$checked = '';

$submit = true;
if (isset($_POST['signup'])) {
    extract($_POST);
    $username = mysqli_real_escape_string($con, chak_data($_POST['username']));
    $email = mysqli_real_escape_string($con, chak_data($_POST['email']));
    $password = mysqli_real_escape_string($con, chak_data($_POST['password']));
    $conpassword = mysqli_real_escape_string($con, chak_data($_POST['conpassword']));
    // $checked = mysqli_real_escape_string($con, chak_data($_POST['checked']));

    if (!$username) {
        $username_error = "Username is required";
        $submit = false;
    }

    if (!$email) {
        $email_error = "Email is required";
        $submit = false;
    } else if ($email && (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $email_error = 'Please enter a validate email';
        $submit = false;
    } else if ($email && (filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $isexist = check_email($email);
        if ($isexist) {
            $email_error = 'This email alreday exist try again another one';
            $submit = false;
        }
    }
    if (!$password) {
        $password_error = "Password is required";
        $submit = false;
    }
    if ($password && (strlen($password) < 8)) {
        $password_error = 'Password must be 8-16 characters long';
        $submit = false;
    }
    if (!$conpassword) {
        $conpassword_error = "Confirm password is required";
        $submit = false;
    }
    if (($password && $conpassword) && ($password !== $conpassword)) {
        $conpassword_error = 'Password & Confirm password not match';
        $submit = false;
    }
    $pass = md5($password);
    // $pass = password_hash($password, PASSWORD_BCRYPT);
    if ($submit) {
        $sql = "INSERT INTO user_info(username,email, password, conpassword) VALUES('$username','$email','$pass','$pass')";
        $res = mysqli_query($con, $sql);
        if ($res) {
    ?>
            <script>
                window.location.href = "pages-login";
            </script>
<?php
            $username = $full_name = $email = $password = $conpassword = '';
        } else {
            echo "Sorry";
        }
    }
    if (!$checked) {
        $checked_error = "Terms and Conditions is required";
        $submit = false;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Shreyu - Admin & Dashboard Template</title>
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
                                    <h6 class="h5 mb-0 mt-4">Create your account</h6>
                                    <p class="text-muted mt-0 mb-4">Create a free account and start using Amin Hossain</p>
                                    <form action="pages-register" method="POST" class="authentication-form">
                                        <div class="form-group">
                                            <i class="fas fa-user-friends"></i> <label for="su-name">Username<span class=" text-danger">*</span></label>
                                            <input class="form-control" type="text" id="su-name" name="username" value="<?php if (isset($username)) {
                                                                                                                            echo $username;
                                                                                                                        } ?>" placeholder="Enter your username">
                                            <span class="text-danger"><?php echo $username_error; ?> </span>
                                            <div class="invalid-feedback">Please fill in your name.</div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <i class="fas fa-user"></i> <label for="su-name">Full name<span class=" text-danger">*</span></label>
                                            <input class="form-control" type="text" id="su-name" name="full_name" value="<?php ?>" placeholder="John Doe" >
                                            <span class="text-danger"><?php ?> </span>
                                            <div class="invalid-feedback">Please fill in your name.</div>
                                        </div> -->
                                        <div class="form-group">
                                            <i class="fas fa-envelope"></i> <label for="su-email">Email address<span class=" text-danger">*</span></label>
                                            <input class="form-control" type="email" id="su-email" name="email" value="<?php if (isset($email)) {
                                                                                                                            echo $email;
                                                                                                                        } ?>" placeholder="Enter your email address">
                                            <span class="text-danger"><?php echo $email_error; ?> </span>
                                            <div class="invalid-feedback">Please provide a valid email address.</div>
                                        </div>
                                        <div class="form-group ">
                                            <i class="fas fa-lock"></i> <label for="su-password ">Password<span class=" text-danger">*</span></label>
                                            <div class="password-toggle">
                                                <input class="form-control" type="password" id="su-password" name="password" value="<?php if (isset($password)) {
                                                                                                                                        echo $password;
                                                                                                                                    } ?>" placeholder="Enter your password 8-16 characters">
                                                <!-- <strong class="text-warning ">Notice:</strong>  <small class="text-danger">
                                                (You must be add symbos your password ) @ # * $ % ^ &</small><br> -->
                                                <label class="password-toggle-btn">
                                                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i>
                                                </label>
                                                <span class="text-danger"><?php echo $password_error; ?> </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <i class="fas fa-lock"></i> <label for="su-password-confirm">Confirm password<span class=" text-danger">*</span></label>
                                            <div class="password-toggle">
                                                <input class="form-control " type="password" id="su-password-confirm" name="conpassword" value="<?php if (isset($conpassword)) {
                                                                                                                                                    echo $conpassword;
                                                                                                                                                } ?>" placeholder="Enter your confirm password">
                                                <label class="password-toggle-btn">
                                                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i>
                                                </label>
                                                <span class="text-danger"><?php echo $conpassword_error; ?> </span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signup" name="checked" checked="<?php if (isset($checked)) {
                                                                                                                                                        echo $checked;
                                                                                                                                                    } ?>">
                                                <label class="custom-control-label" for="checkbox-signup">
                                                    I accept <a href="javascript: void(0);">Terms and Conditions</a>
                                                </label>
                                            </div>
                                            <span class="text-danger"><?php echo $checked_error; ?> </span>
                                        </div>
                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-primary btn-block btn-shadow" type="submit" name="signup">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have account? <a href="pages-login" class="text-dark font-weight-bold ml-1">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="cz-handheld-toolbar">
        <div class="d-table table-fixed w-100">
            <a class="d-table-cell cz-handheld-toolbar-item" href="/"><span class="cz-handheld-toolbar-icon"><i class="czi-home"></i></span><span class="cz-handheld-toolbar-label">Home</span></a>
            <a class="d-table-cell cz-handheld-toolbar-item" href="/pages-login"><span class="cz-handheld-toolbar-icon"><i class="fas fa-sign-in-alt"></i></span><span class="cz-handheld-toolbar-label">Login</span></a>
        </div>
    </div> -->
    <script src="vendor/jquery/dist/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="js/theme.min.js"></script>
</body>

</html>