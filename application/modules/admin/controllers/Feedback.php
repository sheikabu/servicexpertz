<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * User Backend
 *
 * @author Sheik Abdullah
 */
class feedback extends MY_Controller {

    function __construct() {
        parent::__construct();      
		$this->load->model('FeedbackModel');
		$this->load->helper('date');
		
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  } 
 
   	function list_feedback() {
    	$data['feedback_list'] = $this->FeedbackModel->getlfeedback();    	   	
        $this->load_view('feedback/list',$data);    
    }	
	

}