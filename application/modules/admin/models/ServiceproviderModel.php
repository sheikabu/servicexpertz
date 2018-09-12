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
    $this->db->where('city_state', 'Kerala');
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
  /* Service Provider VIEW page */
  public function getAVendors($vid){  
    $this->db->where('vid', $vid);
    $query = $this->db->get('vendors');
    return $query->row();
  }
  
  public function getSelectedmaincategories($selected){  
    $select = json_decode($selected);    
    $this->db->where_in('smc_id', $select);
    $query = $this->db->get('service_main_categories');
    $results = $query->result();    
    return $results;
  }

   public function getSelectedCategories($selected){  
    $select = json_decode($selected);    
    $this->db->where_in('sc_id', $select);
    $query = $this->db->get('service_categories');
    $results = $query->result();    
    return $results;
  }

  public function getSelectedServices($selected){ 
    $select = json_decode($selected);    
    $this->db->where_in('sid', $select);
    $query = $this->db->get('services');
    $results = $query->result();    
    return $results;
  }

  public function getSelectedCities($selected){ 
    $select = json_decode($selected);    
    $this->db->where_in('city_id', $select);
    $query = $this->db->get('cities');
    $results = $query->result();    
    return $results;
  }

  public function getSelectedTime($selected){ 
    $select = json_decode($selected);    
    $this->db->where_in('ts_id', $select);
    $query = $this->db->get('time_slot');
    $results = $query->result();    
    return $results;
  }
  /* Service Provider VIEW page */

  public function getTime(){  
    $this->db->select('*');
    $this->db->from('time_slot');
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