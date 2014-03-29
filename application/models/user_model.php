<?php 
class user_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getUsers()
	{
		return $this->db->get('user')->result();
	}

	function newUser($data)
	{
		return $this->db->insert('user',$data);
	}	

	function verifyUser($data)
	{
		$query = $this->db->get_where('user',$data);
	    return $query->result_array();
	}


}