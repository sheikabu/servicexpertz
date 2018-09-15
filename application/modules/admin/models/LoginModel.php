<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function validate(){
        // grab user input
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('users');
        // Let's check if there are any results
		$this->db->last_query();
		$num = $query->num_rows();
        if($num == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->user_id,
                    'fname' => $row->name,                    
                    'username' => $row->username,
                    'role' => $row->role,
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