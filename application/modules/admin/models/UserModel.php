<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Vendor class
 */
class UserModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	public function getlDetails(){	
	  $this->db->select('*');
	  $this->db->from('users');
	
	  $query=$this->db->get();
	  //echo $this->db->last_query(); exit;
	  $results = $query->result();
	  return $results;
	}
	
 function deleteuser($userid)
   {

  $this->load->database();
 $this->db->delete('users', array('userid' => $userid));

  
   return true;
   } 
	public function geteuser($userid)

         {
             $this->db->where('userid', $userid);
             $query = $this->db->get('users');
             return $query->row();
         }
   
 public function updateuser($userid,$first_name,$last_name,$email) {
	  
		
		$this->db->set('first_name', ''.$first_name.'');  //Set the column name and which value to set..
$this->db->set('last_name', ''.$last_name.'');
$this->db->set('email', ''.$email.'');
		$this->db->where('userid', $userid); //set column_name and value in which row need to update

		$this->db->update('users');

		return true;
   }
    public function insertuser($userid,$first_name,$last_name,$email)
    {   
        $data = array(
            'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
            /* 'description'=> $this->input->post('description')  */     
        );
        return $this->db->insert('users', $data);
		
		return true;
    }

   

}
?>