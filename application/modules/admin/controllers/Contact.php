<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * User Backend
 *
 * @author Sheik Abdullah
 */
class contact extends MY_Controller {

    function __construct() {
        parent::__construct();      
		$this->load->model('ContactModel');
		$this->load->helper('date');
		
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  } 
 
   	function list_contact() {
    	$data['contact_list'] = $this->ContactModel->getlcontact();    	   	
        $this->load_view('contact/list',$data);    
    }	
	

}