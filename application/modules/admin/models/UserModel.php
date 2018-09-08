<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Suganya
 * Description: User class
 */
class UserModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	public function getlDetails(){	
	  $this->db->select('*');
	  $this->db->from('users');
	  
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}
	
	
 function deleteuser($userid)
   {

  $this->load->database();
 $this->db->delete('users', array('user_id' => $userid));

  
   return true;
   } 
	public function geteuser($userid)

         {
             $this->db->where('user_id', $userid);
             $query = $this->db->get('users');
             return $query->row();
         }
   
 public function updateuser($userid,$user_array) {

 		$this->db->where('user_id', $userid);
        $this->db->update('users', $user_array);

		return true;
   }
   
    public function insertuser($user_array)
    { 
        $this->db->insert('users', $user_array);		
		return true;
    }

   

}
?>