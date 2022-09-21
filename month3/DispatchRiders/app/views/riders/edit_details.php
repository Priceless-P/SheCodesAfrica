<?php require_once APPROOT. '/views/riders/dashboard/header.php'; 
 require_once APPROOT. '/views/riders/dashboard/sidenav.php';?>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar starts -->
    <?php require_once APPROOT. '/views/riders/dashboard/topnav.php'; ?>
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Delivery Details</h3>
                  <?php flash('rider_deliver'); ?>
                  
                </div>
                <div class="card-body">
                  <form role="form" method="POST" method=""enctype='multipart/form-data'>
                      <label>Photo</label>
                      <div class="mb-3">
                       <input type="file" class="form-control" name="filename" id="filename" aria-describedby="inputGroupPrepend" required>
                    </div>
                       </div>
                    <label>Towns/Cities You deliver to</label>
                    <div class="mb-3">
                      <select id="states" class="form-control">
        <option value="" selected="selected">- Choose Location -</option>
        <option value="Abia">Abia</option>
        <option value="Adamawa">Adamawa</option>
        <option value="Akwa Ibom">Akwa Ibom</option>
        <option value="Anambra">Anambra</option>
        <option value="Bauchi">Bauchi</option>
        <option value="Bayelsa">Bayelsa</option>
        <option value="Benue">Benue</option>
        <option value="Borno">Borno</option>
        <option value="Cross River">Cross River</option>
        <option value="Delta">Delta</option>
        <option value="Ebonyi">Ebonyi</option>
        <option value="Edo">Edo</option>
        <option value="Ekiti">Ekiti</option>
        <option value="Enugu">Enugu</option>
        <option value="Federal Capital Territory">Federal Capital Territory</option>
        <option value="Gombe">Gombe</option>
        <option value="Imo">Imo</option>
        <option value="Jigawa">Jigawa</option>
        <option value="Kaduna">Kaduna</option>
        <option value="Kano">Kano</option>
        <option value="Katsina">Katsina</option>
        <option value="Kebbi">Kebbi</option>
        <option value="Kogi">Kogi</option>
        <option value="Kwara">Kwara</option>
        <option value="Lagos">Lagos</option>
        <option value="Nassarawa">Nassarawa</option>
        <option value="Niger">Niger</option>
        <option value="Ogun">Ogun</option>
        <option value="Ondo">Ondo</option>
        <option value="Osun">Osun</option>
        <option value="Oyo">Oyo</option>
        <option value="Plateau">Plateau</option>
        <option value="Rivers">Rivers</option>
        <option value="Sokoto">Sokoto</option>
        <option value="Taraba">Taraba</option>
        <option value="Yobe">Yobe</option>
        <option value="Zamfara">Zamfara</option>
</select>

                      </div>
             <div class="mb-3">
    <select class="form-control" id="gtr" name="location">- Select -</select>
                    </div>
                    </div>
                    <label>Type of packages You deliver </label>
                    <div class="mb-3">
                     <select  class="form-control" name="type_of_delivery">
        <option value="" selected="selected">- Choose Package Type -</option>
        <option value="Documents">Documents</option>
        <option value="Food">Food and Grocries</option>
        <option value="Boxes">Boxes</option>
        <option value="All">All Packages</option>
        </select>
                    </div>
                    <div class="mb-3">
                           <label>Days you are available for work</label>
                       <div class="mb-3">
                     <select class="form-control" name="days_of_work">
        <option value="" selected="selected">- Choose Available Days-</option>
        <option value="Monday - Wednesday">Monday - Wednesday</option>
        <option value="Friday - Saturdays">Friday - Saturdays</option>
        <option value="Sundays">Sundays</option>
        <option value="Everyday">Everyday</option>
        </select>
                    </div>
                    <div class="mb-3">
                             <label>Hours you are available for work</labe>
                        
                      <select class="form-control" name="time_of_work" required> 
                          <option value ="">-- Select Time --</option>
                           <option value ="6am to 12noon">6am to 12noon</option>
                           <option value ="12noon - 3pm">12noon - 3pm</option>
                           <option value ="3pm - 6pm">3pm - 6pm</option>
                            <option value ="8am - 6pm">8am - 6pm</option>
                             <option value ="Anytime">Anytime</option>
                      </select>
                    </div>
                    
                    <div class="mb-3">
                           <label> Price range per Delivery (₦)</label>
                      <input type="text" class="form-control" placeholder="example: 1000 - 5000" aria-label="Password" aria-describedby="password-addon" name="price" required>
                    </div>
                    <div class="mb-3">
                           <!--<label>Means of Delivery</label>-->
                     <select class="form-control" name="vehicle_type" required> 
                          <option value ="">-- Means of Delivery --</option>
                           <option value ="Motocycle">Motocycle / Bike</option>
                           <option value ="Van">Van</option>
                           <option value ="Bicycle">Bicycle</option>
                           <option value ="Motocycle/Bike, Van and Bicycle">All</option>
                           </select>
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
    </main>
<?php 
require_once APPROOT. '/views/riders/dashboard/footer.php';
require_once APPROOT. '/views/riders/dashboard/script.php';
?>