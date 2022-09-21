<?php require_once APPROOT. '/views/users/incl/header.php'; 
 require_once APPROOT. '/views/users/incl/sidenav.php';?>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar starts -->
    <?php require_once APPROOT. '/views/users/incl/topnav.php'; ?>

<div class= "container">
            <?php $riders = $data['riders'] ?>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5 style="color:red">Active Chats</h5></th>
                      </tr>
                  </thead>
                  <tbody>
    <?php foreach ($riders as $rider): ?>
                 <tr>
                      <td>
                        <div class="d-flex px-2 py-1">

        <a href = "<?php echo URLROOT; ?>/users/chats/<?php echo $rider->id ?>"> <?php echo $rider->username ?></a>
       
					</div>
                        </div>
                      </td>
                      
                      
                    </tr>
                   <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
           
    

					
</div>
</main>
<?php 
require_once APPROOT. '/views/riders/dashboard/footer.php';
require_once APPROOT. '/views/riders/dashboard/script.php';
?>