<?php require_once APPROOT. '/views/users/incl/header.php'; 
 require_once APPROOT. '/views/users/incl/sidenav.php';?>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar starts -->
    <?php require_once APPROOT. '/views/users/incl/topnav.php'; ?>
    
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Create New Order</h3>
                  <?php flash('rider_reg_success'); ?>
                  
                </div>
                <div class="card-body">
                  <form role="form" method="POST" method="">
                    <label>Package Name</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Package Name" aria-label="Email" aria-describedby="email-addon" name="package_name"required>
                    </div>
                    <label>Pickup Location</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Pickup Location" aria-label="Password" aria-describedby="password-addon" name="pickup" required>
                    </div>
                    <div class="mb-3">
                           <label>Drop Off Location</label>
                      <input type="text" class="form-control" placeholder="Pickup Location" aria-label="Password" aria-describedby="password-addon" name="dropoff" required>
                    </div>
                   
                    <div class="mb-3">
                      <select class="form-control" name="rider" required> 
                          <option value ="">-- Select a Driver --</option>
                           <?php
                           foreach ($data['riders'] as $rider): ?>
                        <option value="<?php echo $rider->username ?>"><?php echo "$rider->fullname"?> <?if($rider->location) echo "($rider->location)" ?></option>
<? endforeach ?>
                      </select>
                    </div>
                    
                    <div class="mb-3">
                           <label>Agreed Price (₦)</label>
                      <input type="text" class="form-control" placeholder="Price" aria-label="Password" aria-describedby="password-addon" name="price" required>
                    </div>
                    <div class="mb-3">
                           <label>Payment method</label>
                      <input type="text" class="form-control" placeholder="Pickup Location" aria-label="Password" aria-describedby="password-addon" name="payment_method" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="submit">Send</button>
                    </div>
                  </form>
               
            </div>
            
          </div>
        </div>
      </div>
    </section>
 <?php require_once APPROOT. '/views/users/incl/footer.php'; ?>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <?php require_once APPROOT. '/views/users/incl/script.php'; ?>
</body>

</html>