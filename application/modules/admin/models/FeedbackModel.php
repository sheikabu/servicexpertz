<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Sheik
 * Description: Contact class
 */
class FeedbackModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
 
	  public function getlfeedback(){	
	  $this->db->select('*');
	  $this->db->from('feedback');	     
	  $query=$this->db->get();	  
	  $results = $query->result();
	  return $results;
	}

}

?>