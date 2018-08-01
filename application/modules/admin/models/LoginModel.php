<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function validate(){
        // grab user input
        echo $username = $this->input->post('username');
        echo $password = $this->input->post('password');
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
		echo $this->db->last_query();
		echo $query->num_rows;
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->userid,
                    'fname' => $row->first_name,
                    'lname' => $row->last_name,
                    'username' => $row->username,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
	
 	
}

?>