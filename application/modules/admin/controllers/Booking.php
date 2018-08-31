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
		    $this->load->model('ServiceproviderModel');
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
		$booking_id = $this->uri->segment(4);    	
    	$receipt = $this->BookingModel->getlReceipt($booking_id);
    	$data['service'] = $this->BookingModel->getSelectedService($receipt->services_id);
    	$data['time_slot'] = $this->BookingModel->getSelectedTime($receipt->slot_id); 
    	$data['user'] = $this->BookingModel->getUser($receipt->user_id); 
    	$data['sp'] = $this->BookingModel->getSP($receipt->service_provider);     	

    	$data['booking'] = $receipt;
        $this->load_view('booking/receipt',$data);    
    }

 	public function update()
     {	
     	 $booking_id = $this->uri->segment(4);			 
         $booking = $this->BookingModel->getUpdateDetails($booking_id);          
         $data['service'] = $this->BookingModel->getSelectedService($booking[0]->services_id);   
         $data['time_slot'] = $this->BookingModel->getSelectedTime($booking[0]->slot_id);   
         $data['sp_list'] = $this->ServiceproviderModel->getlDetails();         
         $data['time'] = $this->BookingModel->getTime();         
         $this->load->model('ServiceproviderModel');                     
         $data['booking'] =  $booking;      
         $this->load_view('admin/booking/update', $data);
     }

	public function updated() { 
		  $booking_id = $this->input->post('booking_id');
		  $service_provider = json_encode($this->input->post('service_provider_id'), true);
		  $booking_array = array(	            					
				'selected_date' => $this->input->post('selected_date'),
				'slot_id' => $this->input->post('selected_time'),
	            'comments'=> $this->input->post('comments'),
				'price'=> $this->input->post('price'),
				'service_provider'=> $service_provider,
				'status'=> $this->input->post('status')
	        );			
		  
         $this->BookingModel->updatebooking($booking_id,$booking_array);
         $this->session->set_flashdata('msg', 'updated successfully');
	     redirect('admin/booking/list_bookings');			
	}
  
	
}

