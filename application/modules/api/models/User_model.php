<?php

class User_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function getUserList(){
			$result = $this->db
							->query("SELECT * FROM users;")
							->result();
			
				echo "<pre>";
				print_r($result);
				die;
        }
/*
        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
		
		*/

}