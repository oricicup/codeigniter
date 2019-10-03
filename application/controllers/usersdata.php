<?php
class usersdata extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
	$this->load->model('userdata_model');
   } 
  function index()
  {
    //echo"Hello guys how are you all?";
  }



	
	function insert()
	{
		
		//echo"Heloo Guys how are you all";

		if($_POST)
		{
			$data=array(
				// Personal Information
				'empname'=>$this->input->post('Name'),
				'empdesig'=>$this->input->post('Designation'),
				'empqualifacation'=>$this->input->post('qualification'),
				'empemail'=>$this->input->post('email'),
				'empcontact'=>$this->input->post('contact'),
				// Education Details
				'university'=>$this->input->post('University'),
				'Department'=>$this->input->post('Department'),
				'Year'=>$this->input->post('Year'),

				// EMPLOYMENT RECORD
				'emppost'=>$this->input->post('post'),
				'empuniversity'=>$this->input->post('university'),
				'empfrom'=>$this->input->post('empfrom'),
				'empto'=>$this->input->post('empto'),
 
 					// Academic Destination
				'acdpost'=>$this->input->post('acdpost'),
				'acduniversity'=>$this->input->post('acduniversity'),
				'acdfrom'=>$this->input->post('acdfrom'),
				'acdto'=>$this->input->post('acdto'),
					// Awards
				'award'=>$this->input->post('award'),
				'awardyear'=>$this->input->post('awardyear'),
				'awardinstitute'=>$this->input->post('awardinstitute'),

				// Research Outputs
				'Researchtitle'=>$this->input->post('Researchtitle'),
				'Researchdetails'=>$this->input->post('Researchdetails'),
				'Researchinstitute'=>$this->input->post('Researchinstitute'),
				'Researchyear'=>$this->input->post('Researchyear'),

				// Students Supervised
				'Superviseddetails'=>$this->input->post('Superviseddetails'),

				// >REPRESENTATION IN THE SCIENTIFIC BODIES
				'Scientficdetails'=>$this->input->post('Scientficdetails'),

				// 'representation1'=>$this->input->post('representation1'),
				// 'representation2'=>$this->input->post('representation2'),
				// 'representation3'=>$this->input->post('representation3'),

				// LIST OF PUBLICATIONS
				'Publicationsdetails'=>$this->input->post('Publicationsdetails'),

				// BOOKS AND PROCEEDINGS
				'Bookdetails'=>$this->input->post('Bookdetails'),
				// 'books2'=>$this->input->post('books2'),
				// 'books3'=>$this->input->post('books3'),

				// 'publication1'=>$this->input->post('books1'),
				// 'publication2'=>$this->input->post('publication2'),
				// 'publication3'=>$this->input->post('publication3'),

				// BPhD Supervised
				'Phdsuperviseddetails'=>$this->input->post('Phdsuperviseddetails'),


				// MPill Supervised
				'MPhilSuperviseddetails'=>$this->input->post('MPhilSuperviseddetails'),

				// Projects Completed
				'Projectsdetails'=>$this->input->post('Projectsdetails'),
				// 'project2'=>$this->input->post('project2'),
				// 'project3'=>$this->input->post('project3')

				// Selected Conferences, Meetings etc
				'Conferencesdetails'=>$this->input->post('Conferencesdetails')
			
			);
			 $yes=$this->userdata_model->insertdata($data);
			 if($yes)
			 {
			 	$this->session->set_flashdata('success','Your Form is successfully Submitted');
			 	$this->load->view('oricview/index.php');
			 	
			 }
		}
		
	}
}
?>


<!-- 
$data=array(
				'empname'=>$this->input->post('Name'),
				'empdesig'=>$this->input->post('Designation'),
				'empqualifacation'=>$this->input->post('Qualification'),
				'empemail'=>$this->input->post('email'),
				'empcontact'=>$this->input->post('contact'),
				'doq'=>$this->input->post('doq'),
				'doi'=>$this->input->post('doi'),
				'Department'=>$this->input->post('Department'),
				'Year'=>$this->input->post('Year'),
				'post'=>$this->input->post('post'),
				'university'=>$this->input->post('university'),
				'from'=>$this->input->post('from'),
				'award'=>$this->input->post('award'),
				'year'=>$this->input->post('year'),
				'in'=>$this->input->post('in'),
				'routput1'=>$this->input->post('routput1'),
				'Researchdetails'=>$this->input->post('Researchdetails'),
				'Researchinstitute'=>$this->input->post('Researchinstitute'),
				'representation1'=>$this->input->post('representation1'),
				'representation2'=>$this->input->post('representation2'),
				'representation3'=>$this->input->post('representation3'),
				'books1'=>$this->input->post('books1'),
				'books2'=>$this->input->post('books2'),
				'books3'=>$this->input->post('books3'),
				'publication1'=>$this->input->post('books1'),
				'publication2'=>$this->input->post('publication2'),
				'publication3'=>$this->input->post('publication3'),
				'Projectsdetails'=>$this->input->post('Projectsdetails'),
				'project2'=>$this->input->post('project2'),
				'project3'=>$this->input->post('project3') -->

