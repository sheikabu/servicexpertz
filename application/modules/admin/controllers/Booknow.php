<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Admin Backend
 *
 * @author Sheik Abdullah
 */
class Booknow extends MY_Controller {

    function __construct() {
        parent::__construct();
		       
		    $this->load->model('BookingNowModel');		    
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
    
 	public function book_now() {     	                   
         $data['time'] = $this->BookingNowModel->getTime();     
         $data['services'] = $this->BookingNowModel->getServices(); 
         $data['cities'] = $this->BookingNowModel->getCities();
         $data['users'] = $this->BookingNowModel->getUsers(); 
         $this->load_view('admin/book_now/create', $data);
     }

     public function book_list() { 
     	 $data['booking_list'] = $this->BookingNowModel->getBooking(); 
         $this->load_view('admin/book_now/list', $data);
     }

	public function create() {		  
		  $booking_array = array(	            					
				'user_id' => $this->input->post('selected_user'),
				'services_id' => $this->input->post('selected_service'),
	            'selected_date'=> $this->input->post('selected_date'),
				'slot_id'=> $this->input->post('selected_time'),
				'city_id'=> $this->input->post('selected_city'),
				'pincode'=> $this->input->post('pincode'),
				'status'=> $this->input->post('status'),
				'source'=> $this->input->post('source'),
	        );			
		  
         $this->BookingNowModel->createBooKnow($booking_array);
         $this->session->set_flashdata('msg', 'Inserted successfully');
	     redirect('admin/booknow/book_list');			
	}
  
	
}
