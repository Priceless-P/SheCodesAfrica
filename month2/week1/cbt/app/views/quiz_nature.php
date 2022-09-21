<? require_once APPROOT.'/views/incl/header.php'; ?>
<div class="container-scroller">
     
          <? if(!isLoggedIn()){
        redirect('page_blank');
      } ?>
        
      <!-- partial:partials/_sidebar.html -->
      <? require_once APPROOT.'/views/incl/sidenav.php'; ?>
       <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
 <? require_once APPROOT.'/views/incl/topnav.php'; ?>
  <div class="main-panel">
          <div class="content-wrapper">
             
            <div class="row d-flex justify-content-center" style="margin-top:5%">
                
<div class="col-md-6 grid-margin stretch-card ">
    <form class="my-auto" id ="regForm" method="POST" action="">
        <div class="card">
           
            <div class="card-body">
                <h2>Science and Nature</h2>
              
                 <? foreach ($data['queries'] as $query):
                    
                     //echo $query->question;
                 ?>
                    
                         <div class="tab">
                             
                        <h4 class="card-title"><?php echo $query->question ?></h4>
                             
                                 <?  $option = array();
                                 
                                     $option[0] = $query->incorrect_answers0;
                                     $option[1] = $query->incorrect_answers1;
                                     $option[2] = $query->correct_answer;
                                     $option[3] = $query->incorrect_answers2;
                                     shuffle($option);?>
                    <div class="form-check">
    <label class="form-check-label" for="radio4">
                   <input type="radio" class="form-check-input" id="radio4" name="<? echo "$query->id" ?>" value="<? echo $option[0] ?>"> <? echo  $option[0]; ?> 
                   </label>
                   </div>
                   <div class="form-check">
    <label class="form-check-label" for="radio5">
                   <input type="radio" class="form-check-input" id="radio5" name="<? echo "$query->id" ?>" value="<? echo $option[1] ?>"> <? echo  $option[1]; ?> 
                   </label>
                   </div>
                   <? if ((isset($option[2])) &&((isset($option[3])))): ?>
                   <div class="form-check">
                       
    <label class="form-check-label" for="radio2">
                   <input type="radio" class="form-check-input" id="radio2" name="<? echo "$query->id" ?>" value="<? echo $option[2] ?>"> <? echo  $option[2]; ?> 
                   </label>
                   </div>
                   <div class="form-check">
    <label class="form-check-label" for="radio1">
                   <input type="radio" class="form-check-input" id="radio1" name="<? echo "$query->id" ?>" value="<? echo $option[3] ?>"> <? echo  $option[3]; ?> 
                   </label>
                   </div>
                   <?endif ?>
                   
                <div style="overflow:auto;">
                    <div style="float:right;">
                    <button type="button" class="btn btn-outline-danger btn-fw" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                     <button type="button"class="btn btn-outline-primary btn-fw" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
             </div>
         </div> 
 
 <?php 

 endforeach ?>
 <div style="text-align:center;margin-top:40px;color:white;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    
  </div>

                    
                </div>
              </div>
       </form>       
              </div>
<? require_once APPROOT.'/views/incl/footer.php'; ?>
