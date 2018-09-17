<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Suganya
 * Description: Sub Category Module
 * Date: Sep 12 2018
 */
class ServicesubcategoriesModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function getlDetails(){	
	  $this->db->select('service_subcategories.*,service_categories.category,service_main_categories.main_category');
	  $this->db->from('service_subcategories');	 
    $this->db->join('service_categories','service_categories.sc_id=service_subcategories.category_id'); 
    $this->db->join('service_main_categories','service_main_categories.smc_id=service_subcategories.main_category_id','left');  
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
	
 function deleteServicesubcategories($ssc_id)
   {

    $this->load->database();
    $this->db->delete('service_subcategories', array('ssc_id' => $ssc_id));
    return true;
   } 
	public function geteServicecategories($ssc_id)

         {
             $this->db->where('ssc_id', $ssc_id);
             $query = $this->db->get('service_subcategories');
             return $query->row();
         }
   
 public function updateServicesubcategories($ssc_id,$Servicesubcategories_array) {

 		$this->db->where('ssc_id', $ssc_id);
        $this->db->update('service_subcategories',$Servicesubcategories_array);

		return true;
   }
   
    public function insertServicesubcategories($Servicesubcategories_array)
    { 
        $this->db->insert('service_subcategories', $Servicesubcategories_array);		
		return true;
    }

   public function getMainServiceCategories($selected){  
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
 
  public function fetchCategory($mcate_id,$cate_id) {   //12     
      $this->db->where('main_category_id', $mcate_id);      
      $query = $this->db->get('service_categories');
      $results = $query->result();         
      //print_r($results); exit;   
      $output = '<option value="">Select Category</option>';
      foreach($results as $ckey => $cvalue)
      { 
        $selected = '';
            if($cvalue->sc_id==$cate_id) { $selected = 'selected'; }
       $output .= '<option value="'.$cvalue->sc_id.'" '.$selected.'>'.$cvalue->category.'</option>';
      }
      return $output;

  }
 
}
?>