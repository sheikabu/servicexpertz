<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class User extends MY_Controller {

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
        
		$this->load->model("api/user_model");
		$this->load->model('api/common_model');		
    }

    function index() {
		
    }
	
	public function login(){
		$data = json_decode(trim(file_get_contents('php://input')), true);
		$email = trim($data['email']);
		$password = md5(trim($data['password']));		
		$condition = array('email' => $email, 'password' => $password, 'active' => true);
		$res = $this->common_model->getRecords('users', $condition, 1);
		$result = array('code' => 1002, 'status' => 'failed', 'message' => 'Credential mismatch.');
		$user = array();
		if(count($res) == 1){
			$result = $this->updateToken($res[0]->user_id);
			$user['user_id'] = $res[0]->user_id;
			$user['name'] = $res[0]->name;
			$user['email'] = $res[0]->email;
			$user['active'] = $res[0]->active;
			$user['role'] = $res[0]->role;
			$user['user_image'] = $res[0]->user_image;
			//sheik
			$user['phone'] = $res[0]->phone;
			$result['user_details'] = $user;

		}
		echo json_encode($result);
	}
	
	public function refresh(){
		$res = trim($this->input->get_request_header('Authorization'));	
		$refresh_token = explode(" ",$res);
		$current_time = date('Y-m-d H:i:s');
		$condition = array('refresh_token' => $refresh_token[1]);
		$valid_time = null;
		$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Invalied token.');
		$res = $this->common_model->getRecords('users', $condition, 1);
		if($res){
			$valid_time = date( "Y-m-d H:i:s", strtotime( $res[0]->last_login."+11 months" ) );
			$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Current token is valied.');	
			if($valid_time < $current_time){	
				$response = $this->updateToken($res[0]->user_id);			
			}
		}
		echo json_encode($response);
	}
	
	public function updateToken($user_id){
		$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Error occurred.');
		$token = $this->generateRandomString(1200);
		$refresh_token = $this->generateRandomString(1200);	   
		$condition = array('user_id' => $user_id);
		$values = array('token' => $token, 'refresh_token' => $refresh_token, 'last_login' => date('Y-m-d H:i:s'));	
		$res_update = $this->common_model->updateRecords('users', $values, $condition);
		if($res_update == 1){
			$response = array('code' => 1001, 'status' => 'success', 'message' => 'Successfully logged in.');
			$response['token'] = $token;
			$response['refresh_token'] = $refresh_token;
		}	
		return $response;
	}
	
	public function logout(){
		$res = trim($this->input->get_request_header('Authorization'));	
		$token = explode(" ",$res);
		$condition = array('token' => $token[1]);
		$values = array('token' => '', 'refresh_token' => '');	
		$res_update = $this->common_model->updateRecords('users', $values, $condition);
		$result = array('code' => 1002, 'status' => 'failed', 'message' => 'Error occurred.');
		if($res_update == 1){
			$result = array('code' => 1001, 'status' => 'success', 'message' => 'Successfully logged out.');			
		}	
		echo json_encode($result);
	}
	
	public function create(){
        $data = json_decode(trim(file_get_contents('php://input')), true);
        $validation = $this->validateInput($data);
        if ($validation == 1001) {
            $data['password'] = md5(trim($data['password']));
			$data['role'] = "user";
			$name = $data['name'];
			$phone = $data['phone'];
            $res = $this->common_model->insert('users', $data);
            //sheik
            $sms_status = $this->sendSMS($phone, $name);
            //sheik end
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
		$token = trim($this->input->get_request_header('Authorization'));		
		$authentication = checkAuthentication($token);
		if(count($authentication) > 0){
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
		}else{
			$response =  http_response_code(401);
			//$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Authentication failed!');
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
			$newpassword = $this->generateRandomString(15);
			$values = array('password' => md5($newpassword));
			$update_status = $this->common_model->updateRecords('users', $values, $condition );			
		    $mail_status = $this->sendNewPassword($email, $newpassword);
			$result = array('code' => 1002, 'status' => 'failed', 'message' => 'Error occurred!');
			if( $mail_status == true ) {
				$result = array('code' => 1001, 'status' => 'success', 'message' => 'New password has been sent to your mail!');
			}
		}
		echo json_encode($result);
		
	}
	
	function generateRandomString($length) {
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
         
         $header = "From:franklininnocent.fs@gmail.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         return mail ($to,$subject,$message,$header);
	}
	
	public function sendSMS($phone, $name){
         $api_key = '45B9E7678ED7AA';
         $contacts = $phone;
         $from = 'SEREXP'; //SEREXP
         $sms_text = urlencode('Hello '.$name.', Welcome to ServiceXperts. Thank you for successfully registering with us, please login and start booking our services to serve you better.');
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



	public function imageUpload(){    
		if($this->input->get('id') > 0){
				$user_id = $this->input->get('id');
		}
		$data = json_decode(trim(file_get_contents('php://input')), true); 
		if (!file_exists('assets/images/upload/users')) {
			mkdir('assets/images/upload/users', 0777, true);
		}	
		$target_dir = "assets/images/upload/users/";
		$target_file = $target_dir . basename(trim(time().$_FILES["user_image"]["name"]));
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["user_image"]["tmp_name"]);
			if($check !== false) {
			$message =  "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
			} else {
			$message =  "File is not an image.";
			$uploadOk = 0;
			}
		}
		if (file_exists($target_file)) {
			$message =  "Sorry, file already exists.";
			$uploadOk = 0;
		}
		if ($_FILES["user_image"]["size"] > 500000) {
			$message =  "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			$message = "Sorry, only JPG, JPEG, PNG files are allowed.";
			$uploadOk = 0;
		}
		if ($uploadOk == 0) {
			$response = array('code' => 1002, 'status' => 'failed', 'message' => $message);
		} else {
			if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) {			        
				$condition = array('user_id' => $user_id);
				$user_details = $this->common_model->getRecords('users', $condition);			        
				if($user_details[0]->user_id > 0){
					$values = array('user_image' => $target_file);
					$update_status = $this->common_model->updateRecords('users', $values, $condition );	

					if (file_exists($user_details[0]->user_image)){
						unlink($user_details[0]->user_image);
					}
				}
			$response = array('code' => 1001, 'status' => 'success', 
								'message' => "The file ". basename( $_FILES["user_image"]["name"]). " has been uploaded.",
								'image_path' => $target_file);
			} else {
				$response = array('code' => 1002, 'status' => 'failed', 'message' => 'Sorry, there was an error uploading your file.!');
			}
		}
		

		echo json_encode($response);
	}


}
