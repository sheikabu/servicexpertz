<?php

class Common_model extends CI_Model {

        public function insert($table, $data){
            return $this->db->insert($table, $data);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();
                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}

?>