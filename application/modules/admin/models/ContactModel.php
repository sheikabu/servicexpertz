<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Contact class
 */
class ContactModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
 
	  public function getlcontact(){	
	  $this->db->select('*');
	  $this->db->from('contact_us');	     
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}

}
?>