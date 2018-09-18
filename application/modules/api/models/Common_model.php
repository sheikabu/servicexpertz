<?php

class Common_model extends CI_Model {

        public function insert($table, $data){
            return $this->db->insert($table, $data);
        }

        public function updateRecords($table, $values, $condition ){
            return $this->db->update($table, $values, $condition);
        }
		
		public function getRecords($table, $condition, $limit = null, $offset = null){
			return $this->db->get_where($table, $condition, $limit, $offset)->result();
		}
		
		public function getBookingDetails($id){
			//return $this->db->get_where($condition)->result();
			
			if($id > 0){
				$query = $this->db->query("
										SELECT booking.*, time_slot.*, users.user_id, users.name, users.email, users.phone, users.active,
										
										users.user_image,
										
										services.* from booking
										
										left join users
										on booking.user_id = users.user_id
										
										left join time_slot
										on booking.slot_id = time_slot.ts_id							
										left join services
										on booking.services_id = services.sid								
										where booking.user_id = ".$id."
										");
			}else{
				$query = $this->db->query("
										SELECT booking.*, time_slot.* , services.* from booking
										left join time_slot
										on booking.slot_id = time_slot.ts_id							
										left join services
										on booking.services_id = services.sid
										");
			
			}

			return $query->result_array();
			/*
			$this->db->select('tbl_user.username,tbl_user.userid,tbl_usercategory.type');
			$this->db->from('tbl_user');
			$this->db->join('tbl_usercategory','tbl_usercategory.usercategoryid=tbl_user.usercategoryid','Left');
			return $query=$this->db->get();
			
			*/
			/*
			
			return $this->db->select('*');
			$this->db->from('booking');
			$this->db->join('time_slot', 'booking.slot_id = time_slot.ts_id','left');
			$this->db->join('services', 'booking.services_id = services.sid','left');
			$this->db->get();
		*/	 
		}

}

?>