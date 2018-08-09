<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class ServicecategoriesModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function getlDetails(){	
	  $this->db->select('*');
	  $this->db->from('service_categories');	   
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}
	 public function getmaincategories(){  
    $this->db->select('*');
    $this->db->from('service_main_categories');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }
	
 function deleteServicecategories($sc_id)
   {

  $this->load->database();
 $this->db->delete('service_categories', array('sc_id' => $sc_id));

  
   return true;
   } 
	public function geteServicecategories($sc_id)

         {
             $this->db->where('sc_id', $sc_id);
             $query = $this->db->get('service_categories');
             return $query->row();
         }
   
 public function updateServicecategories($sc_id,$Servicecategories_array) {

 		$this->db->where('sc_id', $sc_id);
        $this->db->update('service_categories',$Servicecategories_array);

		return true;
   }
   
    public function insertServicecategories($Servicecategories_array)
    { 
        $this->db->insert('service_categories', $Servicecategories_array);		
		return true;
    }

   public function getMainServiceCategories(){  
    $this->db->select('*');
    $this->db->from('service_main_categories');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }

}
?>