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
    function list_employee() {
    	$vid = $this->uri->segment(4);		
    	$data['employee_lists'] = $this->VendorModel->getEmployee($vid);   	
        $this->load_view('employee_details/list',$data);    
    }

  public function add()
	{	      
	    $this->load_view('vendors/create');	    
	}

	public function employee_details_add()
	{	      
	    $this->load_view('employee_details/create');	    
	}

	public function insert() { 	
		if(!empty($_FILES["userfile"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('userfile')) {  
        echo $this->upload->display_errors();  
        }
		$image = $_FILES["userfile"]["name"];
		}
		else {
         $image =  $this->input->post('old_image');
		}
		//Address image
		if(!empty($_FILES["address_image"]["name"])) {
		$config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('address_image')) {  
        echo $this->upload->display_errors();  
        }
		$address_image = $_FILES["address_image"]["name"];
		}
		else {
         $address_image =  $this->input->post('old_address_image');
		}		
		//[pan] image
		if(!empty($_FILES["pan_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('pan_image')) {  
        echo $this->upload->display_errors();  
        }
			$pan_image = $_FILES["pan_image"]["name"];
			}
		else {
         $pan_image =  $this->input->post('old_pan_image');
		}
		//company image
		if(!empty($_FILES["company_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('company_image')) {  
        echo $this->upload->display_errors();  
        }
			$company_image = $_FILES["company_image"]["name"];
			}
		else {
         $company_image =  $this->input->post('old_company_image');
		}	
		//aadhar image
		if(!empty($_FILES["aadhar_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('aadhar_image')) {  
        echo $this->upload->display_errors();  
        }
			$aadhar_image = $_FILES["aadhar_image"]["name"];
			}
		else {
         $aadhar_image =  $this->input->post('old_aadhar_image');
		}	
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
			'pan_card' => $this->input->post('pan_card'),
			'title_designation' => $this->input->post('title_designation'),
			'direct_no' => $this->input->post('direct_no'),
			'mobile_no' => $this->input->post('mobile_no'),
			'date_cestablished' => $this->input->post('date_cestablished'),	
			'cross_annual' => $this->input->post('cross_annual'), 
			'bank_name' => $this->input->post('bank_name'), 
			'bank_account_no' => $this->input->post('bank_account_no'),
			'ifsc_code' => $this->input->post('ifsc_code'),
			'bank_account_type' => $this->input->post('bank_account_type'),
			'bank_address' => $this->input->post('bank_address'), 			           
        );					
        $this->VendorModel->insertvendors($vendors_array);         
        $this->session->set_flashdata('msg', 'Inserted successfully');
        redirect('admin/vendors/list_vendor');

	}

	public function employee_details_insert() {
		$emp_id = $this->input->post('emp_id');
		if(!empty($_FILES["userfile"]["name"]))  
		{
		mkdir($emp_id, 0777, true);
		$config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('userfile')) {  
        echo $this->upload->display_errors();  
        }
		$image = $_FILES["userfile"]["name"];
		}
		else {
        $image =  $this->input->post('old_image');
		}
		//Address image
		if(!empty($_FILES["address_image"]["name"])) {
		$config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('address_image')) {  
        echo $this->upload->display_errors();  
        }
		$address_image = $_FILES["address_image"]["name"];
		}
		else {
        $address_image =  $this->input->post('old_address_image');
		}		
		//[pan] image
		if(!empty($_FILES["pan_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('pan_image')) {  
        echo $this->upload->display_errors();  
        }
		$pan_image = $_FILES["pan_image"]["name"];
		}
		else {
         $pan_image =  $this->input->post('old_pan_image');
		}
		//company image
		if(!empty($_FILES["company_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('company_image')) {  
        echo $this->upload->display_errors();  
        }
		$company_image = $_FILES["company_image"]["name"];
		}
		else {
        $company_image =  $this->input->post('old_company_image');
		}	
		//aadhar image
		if(!empty($_FILES["aadhar_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('aadhar_image')) {  
        echo $this->upload->display_errors();  
        }
		$aadhar_image = $_FILES["aadhar_image"]["name"];
		}
		else {
        $aadhar_image =  $this->input->post('old_aadhar_image');
		}	
		$vendors_array = array(
			'vid' => $this->input->post('vid'), 
           	'employee_id' => $this->input->post('emp_id'), 
			'staff_name' => $this->input->post('staff_name'), 
			'staff_address' => $this->input->post('staff_address'), 
			'skills' => $this->input->post('skills'),
			'experience' => $this->input->post('experience'),
			'image' => $image,
			'address_image' => $address_image,
			'pan_image' => $pan_image,
			'company_image' => $company_image,
			'aadhar_image' => $aadhar_image			
        );	
        $vid = $this->input->post('vid');				
        $this->VendorModel->insertemployee($vendors_array);         
        $this->session->set_flashdata('msg', 'Inserted successfully');
        redirect('admin/vendors/list_employee/'.$vid);

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
	 public function employee_delete()
	{	
		$vid = $this->uri->segment(4);
		$eid = $this->uri->segment(5);       
        $delstatus = $this->VendorModel->deleteEmployee($eid);
		if($delstatus==1)
		{
			$data['employee_lists'] = $this->VendorModel->getEmployee();			 
			$this->session->set_flashdata('msg', 'Deleted successfully');
		    redirect('admin/vendors/list_employee/'.$vid);			
		}
		
	} 
	public function view() {
		 $vid = $this->uri->segment(4);			 
         $row = $this->VendorModel->getevendors($vid);
         $data['vendor'] = $row;
         $this->load_view('admin/vendors/view', $data);
	}

	public function employee_view() {
		 $vid = $this->uri->segment(4);
		 $eid = $this->uri->segment(5);	 
         $row = $this->VendorModel->getEmployeeUpdate($eid);
         $data['employee'] = $row;
         $this->load_view('admin/employee_details/view', $data);
	}

   public function update() {	
         	 $vid = $this->uri->segment(4);			 
             $row = $this->VendorModel->getevendors($vid);
             $data['vendor'] = $row;
             $this->load_view('admin/vendors/update', $data);
         }

    public function employee_update() {	
         	 $vid = $this->uri->segment(4);
			 $eid = $this->uri->segment(5);
             $row = $this->VendorModel->getEmployeeUpdate($eid);
             $data['employee'] = $row;             
             $this->load_view('admin/employee_details/update', $data);
         }
		
	public function updated() { 
	if(!empty($_FILES["userfile"]["name"]))  
			{
	    $config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('userfile'))  
        {  
        echo $this->upload->display_errors();  
        }
		$image = $_FILES["userfile"]["name"];
			}
			else {
         $image =  $this->input->post('old_image');
		}
		//Address image
		if(!empty($_FILES["address_image"]["name"]))  {
		$config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('address_image')) {  
        echo $this->upload->display_errors();  
        }
		$address_image = $_FILES["address_image"]["name"];
		}
		else {
			
         $address_image =  $this->input->post('old_address_image');
		}
		//[pan] image
		if(!empty($_FILES["pan_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('pan_image')) {  
        echo $this->upload->display_errors();  
        }
			$pan_image = $_FILES["pan_image"]["name"];
			}
			else {
         $pan_image =  $this->input->post('old_pan_image');
		}
		//company image
		if(!empty($_FILES["company_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('company_image')) {  
        echo $this->upload->display_errors();  
        }
			$company_image = $_FILES["company_image"]["name"];
			}
			else {
         $company_image =  $this->input->post('old_company_image');

		}
		//aadhar image
		if(!empty($_FILES["aadhar_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('aadhar_image')) {  
        echo $this->upload->display_errors();  
        }
			$aadhar_image = $_FILES["aadhar_image"]["name"];
			}
			else {
         $aadhar_image =  $this->input->post('old_aadhar_image');
		}
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
			'pan_card' => $this->input->post('pan_card'),
			'title_designation' => $this->input->post('title_designation'),
			'direct_no' => $this->input->post('direct_no'),
			'mobile_no' => $this->input->post('mobile_no'),
			'date_cestablished' => $this->input->post('date_cestablished'),	
			'cross_annual' => $this->input->post('cross_annual'), 
			'bank_name' => $this->input->post('bank_name'), 
			'bank_account_no' => $this->input->post('bank_account_no'),
			'ifsc_code' => $this->input->post('ifsc_code'),
			'bank_account_type' => $this->input->post('bank_account_type'),
			'bank_address' => $this->input->post('bank_address'), 			
	        );			
		  
         $this->VendorModel->updatevendors($vid,$vendors_array);
         $this->session->set_flashdata('msg', 'updated successfully');
	     redirect('admin/vendors/list_vendor');			
	}

	public function employee_updated() { 
	if(!empty($_FILES["userfile"]["name"]))  
			{
	    $config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('userfile'))  
        {  
        echo $this->upload->display_errors();  
        }
		$image = $_FILES["userfile"]["name"];
			}
			else {
         $image =  $this->input->post('old_image');
		}
		//Address image
		if(!empty($_FILES["address_image"]["name"]))  {
		$config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('address_image')) {  
        echo $this->upload->display_errors();  
        }
		$address_image = $_FILES["address_image"]["name"];
		}
		else {
			
         $address_image =  $this->input->post('old_address_image');
		}
		//[pan] image
		if(!empty($_FILES["pan_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('pan_image')) {  
        echo $this->upload->display_errors();  
        }
			$pan_image = $_FILES["pan_image"]["name"];
			}
			else {
         $pan_image =  $this->input->post('old_pan_image');
		}
		//company image
		if(!empty($_FILES["company_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('company_image')) {  
        echo $this->upload->display_errors();  
        }
			$company_image = $_FILES["company_image"]["name"];
			}
			else {
         $company_image =  $this->input->post('old_company_image');

		}
		//aadhar image
		if(!empty($_FILES["aadhar_image"]["name"]))  
			{
		$config['upload_path'] = 'upload/vendor/employee';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('aadhar_image')) {  
        echo $this->upload->display_errors();  
        }
			$aadhar_image = $_FILES["aadhar_image"]["name"];
			}
			else {
         $aadhar_image =  $this->input->post('old_aadhar_image');
		}
		  $eid = $this->input->post('eid');
		  $vid = $this->input->post('vid');

		  $vendors_array = array(		  	 
           	'employee_id' => $this->input->post('emp_id'),         
			'staff_name' => $this->input->post('staff_name'), 
			'staff_address' => $this->input->post('staff_address'), 
			'skills' => $this->input->post('skills'),
			'experience' => $this->input->post('experience'), 	
            'image' => $image,
			'address_image' => $address_image,
			'pan_image' => $pan_image,
			'company_image' => $company_image,
			'aadhar_image' => $aadhar_image
	        );			
		  
         $this->VendorModel->updateEmployee($eid,$vendors_array);
         $this->session->set_flashdata('msg', 'updated successfully');
	     redirect('admin/vendors/list_employee/'.$vid);	
	}
	
	 public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                       
                }
        }
	
	
	
}

