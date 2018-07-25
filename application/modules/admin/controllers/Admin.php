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
		$this->load->model('valid_m');
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
		$user_login=array(
			'email' => $this->input->post('email'), 
		'password' => $this->input->post('password'), 
		);
		
		$data=$this->valid_m->login_user($user_login['email'],$user_login['password']);
		
	
/*if(!empty($this->input->post('email'))) {
		$user_login=array(
			'email' => $this->input->post('email'), 
		'password' => md5($this->input->post('password')), 
		);
		$data=$this->valid_m->login_user($user_login['email'],$user_login['password']);
 	if($data)
      {
      	$user_data=array(
      		'email'=>$data,
      		'logged_in'=>true
      		);	
      	$this->session->set_userdata($user_data);
        $this->load_view('dashboard');
      }
      else{			       
      	$this->session->set_flashdata('loginfailed','Please try again!');
      	redirect(base_url().'Admin');      	
      }
		$info['message']="valid success";
	 }
	 else {
	 	 $this->load_view('users');
	 }*/
	 $this->load_view('users');
	}
	public function logout() //login_check
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('email');
	   	$this->session->set_flashdata('user_loggedout','you are now logged out');
      	redirect('Admin');
			
	}
}
