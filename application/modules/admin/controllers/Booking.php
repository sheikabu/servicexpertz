<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Admin Backend
 *
 * @author Sheik Abdullah
 */
class Booking extends MY_Controller {

    function __construct() {
        parent::__construct();
		       
		    $this->load->model('BookingModel');
			$this->load->helper('date');			
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  }
	 function index($data = NULL) { 	
	    	$this->load->view('common/header',$data);     	        
	        $this->load->view('list',$data);
	        $this->load->view('common/footer');
	    }

     function list_bookings() {
    	$data['booking_list'] = $this->BookingModel->getlDetails();   	
        $this->load_view('booking/list',$data);    
    }

    function receipt() {    	 	
    	$data['welcome'] = 'testing';
        $this->load_view('booking/receipt',$data);    
    }

  
	
}

