<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Contact extends MY_Controller {

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
		$data = json_decode(trim(file_get_contents('php://input')), true);
		$result = 'mandatory fields must be filled!';				
		if($data['name'] != '' && $data['email'] != '') {		
			$res = $this->common_model->insert('contact_us', $data);
			if ($res == 1) {
				$response = array('code' => 1001, 'status' => 'success', 'message' => 'record added successfully.');
			} else {
				$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Error occurred.');
			}			
		}else{
			$response = array('code' => 1002, 'status' => 'failed', 'message' => 'mandatory fields must be filled!');
		}		
        echo json_encode($response);
    }
}
