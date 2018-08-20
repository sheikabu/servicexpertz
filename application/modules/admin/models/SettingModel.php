<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class SettingModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function getlDetails(){	
	  $this->db->select('*');
	  $this->db->from('settings');	   
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}
	
 function deletesetting($st_id)
   {

  $this->load->database();
 $this->db->delete('settings', array('st_id' => $st_id));

  
   return true;
   } 
	public function getesetting($st_id)

         {
             $this->db->where('st_id', $st_id);
             $query = $this->db->get('settings');
             return $query->row();
         }
    
 public function updatesetting($st_id,$setting_array) {

 		$this->db->where('st_id', $st_id);
        $this->db->update('settings', $setting_array);

		return true;
   }
   
    public function insertsetting($setting_array)
    { 
        $this->db->insert('settings', $setting_array);		
		return true;
    }

   

}
?>