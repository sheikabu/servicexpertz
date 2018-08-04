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
		$this->load->model('UserModel');
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
	
   public function store()
   {
       $user=new UserModel;
       $user->insert_user();
       redirect(base_url('admin/user'));
    }

	public function edit($id)
   {
       $vendor = $this->db->get_where('user', array('vid' => $id))->row();       
       $this->load_view('user/edit',array('vendor'=>$vendor));
   }

      public function update($id)
   {
       $user=new UserModel;
       $user->update_user($id);
       redirect(base_url('admin/user'));
   }

      public function delete($id)
   {
       $this->db->where('vid', $id);
       $this->db->delete('user');
       redirect(base_url('admin/user'));
   }
    function edit_user() {
    	$data['title'] = 'Title of the page';    	
        $this->load_view('edit_users',$data);    
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
