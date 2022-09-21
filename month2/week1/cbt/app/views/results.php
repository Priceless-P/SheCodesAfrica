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
              
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><? $_SESSION['user_name'] ?></h4>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                          <? if($data['results']): ?>
                          
              
                        <thead>
                          <tr>
                            <th> Subjects </th>
                            <th> Scores </th>
                          </tr>
                        </thead>
                        <tbody>
                            <? foreach ($data['results'] as $result) : ?>
                          <tr>
                            <td style="color:white;"> <? echo $result->subject ?> </td>
                            <td style="color:white;"> <? echo "$result->scores %" ?></td>
                          </tr>
                          <? endforeach ?>
                        </tbody>
                        <? else: ?>
                        <tr>You currently have no results</tr>
                        <?endif ?>
                      </table>
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