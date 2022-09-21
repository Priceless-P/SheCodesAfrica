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
                 <? flash('result')?>
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                  
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Subjects </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="color:white;">Computer Science  </td>
                            <td style="color:white;"> 
                            <a href="quiz_comp" class="btn btn-inverse-success btn-fw">Start Quiz</a>
                            </td>
                          </tr>
                           <tr>
                            <td style="color:white;">Science and Nature </td>
                            <td style="color:white;"> 
                            <a href="quiz_nature" class="btn btn-inverse-success btn-fw">Start Quiz</a>
                            </td>
                          </tr>
                           <tr>
                            <td style="color:white;">General Knowledge</td>
                            <td style="color:white;"> 
                            <a href="quiz_general" class="btn btn-inverse-success btn-fw">Start Quiz</a>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
  
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
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