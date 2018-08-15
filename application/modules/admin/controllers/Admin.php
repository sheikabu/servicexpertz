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
        	//redirect('admin/user/list_user');
        	$this->home();  
        }		
	}

	public function home() //login_check
	{	
		//pass counts here
		$data['usercount'] = 10;
		$data['vendorcount'] = 15;
		$data['booking'] = 150;
		$this->load_view('dashboard', $data);        
        		
	}
	
	
	public function logout() //login_check
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('email');
	   	$this->session->set_flashdata('user_loggedout','you are now logged out');
      	redirect('admin');
			
	}
}
