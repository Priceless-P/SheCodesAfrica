<? require_once APPROOT.'/views/incl/header.php'; ?>
 <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
          <? if(!isLoggedIn()){
        redirect('page_blank');
      } ?>
        
      <!-- partial:partials/_sidebar.html -->
      <? require_once APPROOT.'/views/incl/sidenav.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
 <? require_once APPROOT.'/views/incl/topnav.php'; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <? flash('login_success') ?>
            
                  
                  
           <div class="row d-flex justify-content-center" style="margin-top:5%"> 
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Take test</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><a  href="quiz">Click here</a></h2>
                          <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                        </div>
                       to start
                      
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>View Results</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0" ><a href="results" style="color:#50C878">Click here</a></h2>
                          <p class="text-danger ms-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> </h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
               
              
              </div>
              
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © PHP TEST 2022</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <? require_once APPROOT.'/views/incl/footer.php'; ?>