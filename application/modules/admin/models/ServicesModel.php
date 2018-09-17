<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Suganya
 * Description: User class
 */
class ServicesModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	public function getlDetails(){	
	  $this->db->select('*');
	  $this->db->from('services');
    $this->db->join('service_main_categories','service_main_categories.smc_id=services.main_category_id');  
    $this->db->join('service_categories','service_categories.sc_id=services.category_id');  
    $this->db->join('service_subcategories','service_subcategories.ssc_id=services.sub_category_id','left');  
	 
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}

  public function getMainCategories(){  
    $this->db->select('*');
    $this->db->from('service_main_categories');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }

  public function getCategories(){  
    $this->db->select('*');
    $this->db->from('service_categories');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }

   public function getSubCategories(){  
    $this->db->select('*');
    $this->db->from('service_subcategories');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }

 function deleteService($sid){
    $this->load->database();
    $this->db->delete('services', array('sid' => $sid));
   return true;
   } 

	public function getService($sid){
       $this->db->where('sid', $sid);
       $query = $this->db->get('services');
       return $query->row();
   }
   
 public function updateService($sid,$sp_array) {
 		$this->db->where('sid', $sid);
    $this->db->update('services', $sp_array);
		return true;
   }
   
  public function insertService($user_array) { 
    $this->db->insert('services', $user_array);		
    return true;
  }

   public function fetchCategory($mcate_id,$cate_id) {        
      $this->db->where('main_category_id', $mcate_id);      
      $query = $this->db->get('service_categories');
      $results = $query->result();            
      $output = '<option value="">Select Category</option>';
      foreach($results as $ckey => $cvalue)
      {

       $selected = '';
            if($cvalue->sc_id==$cate_id) { $selected = 'selected'; }
       $output .= '<option value="'.$cvalue->sc_id.'" '.$selected.'>'.$cvalue->category.'</option>';

      }
      return $output;

  }

  public function fetchSubCategory($cate,$sub_cate_id) {        
      $this->db->where('category_id', $cate);      
      $query = $this->db->get('service_subcategories');
      $results = $query->result();            
      $output = '<option value="">Select sub Category</option>';
      foreach($results as $ckey => $cvalue)
      {
       $selected = '';
            if($cvalue->ssc_id==$sub_cate_id) { $selected = 'selected'; }
       $output .= '<option value="'.$cvalue->ssc_id.'" '.$selected.'>'.$cvalue->sub_category.'</option>';
      }
      return $output;

  }

}
?>