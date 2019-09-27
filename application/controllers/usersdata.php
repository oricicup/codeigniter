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
				'empname'=>$this->input->post('Name'),
				'empdesig'=>$this->input->post('Designation'),
				'empqualifacation'=>$this->input->post('Qualification'),
				'empemail'=>$this->input->post('email'),
				'empcontact'=>$this->input->post('contact'),
				'doq'=>$this->input->post('doq'),
				'doi'=>$this->input->post('doi'),
				'dod'=>$this->input->post('dod'),
				'doy'=>$this->input->post('doy'),
				'employementn'=>$this->input->post('employementn'),
				'employementi'=>$this->input->post('employementi'),
				'employementy'=>$this->input->post('employementy'),
				'award1'=>$this->input->post('award1'),
				'award2'=>$this->input->post('award2'),
				'award3'=>$this->input->post('award3'),
				'routput1'=>$this->input->post('routput1'),
				'routput2'=>$this->input->post('routput2'),
				'routput3'=>$this->input->post('routput3'),
				'representation1'=>$this->input->post('representation1'),
				'representation2'=>$this->input->post('representation2'),
				'representation3'=>$this->input->post('representation3'),
				'books1'=>$this->input->post('books1'),
				'books2'=>$this->input->post('books2'),
				'books3'=>$this->input->post('books3'),
				'publication1'=>$this->input->post('books1'),
				'publication2'=>$this->input->post('publication2'),
				'publication3'=>$this->input->post('publication3'),
				'project1'=>$this->input->post('project1'),
				'project2'=>$this->input->post('project2'),
				'project3'=>$this->input->post('project3')
			
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
