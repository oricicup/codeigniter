
<?php

$this->load->view('template/header');

?>



  

<body>
	<!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-center">We are showing you record of <?php echo $single_record->empname;?></h4>
			</div>
		</div>
		<div class="row">
			<div class="table-responsive">
			<div class="col-md-12">
				
					<table class="table-bordered table-condensed table-striped" >
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
							<td>Employement Post</td>
							<td>Employement institute</td>
							<td>From</td>
							<td>To</td>
							<td>Academic Post</td>
							<td>Academic Institute</td>
							<td>From</td>
							<td>Awards</td>
							<td>Year</td>
							<td>Institute</td>
							<td>Research Title</td>
							<td>Research Details</td>
							<td>Research Institute</td>
							<td>Research Year</td>
							<td>Students Supervised</td>
							<td>REPRESENTATION IN THE SCIENTIFIC BODIES</td>
							<td>LIST OF PUBLICATIONS</td>
							<td>BOOKS AND PROCEEDINGS</td>
							<td>PhD Supervised</td>
							<td>MPhil Supervised</td>
							<td>Projects Completed</td>
							<td>Selected Conferences, Meetings etc.</td>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $single_record->empname;?></td>
							<td><?php echo $single_record->empdesig;?></td>
							<td><?php echo $single_record->empqualifacation;?></td>
							<td><?php echo $single_record->empemail;?></td>
							<td><?php echo $single_record->empcontact;?></td>
							<td><?php echo $single_record->Department;?></td>
							<td><?php echo $single_record->Year;?></td>
							<td><?php echo $single_record->emppost;?></td>
							<td><?php echo $single_record->empuniversity;?></td>
							<td><?php echo $single_record->empfrom;?></td>
							<td><?php echo $single_record->empto;?></td>
							<td><?php echo $single_record->employementy;?></td>
							<td><?php echo $single_record->acdpost;?></td>
							<td><?php echo $single_record->acduniversity;?></td>
							<td><?php echo $single_record->acdfrom;?></td>
							<td><?php echo $single_record->acdto;?></td>
							<td><?php echo $single_record->award;?></td>
							<td><?php echo $single_record->awardyear;?></td>
							<td><?php echo $single_record->awardinstitute;?></td>
							<td><?php echo $single_record->Researchtitle;?></td>

							<td><?php echo $single_record->Researchdetails;?></td>
							<td><?php echo $single_record->Researchinstitute;?></td>
							<td><?php echo $single_record->Researchyear;?></td>
							<td><?php echo $single_record->Superviseddetails;?></td>
							<td><?php echo $single_record->Scientficdetails;?></td>
							<td><?php echo $single_record->Publicationsdetails;?></td>
							<td><?php echo $single_record->Bookdetails;?></td>
							<td><?php echo $single_record->Phdsuperviseddetails;?></td>
							<td><?php echo $single_record->MPhilSuperviseddetails;?></td>
							<td><?php echo $single_record->Projectsdetails;?></td>
							<td><?php echo $single_record->Conferencesdetails;?></td>
											


							
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
	<?php

$this->load->view('template/footer');

?>
</body>
</html>