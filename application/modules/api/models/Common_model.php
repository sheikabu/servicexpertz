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

}

?>