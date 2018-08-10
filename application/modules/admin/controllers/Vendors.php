<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Admin Backend
 *
 * @author Sheik Abdullah
 */
class Vendors extends MY_Controller {

    function __construct() {
        parent::__construct();
		       
		    $this->load->model('VendorModel');
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
     function list_vendor() {
    	$data['vendor_list'] = $this->VendorModel->getlDetails();   	
        $this->load_view('vendors/list',$data);    
    }


  public function add()
	{	      
	    $this->load_view('vendors/create');	    
	}

	public function insert() { 			  
		$vendors_array = array(
            'company_name' => $this->input->post('name_of_company'),
			'comany_address' => $this->input->post('address'),
			'address' => $this->input->post('address'),
			'pincode' => $this->input->post('pincode'),
			

			'email' => $this->input->post('email')            
        );					
        $this->VendorModel->insertvendors($vendors_array);         
        $this->session->set_flashdata('msg', 'Inserted successfully');
        redirect('admin/vendors/list_vendor');

	}


     public function delete()
	{	
		$vid = $this->uri->segment(4);         
        $delstatus = $this->VendorModel->deletevendors($vid);
		if($delstatus==1)
		{
			$data['vendor'] = $this->VendorModel->getlDetails();			 
			$this->session->set_flashdata('msg', 'Deleted successfully');
		    redirect('admin/vendors/list_vendor');			
		}
		
	} 
   public function update()

         {	
         	 $vid = $this->uri->segment(4);			 
             $row = $this->VendorModel->getevendors($vid);
             $data['vendor'] = $row;
             $this->load_view('admin/vendors/update', $data);
         }
		
	public function updated() { 
		  $vid = $this->input->post('vid');
		  $vendors_array = array(
	            'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email')	            
	        );			
		  
         $this->VendorModel->updatevendors($vid,$vendors_array);
         $this->session->set_flashdata('msg', 'updated successfully');
	     redirect('admin/vendors/list_vendor');			
	}
	
}

