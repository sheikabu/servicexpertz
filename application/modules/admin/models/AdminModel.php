<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Suganya
 * Description: User class
 */
class AdminModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	public function get_UserNumber(){	
	  $this->db->select("count(*) as no");
	  $this->db->from('users');
	   $this->db->where('role', 'user');
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}
	
 public function get_VendorNumber(){   

    $this->db->select("count(*) as no"); 
    $this->db->from('vendors');	   
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;          

}  
 public function get_BookNumber(){   

    $this->db->select("count(*) as no"); 
    $this->db->from('booking');	   
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;          

}  
public function get_BookingDetails(){  
 
}


   

}
?>