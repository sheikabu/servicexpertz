<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Booking extends MY_Controller {

    function __construct() {
        parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
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
			if($data['services_id'] != '' && $data['selected_date'] != '' && $data['selected_time'] != '') {
				$servicecondition = array('sid' => $data['services_id']);
				$res_service = $this->common_model->getRecords('services', $servicecondition);
				$data['price'] =  $res_service[0]->price;			
				$res = $this->common_model->insert('booking', $data);
				if ($res == 1) {
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
}
