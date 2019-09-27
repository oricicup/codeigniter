<?php
class admin_model extends CI_Model
{
	function get_all_records()
	{
		$query=$this->db->get('staffregistration');
		// print_r($query);
		 return $query->result();
	}
	function get_record($id)
	{
		$this->db->where('employeeid',$id);
		$query=$this->db->get('staffregistration');
		// print_r($query);
		 return $query->row();
	}
	function edit_record($id,$data)
	{
		$this->db->where('employeeid',$id);
		return $this->db->update('staffregistration',$data);
	}
	function remove_record($id)
	{
		$this->db->where('employeeid',$id);
		return $this->db->delete('staffregistration');
	}
	function enoroll_admin($data)
	{
		return $this->db->insert('registration',$data);
	}
	function login_check($email,$pass)
	{
		$check=array(
			'adminemail'=>$email,
			'adminpass'=>$pass
		);
		$this->db->select('*')->from('registration')->where($check);
		$query=$this->db->get();
		return $query->row();
	}
}

?>