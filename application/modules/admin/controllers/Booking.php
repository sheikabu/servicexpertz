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

 	public function update()
     {	
     	 $booking_id = $this->uri->segment(4);			 
         $data['booking'] = $this->BookingModel->getlDetails($booking_id);                  
         $this->load_view('admin/booking/update', $data);
     }

	public function updated() { 
		  $booking_id = $this->input->post('booking_id');
		  $booking_array = array(
	            'user_id' => $this->input->post('user_id'),				
				'services_id' => $this->input->post('services_id'),
				'selected_date' => $this->input->post('selected_date'),
				'selected_time' => $this->input->post('selected_time'),
	            'comments'=> $this->input->post('comments'),
				'price'=> $this->input->post('price'),
				'status'=> $this->input->post('status')
	        );			
		  
         $this->BookingModel->updatebooking($booking_id,$booking_array);
         $this->session->set_flashdata('msg', 'updated successfully');
	     redirect('admin/booking/list_bookings');			
	}
  
	
}

