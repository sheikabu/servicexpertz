<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Suganya
 * Description: User class
 */
class ServiceproviderModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	public function getlDetails(){	
	  $this->db->select('*');
	  $this->db->from('service_providers');
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}

  public function getCities(){  
    $this->db->select('*');
    $this->db->from('cities');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }

  public function getVendors(){  
    $this->db->select('*');
    $this->db->from('vendors');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }
	
 function deleteuser($spid){
    $this->load->database();
    $this->db->delete('service_providers', array('spid' => $spid));
   return true;
   } 

	public function geteuser($spid){
       $this->db->where('spid', $spid);
       $query = $this->db->get('service_providers');
       return $query->row();
   }
   
 public function updateuser($spid,$sp_array) {
 		$this->db->where('spid', $spid);
    $this->db->update('service_providers', $sp_array);
		return true;
   }
   
  public function insertuser($user_array) { 
    $this->db->insert('service_providers', $user_array);		
    return true;
  }

   

}
?>