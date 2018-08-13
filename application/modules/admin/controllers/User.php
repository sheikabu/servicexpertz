<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * User Backend
 *
 * @author Sheik Abdullah
 */
class User extends MY_Controller {

    function __construct() {
        parent::__construct();      
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
    	$this->load->view('common/header',$data);     	        
        $this->load->view('list',$data);
        $this->load->view('common/footer');
    }

    function list_user() {
    	$data['user_list'] = $this->UserModel->getlDetails();   	
        $this->load_view('user/list',$data);    
    }

    public function add()
	{	      
	    $this->load_view('user/create');	    
	}

	public function insert() { 			  
		$user_array = array(
            'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
            'role'=> $this->input->post('role')
        );					
        $this->UserModel->insertuser($user_array);         
        $this->session->set_flashdata('msg', 'Inserted successfully');
        redirect('admin/user/list_user');

	}


     public function delete()
	{	
		$userid = $this->uri->segment(4);         
        $delstatus = $this->UserModel->deleteuser($userid);
		if($delstatus==1)
		{
			$data['user'] = $this->UserModel->getlDetails();			 
			$this->session->set_flashdata('msg', 'Deleted successfully');
		    redirect('admin/user/list_user');			
		}
		
	} 
   public function update()

         {	
         	 $userid = $this->uri->segment(4);			 
             $row = $this->UserModel->geteuser($userid);
             $data['user'] = $row;
             $this->load_view('admin/user/update', $data);
         }
		
	public function updated() { 
		  $userid = $this->input->post('userid');
		  $user_array = array(
	            'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
	            'role'=> $this->input->post('role')
	        );			
		  
         $this->UserModel->updateuser($userid,$user_array);
         $this->session->set_flashdata('msg', 'updated successfully');
	     redirect('admin/user/list_user');			
	}
	
}
