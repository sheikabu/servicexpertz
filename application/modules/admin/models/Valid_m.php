<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Valid_m extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function login_user($email,$password){

	  $this->db->select('*');
	  $this->db->from('users');
	  $this->db->where('email',$email);
	  $this->db->where('password',$password);

	  if($query=$this->db->get())
	  {
	      return $query->row_array();
	     
	  }
	  else{
	    return false;
	  }
	}
	
	
 	
}

?>