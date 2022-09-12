<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body" id="modal-style">
          <form id="signup-form" class="form d-grid gap-3" role="form" method = "POST" action = "api/signup_submit.php">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text h-100 d-inline-block" id="border-radius">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text h-100 d-inline-block" id="border-radius">
                  <i class="fas fa-phone-alt"></i>
                </span>
              </div>
              <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10"
                minlength="10" required>
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text h-100 d-inline-block" id="border-radius">
                  <i class="fas fa-envelope"></i>
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

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text h-100 d-inline-block" id="border-radius">
                  <i class="fas fa-university"></i>
                </span>
              </div>
              <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlength="150"
                required>
            </div>

            <div class="form-group">
              <span>I'm a</span>
              <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
              <label for="gender-male">
              </label>
              <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
              <label for="gender-female">
                Female
              </label>
            </div>

            <div class="form-group d-grid gap-2 col-12 mx-auto">
              <button type="submit" class="btn btn-primary" >Create Account</button>
            </div>
          </form>
        </div>

        <div class="modal-footer justify-content-center">
          <span>Already have an account?
            <a href="#" data-dismiss="modal" class=" text-decoration-none" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a>
          </span>
        </div>
      </div>
    </div>
  </div>