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
        $this->load->helper('url');				
		$this->load->helper('form');		
		$this->load->library('session');
		$this->load->model('LoginModel');
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  }

    function index() {
    	$data['title'] = 'Title of the page'; 
    	$this->load->view('common/header',$data);     	        
        $this->load->view('login',$data);
        $this->load->view('common/footer');
    }

    function users() {
    	$data['title'] = 'Title of the page';    	
        $this->load_view('users',$data);    
    }

	public function dashboard() //login_check
	{
		 // Load the model
		 $login=new LoginModel;
         $result = $login->validate();
        // Now we verify the result
        if(!$result){
            // If user did not validate, then show them login page again
            $this->index();
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
