<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Booking extends MY_Controller {

    function __construct() {
        parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        header('Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE, OPTIONS');
        header('Access-Control-Max-Age: 1000');
		$method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        
		$this->load->model('api/common_model');
    }

    function index() {

    }
	
	public function Create(){
		$token = trim($this->input->get_request_header('Authorization'));		
		$authentication = checkAuthentication($token);
		if(count($authentication) > 0){
			$data = json_decode(trim(file_get_contents('php://input')), true);
			$result = 'mandatory fields must be filled!';		
			$data['user_id'] = $authentication['user_id'];		
			if($data['services_id'] != '' && $data['selected_date'] != '' && $data['slot_id'] != '') {
				$servicecondition = array('sid' => $data['services_id']);
				$res_service = $this->common_model->getRecords('services', $servicecondition);
				$data['price'] =  $res_service[0]->price;			
				$res = $this->common_model->insert('booking', $data);
				if ($res == 1) {
					$mail_booking_status = $this->sendNotificationEmail($authentication);
					$response = array('code' => 1001, 'status' => 'success', 'message' => 'record added successfully.');
				} else {
					$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Error occurred.');
				}			
			}else{
				$response = array('code' => 1002, 'status' => 'failed', 'message' => 'mandatory fields must be filled!');
			}	
		}else{
			$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Authentication failed!');
		}
        echo json_encode($response);
    }
	
	public function sendNotificationEmail($user){
		$to = $user['email'];
         $subject = "Service Booking";
         
         $message = "<b>Dear user your service booking is received. </b>";
         $message .= "This is dummy text!";
         
         $header = "From:franklininnocent.fs@gmail.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         return mail ($to,$subject,$message,$header);
	}
	
	public function getTimeSlotList(){
		$slots = $this->common_model->getRecords('time_slot', $condition = null, $limit = null, $offset = null);
		echo json_encode($slots);
	}
	
	public function getBookings(){

		$token = trim($this->input->get_request_header('Authorization'));		
		$authentication = checkAuthentication($token);
		if(count($authentication) > 0){
				$booking_id = null;
				if($this->input->get('id') > 0){
					//$condition = array('booking_id' => $this->input->get('id'));
					
					$booking_id = $this->input->get('id');
				}	
				//$booking = $this->common_model->getRecords('booking', $condition, $limit = null, $offset = null);
				$booking = $this->common_model->getBookingDetails($booking_id);
		}else{
			$booking =  http_response_code(401);
			
			
			//$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Authentication failed!');
		}
		

		echo json_encode($booking);
	}
	
	
}
