  <?php require_once APPROOT. '/views/users/incl/header.php'; 
 require_once APPROOT. '/views/users/incl/sidenav.php';?>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar starts -->
    <?php require_once APPROOT. '/views/users/incl/topnav.php'; ?>
 <section>
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
      
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Edit your Profile</h3>
                 
                </div>
                <div class="card-body">
                  
                  <form role="form" method="POST" action="">
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" name="email" value="  <? echo $data['email'] ?>">
                    </div>
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="phone" class="form-control" placeholder="Password" aria-label="username" aria-describedby="password-addon" name="username" value = "<? echo $data['username'] ?>">
                    </div>
                    <label>Phone</label>
                    <div class="mb-3">
                      <input type="phone" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="phone" value = "<? echo $data['phone'] ?>">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="submit">Submit</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
    
    </section>
    <?php require_once APPROOT. '/views/users/incl/footer.php'; ?>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <?php require_once APPROOT. '/views/users/incl/script.php'; ?>