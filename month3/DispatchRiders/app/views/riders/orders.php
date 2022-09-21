<?php require_once APPROOT. '/views/riders/dashboard/header.php';
require_once APPROOT. '/views/riders/dashboard/sidenav.php';?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<?php
require_once APPROOT. '/views/riders/dashboard/topnav.php';

?>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Order History</h6>
               
                 <?php $orders = $data['order']; ?>
                 
             </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Package Name</th>
                      <!--<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Value</th>-->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rider</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PickUp</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Drop Off</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment Method</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                    </tr>
                  </thead>
                  <tbody> 
                  <? if ($orders): ?>
                     
                      <?php foreach ($orders as $order): ?>
                   
                      
                    <tr>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php if ($order->package_name)
                        echo $order->package_name;
                        else
                        echo "No entry"?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $order->customer; ?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $order->pickup; ?> </span>
                      </td>
                    
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $order->dropoff; ?> </span>
                      </td>
                      
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $order->price; ?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $order->payment_method; ?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $order->date; ?> </span>
                      </td>
                  
                    </tr>
                    <? endforeach; ?>
                    <? else : ?>
                    <tr>
                    <td class="align-middle text-center text-sm ">
                    <span class="text-xs font-weight-bold">You currently have no Order</span>
                    </td>
                    </tr>
                    <? endif ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <?php 
require_once APPROOT. '/views/riders/dashboard/footer.php';?>
 </div>
  </main>
  <?php
require_once APPROOT. '/views/riders/dashboard/script.php';

?>