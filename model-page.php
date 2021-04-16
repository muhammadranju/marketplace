
  <?php
if(session_status()==PHP_SESSION_NONE){
  session_start();

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
        login(chak_data($email),chak_data($password));
    }
    if ($password && $password) {
        $password_error = 'Incorrect password not match';
        $submit = false;
    }
}

?>


  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <img width="142" src="img/pikslide-logo-2.png" alt="Pikslide" />
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/" method="POST" class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signup-tab">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                <i class="fas fa-envelope"></i> <label for="su-email">Email address<strong class="text-danger">*</strong></label>
                  <input class="form-control" type="email" name="email" id="su-email"  value="<?php if (isset($email)) {echo $email;} ?>" placeholder="Enter your email" >
                  <strong class="text-danger"><?php echo $email_error; ?> </strong>
                  <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group ">
                <i class="fas fa-lock"></i> <label for="su-password">Password<strong class="text-danger">*</strong></label>
                  <div class="password-toggle">
                    <input class="form-control" type="password" name="password" id="su-password" placeholder="Enter your password" >
                    <strong class="text-danger m-2"><?php echo $password_error; ?></strong>
                    <label class="password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <button class="btn btn-primary btn-block btn-shadow " name="login" type="submit">Login</button>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
