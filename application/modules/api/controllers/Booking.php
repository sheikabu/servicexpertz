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
				//sheik
				$usercondition = array('user_id' =>  $authentication['user_id']);
				$res_user = $this->common_model->getRecords('users', $usercondition);
				$name = $res_user[0]->name;
				$phone = $res_user[0]->phone;
				$otp = $this->generateOTP();
				$data['otp'] = $otp;
				$sms_status = $this->sendSMS($phone, $name, $otp);
				//sheik end
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
	
	public function getCityList(){
		$condition = array('city_state' => 'Kerala');
		$slots = $this->common_model->getRecords('cities', $condition, $limit = null, $offset = null);
		echo json_encode($slots);
	}
	
	public function getBookings(){
		$token = trim($this->input->get_request_header('Authorization'));		
		$authentication = checkAuthentication($token);
		if(count($authentication) > 0){
				$booking = $this->common_model->getBookingDetails($authentication['user_id']);
		}else{
			$booking =  http_response_code(401);
	
			//$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Authentication failed!');
		}
		

		echo json_encode($booking);
	}
	
	public function sendSMS($phone, $name, $otp) {
        $api_key = '45B9E7678ED7AA';
        $contacts = $phone;
        $from = 'SEREXP'; //SEREXP
        $sms_text = urlencode('Hello '.$name.', Thanks for booking with us. Our serive provider contact you shortly.OTP:'.$otp.'');
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
