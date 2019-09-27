<?php
class userdata_model extends CI_Model
{
	function insertdata($data)
	{
		return $this->db->insert('staffregistration',$data);
	}
}

?>