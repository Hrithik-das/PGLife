<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="login-heading">Login with PGLife</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form id="login-form" class="form d-grid gap-3" role="form" method = "POST" action = "api/login_submit.php">
            <div class="input-group form-group">
              <div class="input-group-prependr">
                <span class="input-group-text h-100 d-inline-block" id="border-radius">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text h-100 d-inline-block" id="border-radius">
                  <i class="fas fa-lock"></i>
                </span>
              </div>
              <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-block btn-primary col-12">Login</button>
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <span>
            <a href="#" class="text-decoration-none" data-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signup-modal">Click here</a>
            to register a new account
          </span>
        </div>
      </div>
    </div>
  </div>