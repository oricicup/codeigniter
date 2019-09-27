<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admincontroller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
  {
    parent::__construct();
   $this->load->helper('form');
    $this->load->model('admin_model');
    
   } 
	public function index()
	{
		
		$this->load->view('adminviews/admin_login_view');
		if($_POST)
		{
			$pass=$this->input->post('Password');
					$email=$this->input->post('Email');
			
				$match=$this->admin_model->login_check($email,$pass);
		
			if($match)
			
				{
					
				 	$this->session->set_flashdata('login_success','Your are successfully logged In');
				 	redirect(base_url().'admincontroller/get_all');
				}
		}
		// $data['all']=$this->admin_model->get_all_records();
		// $this->load->view('adminviews/adminhome.php',$data);
	}
	function get_all()
	{
		$data['all']=$this->admin_model->get_all_records();
		$this->load->view('adminviews/adminhome.php',$data);
	}
	public function register()
	{
		$this->load->view('adminviews/admin_registration_view');
		if($_POST)
		{
			$regist=array(
				'adminname'=>$this->input->post('name'),
				'adminemail'=>$this->input->post('email'),
				'adminpass'=>$this->input->post('password')
				);
			$registered=$this->admin_model->enoroll_admin($regist);
			if($registered)
			{
				
			 	$this->session->set_flashdata('registered_success','Your are successfully Registered');
			 	redirect(base_url().'admincontroller/');
			}
			
		}
	}
	public function get_single_record($id)
	{
		$data['single_record']=$this->admin_model->get_record($id);
		//redirect(base_url().'admincontroller/',$data);
		$this->load->view('adminviews/single_record.php',$data);
	}
	public function update_record($id)
	{
		
		$data['single_record']=$this->admin_model->get_record($id);
		$this->load->view('adminviews/edit_record',$data);

		if($_POST)
		{
			$update=array(
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
			//print_r($update);
			 $updated=$this->admin_model->edit_record($id,$update);
			 if($updated)
			 {
			 	$this->session->set_flashdata('update_success','Your Data is successfully Updated');
			 	redirect(base_url().'admincontroller/get_all');
			 }
		}
			
	}
	public function delete_record($id)
	{
		$deleted=$this->admin_model->remove_record($id);
		if($deleted)
			 {
			 	$this->session->set_flashdata('delete_success','Your Profile is successfully Removed');
			 	redirect(base_url().'admincontroller/get_all');
			 }
	}
}