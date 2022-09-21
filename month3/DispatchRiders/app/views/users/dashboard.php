
 <?php require_once APPROOT. '/views/users/incl/header.php'; 
 require_once APPROOT. '/views/users/incl/sidenav.php';?>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar starts -->
    <?php require_once APPROOT. '/views/users/incl/topnav.php'; ?>
    <!-- End Navbar -->
    <? $user = $data['user'] ?>
    <h6> <? echo "Welcome $user->username" ?></h6>
    <div class="container-fluid py-4">
      <div class="row">
         
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Orders</p>
                    <h5 class="font-weight-bolder mb-0">
                     <?php if (isset($data['orderCount']))
                      echo  $data['orderCount'];
                      else
                      echo "0";
                      ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php flash('order_sent'); 
       flash('profile_message');
       ?>
      <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>My Details</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Click <a href="<?php echo URLROOT; ?>/users/editProfile/<?php echo $user->id ?>" class="text-xs font-weight-bold">here</a></span> to Edit
                  </p>
                </div>
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Key</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Value</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Username</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $user->username; ?> </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Email</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $user->email; ?> </span>
                      </td>
                    </tr>
                  <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Phone Number</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $user->phone; ?> </span>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      <?php require_once APPROOT. '/views/users/incl/footer.php'; ?>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <?php require_once APPROOT. '/views/users/incl/script.php'; ?>
</body>

</html>