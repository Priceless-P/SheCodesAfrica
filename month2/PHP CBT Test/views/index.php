<? require_once '/views/incl/header.php' ?>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your username and password</p>
            <form method="POST" action="Login.php">
              <div class="form-outline form-white mb-4">
                <input type="text" name="username" id="typeUsernamrX" class="form-control form-control-lg" />
                <label class="form-label" for="typeUsernamrX">Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <div class="form-check">
              <input name="remember" class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>


              <button name="login" class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

            </form>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="/register.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>