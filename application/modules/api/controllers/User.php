<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class User extends MY_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model("api/user_model");
		$this->load->model('api/common_model');
    }

    function index() {
		
    }
	
	public function create(){
        $data = json_decode(trim(file_get_contents('php://input')), true);
        $validation = $this->validateInput($data);
        if ($validation == 1001) {
            $data['password'] = md5($data['password']);
			$data['password'] = "user";
            $res = $this->common_model->insert('users', $data);
            if ($res == 1) {
                $response = array('code' => 1001, 'status' => 'success', 'message' => 'record added successfully.');
            } else {
                $response = array('code' => 1002, 'status' => 'failed', 'message' => 'Error occurred.');
            }
        } else {
            $response = array('code' => 1002, 'status' => 'failed', 'message' => $validation);
        }
        echo json_encode($response);
    }
	
	public function validateInput($data){
       $result = 'mandatory fields must be filled!';
       if($data['name'] != '' && $data['email'] != '' && $data['password'] != '') {
		   $result = 1001;
		   $condition = array('email' => $data['email']);
		   $res = $this->common_model->getRecords('users', $condition);
		   if(count($res) > 0){
			   $result = 'email already exists!';
		   }	          
        }
        return $result;
    }
	
	public function changePassword(){
		$data = json_decode(trim(file_get_contents('php://input')), true);
        $validation = $this->validatePasswordInput($data);
		if ($validation == 1001) {
            $data['password'] = md5($data['new_password']);
			$condition = array('email' => $data['email']);
			$values = array('password' => $data['password']);			
            $res = $this->common_model->updateRecords('users', $values, $condition);
            if ($res == 1) {
                $response = array('code' => 1001, 'status' => 'success', 'message' => 'password changed successfully.');
            } else {
                $response = array('code' => 1002, 'status' => 'failed', 'message' => 'Error occurred.');
            }	
        } else {
            $response = array('code' => 1002, 'status' => 'failed', 'message' => $validation);
        }
        echo json_encode($response);
	}
	
	public function validatePasswordInput($input){
		$result = 'email and password mismatch!';
		$pass = md5($input['current_password']);	
		$condition = array('email' => $input['email'], 'password' => $pass);	
		$res = $this->common_model->getRecords('users', $condition);
		if(count($res) > 0){
			$result = 1001;
		}
		return $result;
	}




}
