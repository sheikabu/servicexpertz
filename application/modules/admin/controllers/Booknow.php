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
				'sendsms'=> $this->input->post('sendsms'),
	        );					 
		 if($this->input->post('sendsms')=='on'){
		 		$otp = $this->generateOTP();	
		 		$booking_array['otp'] = $otp;
	    		$user_id = $this->input->post('selected_user');
	    		$userdetail = $this->BookingNowModel->getUser($user_id);
	    		$phone = $userdetail->phone;
	    		$name = $userdetail->name;
	    		$api_key = '45B9E7678ED7AA';
				$contacts = $phone;
				$from = 'SEREXP'; //SEREXPZ
				$sms_text = urlencode('Hello '.$name.', Thanks for booking with us. Our serive provider contact you shortly. Service OTP:'.$otp.'');
				$routeid=13;

				//Submit to server

				$ch = curl_init();
				curl_setopt($ch,CURLOPT_URL, "http://bulksms.smsroot.com/app/smsapi/index.php");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&campaign=0&routeid=14&type=text&contacts=".$contacts."&routeid=13&senderid=".$from."&msg=".$sms_text);
				$response = curl_exec($ch);
				curl_close($ch);				
	    	}

         $this->BookingNowModel->createBooKnow($booking_array);
         $this->session->set_flashdata('msg', 'Inserted successfully');
	     redirect('admin/booknow/book_list');			
	}

	function generateOTP($digits = 4){
	    $i = 0; //counter
	    $pin = ""; //our default pin is blank.
	    while($i < $digits){
	        //generate a random number between 0 and 9.
	        $pin .= mt_rand(0, 9);
	        $i++;
	    }
	    return $pin;
	}
  
	
}
