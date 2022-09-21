 <?php require_once APPROOT. '/views/riders/dashboard/header.php'; 
 require_once APPROOT. '/views/riders/dashboard/sidenav.php';
 flash('login_success');
 flash('profile_message');
 ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php 
    flash('login_success');
    flash('profile_message');

    $profile = $data['details']  ?>
         
<?php require_once APPROOT. '/views/riders/dashboard/topnav.php';  ?>
  
    <div class="container-fluid py-4">
         <h6 class="font-weight-bolder mb-0">Welcome <?php echo $profile->username ?></h6>
         <br>
         <?php  $order = $data['orders']  ?>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Earnings</p>
                        <? $earning = 0;
                        foreach ($order as $ord)
                        $earning = $earning + $ord->price;
                     ?>
                      <?php if (isset($earning)): ?>
                      <h5 class="font-weight-bolder mb-0">
                      <? echo  "₦$earning";?>
                      </h5>
                      <? else: ?>
                       <h5 class="font-weight-bolder mb-0">
                      <? echo "₦0"; ?>
                    </h5>
                    <? endif;?>
                    
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
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Orders</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php
                    if (isset($data['orderCount']))
                      echo  $data['orderCount'];
                      else
                      echo "0";
                      ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total number of clients</p>
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
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
     <? flash('details_inserted') ?>
      <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                 
                <div class="col-lg-6 col-7">
                  <h6>My Details</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Click <a href="<?php echo URLROOT; ?>/riders/editProfile/<?php echo $profile->id ?>" class="text-xs font-weight-bold">here</a></span> to Edit
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
                      <!--<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Value</th>-->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Value</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                     
                    
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Full Name</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $profile->fullname; ?> </span>
                      </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Username</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $profile->username; ?> </span>
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
                        <span class="text-xs font-weight-bold"><?php echo $profile->email; ?> </span>
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
                        <span class="text-xs font-weight-bold"><?php echo $profile->phone; ?> </span>
                      </td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Other Settings</h6>
              <?php 
                   $detail = $data['settings'];
                  ?>
                  <?php if(($detail[0]->routes)): ?>
                 <p class="text-xs font-weight-bold">
                  <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                  Weldone! Your details are set</p>
                <? else : ?>
                <p>
                <a href="<?php echo URLROOT; ?>/riders/edit_details/<?php echo $profile->id ?>" class="text-xs font-weight-bold">Click
                <span class="font-weight-bold">here</span></a> to set
              </p>
              <? endif ?>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-bell-55 text-success text-gradient"></i>
                  </span>
                  
                  
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Towns/ Cities you deliver to</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php if(($detail[0]->routes))
                                echo $detail[0]->routes;
                                else
                                echo "Not specified"?></p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-html5 text-danger text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Type of Packages you deliver</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php if($detail[0]->type_of_delivery) 
                                echo $detail[0]->type_of_delivery;
                                else
                                echo "Not specified"?></p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-cart text-info text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Days you are available for work</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php if($detail[0]->days_of_work) 
                                echo $detail[0]->days_of_work;
                                else
                                echo "Not specified"?></p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-credit-card text-warning text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Hours you are available for work</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php if($detail[0]->time_of_work) 
                                echo $detail[0]->time_of_work;
                                else
                                echo "Not specified"?>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="ni ni-key-25 text-primary text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Means of Delivery <i>(motocycle, vehicle etc)</i></h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php if($detail[0]->vehicle_type) 
                                echo $detail[0]->vehicle_type;
                                else
                                echo "Not specified"?></p>
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <i class="ni ni-money-coins text-dark text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Price range</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php if($detail[0]->price) 
                                echo '₦'. $detail[0]->price;
                                else
                                echo "Not specified"?></p>
                  </div>
                  
                </div>
           <br >
           <div class="timeline-block ">
                  <span class="timeline-step">
                    <i class="ni ni-key-25 text-primary text-gradient"></i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Public Photo</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php if($detail[0]->filename) 
                                echo "Photo available";
                                else
                                echo "Not specified"?></p>
                  </div>
                </div>
           
           
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
require_once APPROOT. '/views/riders/dashboard/footer.php';

?>
    </div>
  </main>
  <?php require_once APPROOT. '/views/riders/dashboard/script.php'; ?>
  

</html>