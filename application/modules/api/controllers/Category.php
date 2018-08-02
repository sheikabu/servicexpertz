<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Category extends MY_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model("api/user_model");
		$this->load->model('api/common_model');
    }

    function index() {
		
		echo "11111111111";die;
        //$this->load->view('home');
		
    }
	
	public function create(){
        $data = json_decode(trim(file_get_contents('php://input')), true);
        $validation = $this->validateInput($data);
        if ($validation == 1001) {
            $data['password'] = md5($data['password']);
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
        }
        return $result;
    }




}
