<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Faculty Registration Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
   
}
main{
	padding-top: 40px;
}
.card{
    margin-left: auto;
    margin-right: auto;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}


/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: rgba( 0, 26, 51, 0.8);
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: rgba( 0, 26, 51, 0.8);
}

fieldset.addr
{
  border: 1px groove #ddd !important;
  padding: 0 1.4em 1.4em 1.4em !important;
  margin: 0 0 1.5em 0 !important;
  -webkit-box-shadow:  0px 0px 0px 0px #000;
  box-shadow:  0px 0px 0px 0px #000;
}
legend.addr
{
  font-size: 1.2em !important;
  font-weight: bold !important;
  text-align: left !important;
  width:auto;
  padding:0 10px;
  border-bottom:none;
  color: #660000;
}
button{

  background: #660000 !important;
  border: #660000 !important;
 
	</style>
</head>
<body>

	<header style="border-bottom: 2px solid #660000; padding: 10px 0;">
        
        <div class="container">
            <div class="row">
                
           
            <div class="col">
                <div>
                    <img src="img/logo.png" alt="" class="logo" height="100px">
                </div>
               
            </div>
            <div class="col">
                 <div>
                    <img src="img/oricicp.jpg" alt="" class=" float-right" height="100px">
                </div>
            </div>
        </div>
         </div>
    </header>
    <main>

	<div class="container">
<div class="card" style="width:600px;"> 
  <div class="card-body">
  <form class="form-group" action="">
    <!-- adapted the w3 version into a bootstrap flatly 
https://www.w3schools.com/howto/howto_js_form_steps.asp -->
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
    	<h1 class="text-center" style="color: #660000">Teaching/Staff Registration</h1>
    	<fieldset class="addr">
   <legend class="addr">Personal Information</legend>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Name" name="Name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Designation" name="Designation">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Qualification" name="Qualification">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Contact" name="contact">
      </div>
 </fieldset>
<fieldset class="addr">
    <legend class="addr">Education Details</legend>
   <div class="form-group">
        <input type="text" class="form-control" placeholder="Qualification" name="Qualification">
      </div> 
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Institute" name="Institute">
      </div> 
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Department" name="Department">
      </div> 
         <div class="form-group">
        <input type="text" class="form-control" placeholder="Year" name="year">
      </div> 
  
 </fieldset>
 <fieldset class="addr">
    <legend class="addr">EMPLOYMENT RECORD</legend>
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Name"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Institute"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Year"> 
   </div> 
  
 </fieldset>

    </div>

     
    <fieldset class="addr">
    <legend class="addr">Awards</legend>
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input1"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input2"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input3"> 
   </div> 
  
 </fieldset> 


   <fieldset class="addr">
    <legend class="addr">RESEARCH OUTPUTS</legend>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Input1"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input2"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input3"> 
   </div>  
  
 </fieldset>  

  <fieldset class="addr">
    <legend class="addr">REPRESENTATION IN THE SCIENTIFIC BODIES</legend>
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input1"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input2"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input3"> 
   </div> 
  
 </fieldset>  

     
    
  <fieldset class="addr">
    <legend class="addr">BOOKS AND PROCEEDINGS</legend>
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input1"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input2"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input3"> 
   </div> 
  
 </fieldset>

     
  <fieldset class="addr">
    <legend class="addr">LIST OF PUBLICATIONS</legend>
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input1"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input2"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input3"> 
   </div> 
  
 </fieldset>
   <fieldset class="addr">
    <legend class="addr">Projects</legend>
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input1"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input2"> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Input3"> 
   </div> 
  
 </fieldset>

  <fieldset>
  <button  name="button" value="Submit" class="form-control btn btn-primary">Submit</button>
  
 </fieldset>
   
  </form>
  </div>
  
  </div>
  
</div>



</main>

<footer  class="text-center" style="position: relative; margin-top:10px ; background: #660000; padding: 20px 0px 10px 0; color: #fff">
   <p>Copyright © 2019 Islamia College Peshawar</p>
  </footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>



	<script type="text/javascript">
		
		var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("addr");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
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
	</script>
</body>
</html>