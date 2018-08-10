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
			$this->load->library('upload');
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
/* if(!empty($_FILES["image_file"]["name"]))  
			{   
				$config['upload_path'] = 'upload/photos';
				$config['overwrite'] = TRUE;
				$config['allowed_types'] = 'jpg|jpeg|png|gif';  
				$this->upload->initialize($config);
				$this->load->library('upload', $config); //image upload

				if(!$this->upload->do_upload('image_file'))  
				{  
				echo $this->upload->display_errors();  
				}
				$image = $_FILES["image_file"]["name"]; 
			} else {
				$image =  $this->input->post('old_image');
			}	 */
		$vendors_array = array(
            'company_name' => $this->input->post('company_name'),
			'comany_address' => $this->input->post('comany_address'),
			'pincode' => $this->input->post('pincode'),
			'telephone_no' => $this->input->post('telephone_no'),
			'fax_no' => $this->input->post('fax_no'),
			'email' => $this->input->post('email'), 
			'web' => $this->input->post('web'),
            'name_representative' => $this->input->post('name_representative'),
			'email_crepresentative' => $this->input->post('email_crepresentative'),
			'title_designation' => $this->input->post('title_designation'),
			'direct_no' => $this->input->post('direct_no'),
			'mobile_no' => $this->input->post('mobile_no'),
			'date_cestablished' => $this->input->post('date_cestablished'),	
			'cross_annual' => $this->input->post('cross_annual'), 
			'bank_name' => $this->input->post('bank_name'), 
			'bank_address' => $this->input->post('bank_address'), 
			'staff_name' => $this->input->post('staff_name'), 
			'staff_address' => $this->input->post('staff_address'), 
			'skills' => $this->input->post('skills'),
			'experience' => $this->input->post('experience') 		
			

			           
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
	public function view() // add user full details
	{
		 $vid = $this->uri->segment(4);			 
             $row = $this->VendorModel->getevendors($vid);
             $data['vendor'] = $row;
             $this->load_view('admin/vendors/view', $data);
		
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
	           'company_name' => $this->input->post('company_name'),
			'comany_address' => $this->input->post('comany_address'),
			'pincode' => $this->input->post('pincode'),
			'telephone_no' => $this->input->post('telephone_no'),
			'fax_no' => $this->input->post('fax_no'),
			'email' => $this->input->post('email'), 
			'web' => $this->input->post('web'),
			'name_representative' => $this->input->post('name_representative'),
			'email_crepresentative' => $this->input->post('email_crepresentative'),
			'title_designation' => $this->input->post('title_designation'),
			'direct_no' => $this->input->post('direct_no'),
			'mobile_no' => $this->input->post('mobile_no'),
			'date_cestablished' => $this->input->post('date_cestablished'),	
			'cross_annual' => $this->input->post('cross_annual'), 
			'bank_name' => $this->input->post('bank_name'), 
			'bank_address' => $this->input->post('bank_address'), 
			'staff_name' => $this->input->post('staff_name'), 
			'staff_address' => $this->input->post('staff_address'), 
			'skills' => $this->input->post('skills'),
			'experience' => $this->input->post('experience') 	            
	        );			
		  
         $this->VendorModel->updatevendors($vid,$vendors_array);
         $this->session->set_flashdata('msg', 'updated successfully');
	     redirect('admin/vendors/list_vendor');			
	}
	
}

