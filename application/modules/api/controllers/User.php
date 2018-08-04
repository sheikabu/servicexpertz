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
            $data['password'] = md5(trim($data['password']));
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
            $data['password'] = md5(trim($data['new_password']));
			$condition = array('email' => trim($data['email']));
			$values = array('password' => trim($data['password']));			
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
		$pass = md5(trim($input['current_password']));	
		$condition = array('email' => trim($input['email']), 'password' => $pass);	
		$res = $this->common_model->getRecords('users', $condition);
		if(count($res) > 0){
			$result = 1001;
		}
		return $result;
	}
	
	public function forgotPassword(){
		$data = json_decode(trim(file_get_contents('php://input')), true); 
		$result = array('code' => 1002, 'status' => 'failed', 'message' => 'email does not exists!');
		$email = trim($data['email']);	
		$condition = array('email' => $email);	
		$res = $this->common_model->getRecords('users', $condition);
		if(count($res) > 0){
			$newpassword = $this->generateRandomString();
			$values = array('password' => md5($newpassword));
			$update_status = $this->common_model->updateRecords('users', $values, $condition );			
			/* $mail_status = $this->sendNewPassword($email, $newpassword);
         
         if( $mail_status == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
		 */
		 $result = array('code' => 1001, 'status' => 'success', 'message' => 'New password has been sent to your mail!');

		}
		echo json_encode($result);
		
	}
	
	function generateRandomString($length = 15) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	
	public function sendNewPassword($to, $newpassword){
         $subject = "New Password";
         
         $message = "<b>Dear user your new password is </b>";
         $message .= "'.$newpassword.'";
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         return mail ($to,$subject,$message,$header);
	}
	





}
