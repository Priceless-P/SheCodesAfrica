var currentTab = 0;
document.addEventListener("DOMContentLoaded", function(event) { 
            showTab(currentTab);           
});

            function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
            }

            function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              
              if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                // return false;
                //alert("sdf");
                document.getElementById("all-steps").style.display = "none";                
              }
              showTab(currentTab);
            }

            function validateForm() {
              var x, y, i, valid = true;
              x = document.getElementsByClassName("tab");
              y = x[currentTab].getElementsByTagName("input");
              
              if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
              }
              return valid;
            }
            
            function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
