<? require_once APPROOT .'/views/incl/header.php' ; ?>
 <div class="container-scroller">
   
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
                
              <div class="card-body px-5 py-5">
                    <? flash('reg') ?>
                <h3 class="card-title text-left mb-3">Register</h3>
                <form method="POST" action="">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text"name="username" class="form-control p_input"style="color:white" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control p_input"style="color:white" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control p_input"style="color:white" required>
                  </div>
                    
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="login"> Sign In</a></p>
      
                 
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
<? require_once APPROOT .'/views/incl/footer.php' ;?>