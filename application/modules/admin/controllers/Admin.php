<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Admin Backend
 *
 * @author Sheik Abdullah
 */
class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();	
        $this->load->library('session');		
        $this->load->helper('url');				
		$this->load->helper('form');		
		
		$this->load->model('LoginModel');
		$this->load->model('UserModel');
		$this->load->helper('date');
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  }  
	 

    function index($data = NULL) {
    	//$data['title'] = 'Title of the page'; 
    	$this->load->view('common/header',$data);     	        
        $this->load->view('login',$data);
        $this->load->view('common/footer');
    }

    function users() {
    	$data['title'] = 'Title of the page';    	
        $this->load_view('users',$data);    
    }
public function create()
	{	      
	    $this->load_view('user/create');	    
	}
	 
 

	public function insert_user() { 
			  $userid = $this->input->post('userid');
			  $first_name = $this->input->post('first_name'); 
$last_name = $this->input->post('last_name'); 
$email = $this->input->post('email'); 			  
			
            $this->UserModel->insertuser($userid,$first_name,$last_name,$email); 
             $data['user'] = $this->UserModel->getlDetails();
			$data['message']='<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Add successfully
	
								</div>';
             $this->load_view('admin/users', $data);
		}

      public function update($userid)
   {
       $user=new UserModel;
       $user->update_user($userid);
       redirect(base_url('admin/users'));
   }

     public function delete()
{
        $userid = $this->input->get('userid');
        $delstatus = $this->UserModel->deleteuser($userid);
		if($delstatus==1)
		{
			$data['user'] = $this->UserModel->getlDetails();
			
		     $this->load_view('users',$data);
			
			
		}
		
} 
   public function edit_users()

         {
			 $userid = $this->input->get('userid');
             $row = $this->UserModel->geteuser($userid);
             $data['user'] = $row;
             $this->load_view('edit_users', $data);
         }
		
		public function edit_user_success() { 
			  $userid = $this->input->post('userid');
			  $first_name = $this->input->post('first_name');  
			   $last_name = $this->input->post('last_name'); 
			    $email = $this->input->post('email'); 
			  
             $this->UserModel->updateuser($userid,$first_name,$last_name,$email);
             $data['user'] = $this->UserModel->getlDetails();
			$data['message1']='<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Edit successfully
	
								</div>';
             $this->load_view('users', $data);
		}
	
	
	public function dashboard() //login_check
	{
		 // Load the model
		 $login=new LoginModel;
         $result = $login->validate();
        // Now we verify the result
        if(!$result){            
			$data['error'] = 'Login Failed';			
            $this->index($data);
        }else{        	
            // If user did validate, 
            // Send them to members area
            $data['title'] = '';    	
        	redirect('admin/users');
        }		
	}
	
	
	public function logout() //login_check
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('email');
	   	$this->session->set_flashdata('user_loggedout','you are now logged out');
      	redirect('admin');
			
	}
}
