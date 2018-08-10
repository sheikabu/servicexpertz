<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class VendorModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function getlDetails(){	
	  $this->db->select('*');
	  $this->db->from('vendors');	   
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}
	
 function deletevendors($vid)
   {

  $this->load->database();
 $this->db->delete('vendors', array('vid' => $vid));

  
   return true;
   } 
	public function getevendors($vid)

         {
             $this->db->where('vid', $vid);
             $query = $this->db->get('vendors');
             return $query->row();
         }
    public function viewvendors($vid,$vendors_array) {

 		$this->db->where('vid', $vid);
        $this->db->update('vendors', $vendors_array);

		return true;
      }
   
 public function updatevendors($vid,$vendors_array) {

 		$this->db->where('vid', $vid);
        $this->db->update('vendors', $vendors_array);

		return true;
   }
   
    public function insertvendors($vendors_array)
    { 
        $this->db->insert('vendors', $vendors_array);		
		return true;
    }

   

}
?>