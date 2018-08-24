<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class BookingModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function getlDetails(){	
	  $this->db->select('*');
	  $this->db->from('booking');	     
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}
	 public function updatebooking($booking_id,$booking_array) {

 		$this->db->where('booking_id', $booking_id);
        $this->db->update('booking', $booking_array);

		return true;
   } 

}
?>