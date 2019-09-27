<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Faculty Registration Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'bootstrap/css/bootstrap.css';?>"></link>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url().'bootstrap/css/custom.css';?>"></link>
    <script type="text/javascript" src="<?php echo base_url().'bootstrap/js/jquery.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'bootstrap/js/bootstrap.js';?>"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-center">We are showing you record of <?php echo $single_record->empname;?></h4>
			</div>
		</div>
		<div class="row">
			<div class="table-responsive">
			<div class="col-md-12">
				
					<table class="table-bordered table-condensed table-striped">
					<thead>
						<tr>
							<td>Name</td>
							<td>Designation</td>
							<td>Qualification</td>
							<td>Email</td>
							<td>Contact</td>
							<td>Qualification</td>
							<td>Institute</td>
							<td>Department</td>
							<td>Year</td>
							<td>Employement Name</td>
							<td>Employement institute</td>
							<td>Employement Year</td>
							<td>Awards</td>
							<td>Researches</td>
							<td>Scientific Bodies</td>
							<td>Books</td>
							<td>Publications</td>
							<td>Projects</td>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $single_record->empname;?></td>
							<td><?php echo $single_record->empdesig;?></td>
							<td><?php echo $single_record->empqualifacation;?></td>
							<td><?php echo $single_record->empemail;?></td>
							<td><?php echo $single_record->empcontact;?></td>
							<td><?php echo $single_record->doq;?></td>
							<td><?php echo $single_record->doi;?></td>
							<td><?php echo $single_record->dod;?></td>
							<td><?php echo $single_record->doy;?></td>
							<td><?php echo $single_record->employementn;?></td>
							<td><?php echo $single_record->employementi;?></td>
							<td><?php echo $single_record->employementy;?></td>
							<td><?php echo $single_record->award1;?></td>
							<td><?php echo $single_record->routput1;?></td>
							<td><?php echo $single_record->representation1;?></td>
							<td><?php echo $single_record->books1;?></td>
							<td><?php echo $single_record->publication1;?></td>
							<td><?php echo $single_record->project1;?></td>
							
						</tr>
					</tbody>
				</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a class="btn btn-success"href="<?=base_url().'admincontroller/update_record/'.$single_record->employeeid?>">Edit</a>
				<a class="btn btn-danger"href="<?=base_url().'admincontroller/delete_record/'.$single_record->employeeid?>">Delete</a>
			</div>
		</div>
	</div>
</body>
</html>