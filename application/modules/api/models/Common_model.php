<?php

class Common_model extends CI_Model {

        public function insert($table, $data){
            return $this->db->insert($table, $data);
        }

        public function updateRecords($table, $values, $condition )
        {
               // $this->title    = $_POST['title'];
               /// $this->content  = $_POST['content'];
               // $this->date     = time();
                return $this->db->update($table, $values, $condition);
        }
		
		public function getRecords($table, $condition, $limit = null, $offset = null){
			return $this->db->get_where($table, $condition, $limit, $offset)->result();
		}

}

?>