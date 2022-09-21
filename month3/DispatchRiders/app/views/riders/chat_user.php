<?php require_once APPROOT. '/views/riders/dashboard/header.php';
require_once APPROOT. '/views/riders/dashboard/sidenav.php';

?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php require_once APPROOT. '/views/riders/dashboard/topnav.php'; ?>

<div class= "container">
     <?php $users = $data['users'] ?>
    <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5 style="color:red">Active Chats</h5></th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($users as $user): ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                         <a href = "<?php echo URLROOT; ?>/riders/chats/<?php echo $user->id ?>"> <?php echo $user->username ?></a>
                     
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
