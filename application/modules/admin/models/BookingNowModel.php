<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class BookingNowModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
  
  public function getServices(){        
     $this->db->select('*');
    $this->db->from('services');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }

  public function getUsers(){        
     $this->db->select('*');
    $this->db->from('users');
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

   public function createBooKnow($booking_array) { 
    $this->db->insert('booking', $booking_array);   
    return true;
  }

  public function getBooking(){  
    $this->db->select('users.name,services.services,services.price,services.additonal_cost,services.parameter, booking.*, time_slot.ts_name');
    $this->db->from('booking');
    $this->db->join('users','booking.user_id=users.user_id');  
    $this->db->join('services','booking.services_id=services.sid');
    $this->db->join('time_slot','booking.slot_id=time_slot.ts_id', 'left');
    $this->db->where('source', 'web');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }

  public function getTime(){  
    $this->db->select('*');
    $this->db->from('time_slot');
    $query=$this->db->get();    
    $results = $query->result();
    return $results;
  }
	
}