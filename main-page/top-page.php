<noscript>
  <iframe src="http://www.googletagmanager.com/ns?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
</noscript>
<!-- Sign in / sign up modal-->
<!-- Sign in / sign up modal-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
          <div class="form-group">
            <label for="si-email">Email address</label>
            <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
            <div class="invalid-feedback">Please provide a valid email address.</div>
          </div>
          <div class="form-group">
            <label for="si-password">Password</label>
            <div class="password-toggle">
              <input class="form-control" type="password" id="si-password" required>
              <label class="password-toggle-btn">
                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
              </label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap justify-content-between">
            <div class="custom-control custom-checkbox mb-2">
              <input class="custom-control-input" type="checkbox" id="si-remember">
              <label class="custom-control-label" for="si-remember">Remember me</label>
            </div><a class="font-size-sm" href="#">Forgot password?</a>
          </div>
          <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
        </form>
        <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
          <div class="form-group">
            <label for="su-name">Full name</label>
            <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
            <div class="invalid-feedback">Please fill in your name.</div>
          </div>
          <div class="form-group">
            <label for="su-email">Email address</label>
            <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
            <div class="invalid-feedback">Please provide a valid email address.</div>
          </div>
          <div class="form-group">
            <label for="su-password">Password</label>
            <div class="password-toggle">
              <input class="form-control" type="password" id="su-password" required>
              <label class="password-toggle-btn">
                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="su-password-confirm">Confirm password</label>
            <div class="password-toggle">
              <input class="form-control" type="password" id="su-password-confirm" required>
              <label class="password-toggle-btn">
                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <ul class="nav nav-tabs card-header-tabs" role="tablist">
          <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
          <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
        </ul>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body tab-content py-4">
        <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
          <div class="form-group">
            <label for="si-email">Email address</label>
            <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
            <div class="invalid-feedback">Please provide a valid email address.</div>
          </div>
          <div class="form-group">
            <label for="si-password">Password</label>
            <div class="password-toggle">
              <input class="form-control" type="password" id="si-password" required>
              <label class="password-toggle-btn">
                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
              </label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap justify-content-between">
            <div class="custom-control custom-checkbox mb-2">
              <input class="custom-control-input" type="checkbox" id="si-remember">
              <label class="custom-control-label" for="si-remember">Remember me</label>
            </div><a class="font-size-sm" href="#">Forgot password?</a>
          </div>
          <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
        </form>
        <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
          <div class="form-group">
            <label for="su-name">Full name</label>
            <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
            <div class="invalid-feedback">Please fill in your name.</div>
          </div>
          <div class="form-group">
            <label for="su-email">Email address</label>
            <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
            <div class="invalid-feedback">Please provide a valid email address.</div>
          </div>
          <div class="form-group">
            <label for="su-password">Password</label>
            <div class="password-toggle">
              <input class="form-control" type="password" id="su-password" required>
              <label class="password-toggle-btn">
                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="su-password-confirm">Confirm password</label>
            <div class="password-toggle">
              <input class="form-control" type="password" id="su-password-confirm" required>
              <label class="password-toggle-btn">
                <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
        </form>
      </div>
    </div>
  </div>
</div> -->