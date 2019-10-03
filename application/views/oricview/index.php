<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Faculty Registration Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/bootstrap/css/bootstrap.css';?>"></link> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url().'bootstrap/css/custom.css';?>"></link>
    <script type="text/javascript" src="<?php echo base_url().'bootstrap/js/jquery.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'bootstrap/js/bootstrap.js';?>"></script>

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
                    <img src="<?php echo base_url().'bootstrap/img/logo.png'?>" alt="" class="logo" height="100px">
                </div>
               
            </div>
            <div class="col">
                 <div>
                    <img src="<?php echo base_url().'bootstrap/img/oricicp.jpg'?>" alt="" class=" float-right" height="100px">
                </div>
            </div>
        </div>
         </div>
    </header>
    <main>
<!-----------------------------success Message----------------->
 <?php if($this->session->flashdata('success')):?>
    <div class="container">
        <div class="col-md-6 col-md-offset-6  alert alert-success">
        <?php echo $this->session->flashdata('success');?>
        </div>
    </div>
  <?php endif;?>
<div class="container">
 <div class="row">
    <div class="col-md-6">
       <a href="<?=base_url().'admincontroller'?>" class="btn btn-success">Login</a>
    </div>
  
 </div> 
</div>


<!-------------------------------------------------------------->
	<div class="container">
<div class="card" style="width:600px;"> 
  <div class="card-body">
    <?php echo form_open('userdata/insert','post');?>
    
    <!-- adapted the w3 version into a bootstrap flatly 
https://www.w3schools.com/howto/howto_js_form_steps.asp -->
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
    	<h1 class="text-center" style="color: #660000">Teaching/Staff Registration</h1>
    	<fieldset class="addr">
   <legend class="addr">Personal Information</legend>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Name" name="Name" value='<?=set_value("Name")?>'>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Designation" name="Designation" value='<?=set_value("Designation")?>'>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Qualification" name="qualification" value='<?=set_value("qualification")?>'>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" name="email" value='<?=set_value("email")?>'>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Contact" name="contact" value='<?=set_value("contact")?>'>
      </div>
       <div class="form-group">
        <input type="text" class="form-control" placeholder="University" name="University" value='<?=set_value("University")?>'>
      </div> 
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Department" name="Department" value='<?=set_value("Department")?>'>
      </div> 
         <div class="form-group">
        <input type="text" class="form-control" placeholder="Year" name="Year" value='<?=set_value("Year")?>'>
      </div>
 </fieldset>
<!-- <fieldset class="addr">
    <legend class="addr">Education Details</legend>
   <div class="form-group">
        <input type="text" class="form-control" placeholder="Qualification" name="Qualification" value='<?=set_value("doq")?>'>
      </div> 
      
  
 </fieldset> -->
 <fieldset class="addr">
    <legend class="addr">EMPLOYMENT RECORD</legend>
   <div class="form-group">
      <input type="text" class="form-control" name="emppost" placeholder="Post" value='<?=set_value("post")?>'> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" name="empuniversity" placeholder="University" value='<?=set_value("university")?>'> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" name="empfrom" placeholder="From" value='<?=set_value("empfrom")?>'> 
   </div> 
    <div class="form-group">
      <input type="text" class="form-control" name="empto" placeholder="to" value='<?=set_value("empto")?>'> 
   </div> 
  
 </fieldset>

 </fieldset>
 <fieldset class="addr">
    <legend class="addr">Academic distinctions</legend>
   <div class="form-group">
      <input type="text" class="form-control" name="acdpost" placeholder="Post" value='<?=set_value("acdpost")?>'> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" name="acduniversity" placeholder="University" value='<?=set_value("acduniversity")?>'> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" name="acdfrom" placeholder="From" value='<?=set_value("acdfrom")?>'> 
   </div> 
    <div class="form-group">
      <input type="text" class="form-control" name="acdto" placeholder="to" value='<?=set_value("acdto")?>'> 
   </div> 
  
 </fieldset>

    </div>

     
    <fieldset class="addr">
    <legend class="addr">Awards</legend>
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Award" name="award" value='<?=set_value("award")?>'> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Year" name="awardyear" value='<?=set_value("awardyear")?>'> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Institute" name="awardinstitute" value='<?=set_value("awardinstitute")?>'> 
   </div> 
  
 </fieldset> 


   <fieldset class="addr">
    <legend class="addr">RESEARCH OUTPUTS</legend>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Research Title" name="Researchtitle" value='<?=set_value("Researchtitle")?>'> 
   </div> 
   <div class="form-group">
    <textarea class="form-control" placeholder="Research Details" name="Researchdetails" value='<?=set_value("Researchdetails")?>' id="" cols="30" rows="10" ></textarea>
      <!-- <input type="textarea" class="form-control" placeholder="Details" name="Details" value='<?=set_value("Details")?>'>  -->
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Institute" name="Researchinstitute" value='<?=set_value("Researchinstitute")?>'> 
   </div> 
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Year" name="Researchyear" value='<?=set_value("Researchyear")?>'> 
   </div>  
  
 </fieldset>  


 <fieldset class="addr">
    <legend class="addr">Students Supervised</legend>
   <div class="form-group">
      <textarea class="form-control" placeholder="eg. 31 PhDs, 129 MPhil " name="Superviseddetails" value='<?=set_value("Superviseddetails")?>' id="" cols="30" rows="10" ></textarea>
   </div> 
  
  
 </fieldset>  
  <fieldset class="addr">
    <legend class="addr">REPRESENTATION IN THE SCIENTIFIC BODIES</legend>
   <div class="form-group">
       <textarea class="form-control" placeholder="eg. Chief Patron: Crying Sky Ambassadors Kennesaw State University (CSA-Pakistan Chapter)" name="Scientficdetails" value='<?=set_value("Scientficdetails")?>' id="" cols="30" rows="10" ></textarea>
   </div> 
  <!--  <div class="form-group">
      <input type="text" class="form-control" placeholder="Representation Body 2" name="representation2" value='<?=set_value("representation2")?>'> 
   </div> 
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Representation Body 3" name="representation3" value='<?=set_value("representation3")?>'> 
   </div> 
   -->
 </fieldset>



  <fieldset class="addr">
    <legend class="addr">LIST OF PUBLICATIONS</legend>
   <div class="form-group">
       <textarea class="form-control" placeholder="eg.Khan, A., N. Ali, W. Shafique, G. ur Rahman, S. Khan, G. Rahman, B. A Mian, N. Akbar and H. Ahmad. 2019. Phylogenetic study of 46 Ancient Mitochondrial Human Genomes. Adv. in Life Sci. 6(2): 71-75." name="Publicationsdetails" value='<?=set_value("Publicationsdetails")?>' id="" cols="30" rows="10" ></textarea>
   </div> 
   
  
 </fieldset>

     
    
  <fieldset class="addr">
    <legend class="addr">BOOKS AND PROCEEDINGS</legend>
   <div class="form-group">
<textarea class="form-control" placeholder="eg.Khan, W., S. M. Khan and H. Ahmad, 2018. Ethno-ecology, Human Health and Plants of the Thandiani Sub Forest Division, Abbottabad, KP, Pakistan. In Plant and Human Health. (1). 547-567). Springer, Cham." name="Bookdetails" value='<?=set_value("Bookdetails")?>' id="" cols="30" rows="10" ></textarea>   </div> 
   
  
 </fieldset>

 <fieldset class="addr">
    <legend class="addr">PhD Supervised</legend>
   <div class="form-group">
<textarea class="form-control" placeholder="eg.Shafqat, N. 2017. Potential use of tertiary gene pool of wild grass as a biotic and abiotic stress tolerant source for hexaploid wheat improvement. PhD thesis, Department of Genetics Hazara University, Mansehra, Pakistan. (Evaluation stage)." name="Phdsuperviseddetails" value='<?=set_value("Phdsuperviseddetails")?>' id="" cols="30" rows="10" ></textarea>   </div> 
   
  
 </fieldset>
      <fieldset class="addr">
    <legend class="addr">MPhil Supervised</legend>
   <div class="form-group">
<textarea class="form-control" placeholder="eg.Khan, M. 2017. Study of mtDNA in the young deaf population of Abbottabad District. MPhil thesis. Department of Genetics Hazara University Mansehra." name="MPhilSuperviseddetails" value='<?=set_value("MPhilSuperviseddetails")?>' id="" cols="30" rows="10" ></textarea>   </div> 
   
  
 </fieldset>
  
   <fieldset class="addr">
    <legend class="addr">Projects Completed</legend>
   <div class="form-group">
<textarea class="form-control" placeholder="eg.Muhammad, K. and H. Ahmad. 2012. Marker assisted selection of rust resistance in sugar cane. One year Startup Research Grant, HRD/HEC grant (Rs. 0.645 million)." name="Projectsdetails" value='<?=set_value("Projectsdetails")?>' id="" cols="30" rows="10" ></textarea>    </div> 
   
  
 </fieldset>

 <fieldset class="addr">
    <legend class="addr">Selected Conferences, Meetings etc.</legend>
   <div class="form-group">
<textarea class="form-control" placeholder="eg.Ahmad, H. 2015. Evaluation of production technologies for seed yield of Iron Weed. November 01-05. II. International Plant Breeding Congress & Eucarpia-oil and protein crops section conference. Antalya / Turkey." name="Conferencesdetails" value='<?=set_value("Conferencesdetails")?>' id="" cols="30" rows="10" ></textarea>    </div> 
   
  
 </fieldset>

  <fieldset>
  <button type="submit" name="button" value="Submit" class="form-control btn btn-primary">Submit</button>
  
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