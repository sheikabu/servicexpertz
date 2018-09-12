<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class BookingModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function getlDetails(){	
	  $this->db->select('users.name,services.services, booking.*, time_slot.ts_name');
	  $this->db->from('booking');
	  $this->db->join('users','booking.user_id=users.user_id');  
      $this->db->join('services','booking.services_id=services.sid');
      $this->db->join('time_slot','booking.slot_id=time_slot.ts_id', 'left');
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
    $results = $query->result();
    return $results;
  }

  public function getSelectedService($selected){        
    $this->db->where('sid', $selected);
    $query = $this->db->get('services');
	return $query->row();
  }
   public function getlReceipt($booking_id){	
	  $this->db->where('booking_id', $booking_id);
      $query = $this->db->get('booking');
      return $query->row();
	}

	public function getSelectedTime($selected){ 
    $select = json_decode($selected);    
    $this->db->where_in('ts_id', $select);
    $query = $this->db->get('time_slot');
    return $query->row();
  }
   public function getUser($uid){  
    $this->db->where('user_id', $uid);
    $query = $this->db->get('users');
    return $query->row();
  }
  public function getCity($cid){  
    $this->db->where('city_id', $cid);
    $query = $this->db->get('cities');
    return $query->row();
  }
  public function getTime(){  
    $this->db->select('*');
    $this->db->from('time_slot');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }

  public function getSP($spid){
  	   $select = json_decode($spid);  	
	   $this->db->where_in('spid', $select);
	   $query = $this->db->get('service_providers');
	   return $query->row();
   }
}