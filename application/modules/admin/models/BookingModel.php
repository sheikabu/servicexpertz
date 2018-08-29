<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class BookingModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function getlDetails(){	
	  $this->db->select('users.name,services.services, booking.*');
	  $this->db->from('booking');
	  $this->db->join('users','booking.user_id=users.user_id');  
      $this->db->join('services','booking.services_id=services.sid'); 

	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}

	public function updatebooking($booking_id,$booking_array) {
	$this->db->where('booking_id', $booking_id);
	$this->db->update('booking', $booking_array);
	return true;
	} 

	public function getUpdateDetails($bid){  
    $this->db->where('booking_id', $bid);
    $query = $this->db->get('booking');
    return $query->row();
  }

  public function getSelectedService($selected){        
    $this->db->where('sid', $selected);
    $query = $this->db->get('services');
	return $query->row();
  }
   public function getlReceipt(){	
	  $this->db->select('users.name,services.services, booking.*');
	  $this->db->from('booking');
	  $this->db->join('users','booking.user_id=users.user_id');  
      $this->db->join('services','booking.services_id=services.sid'); 

	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}
}
?>