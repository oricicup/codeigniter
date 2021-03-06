<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Faculty Registration Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"></link>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'bootstrap/css/bootstrap.css';?>"></link>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'bootstrap/css/custom.css';?>"></link>
  <script type="text/javascript" src="<?php echo base_url().'bootstrap/js/jquery.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'bootstrap/js/bootstrap.js';?>"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"></link>
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>
	$(document).ready( function () {
    $('#table').DataTable();
} );
</script>
</head>

<body class="">
	

  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->


	<?php $i=0;?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-center">Welcome To Admin View</h4>
				<p class="text-center">The Following peoples have submitted their records</p>		
			</div>		
		</div>

		</div>
	</div>

<!-----------------------------success Message----------------->
 <?php if($this->session->flashdata('login_success')):?>
    <div class="container">
        <div class="col-md-6 col-md-offset-6  alert alert-success">
        <?php echo $this->session->flashdata('login_success');?>
        </div>
    </div>
  <?php endif;?>
<!---------------------------------------------------------------->
<!-----------------------------success Message----------------->
 <?php if($this->session->flashdata('registered_success')):?>
    <div class="container">
        <div class="col-md-6 col-md-offset-6  alert alert-success">
        <?php echo $this->session->flashdata('registered_success');?>
        </div>
    </div>
  <?php endif;?>
  <!---------------------------------------------------------->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table-bordered table-condensed table-striped" id="table">
					<thead>
						<tr>
							<td>Seriel No</td>
							<td>Name</td>
							<td>Designation</td>
							<td>Qualification</td>
							<td>Email</td>
							<td>View Details</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($all as $staffs):?>
						<tr>
							<td><?php echo ++$i;?></td>
							<td><?php echo $staffs->empname;?></td>
							<td><?php echo $staffs->empdesig;?></td>
							<td><?php echo $staffs->empqualifacation;?></td>
							<td><?php echo $staffs->empemail;?></td>
							
							<td><a href="<?=base_url().'admincontroller/get_single_record/'.$staffs->employeeid;?>">View Details</a></td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
				</div>
			</div>
	</div>


</body>
</html>