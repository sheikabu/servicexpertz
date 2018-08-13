<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * User Backend
 *
 * @author Sheik Abdullah
 */
class Serviceprovider extends MY_Controller {

    function __construct() {
        parent::__construct();      
		$this->load->model('ServiceproviderModel');
		$this->load->model('ServicecategoriesModel');
		$this->load->model('ServicesModel');
		$this->load->library('upload');
		$this->load->helper('date');
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  } 

public function list_sp() {
	$data['sp_list'] = $this->ServiceproviderModel->getlDetails();   	
    $this->load_view('service_provider/list',$data);    
	}

public function add(){
	$data['vendors'] = $this->ServiceproviderModel->getVendors();	
	$data['maincate'] = $this->ServicecategoriesModel->getmaincategories();
	$data['cate'] = $this->ServicecategoriesModel->getlDetails();
	$data['services'] = $this->ServicesModel->getlDetails();

    $this->load_view('service_provider/create', $data);	    
	}

public function insert() { 		

		$category = $this->input->post('cate_id');
		$categories = json_encode($category, true);
		
		$config['upload_path'] = 'upload/sp';
		$config['overwrite'] = TRUE;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';  
		$this->upload->initialize($config);
		$this->load->library('upload', $config); //image upload
		if(!$this->upload->do_upload('userfile'))  
		{  
		$this->upload->display_errors();  
		}
		$image = $_FILES["userfile"]["name"]; 
			
		
	$sp_array = array(
		'vendor_id' => $this->input->post('vendor_id'),
		'main_category_id' => $this->input->post('main_id'),
		'category_id' => $categories,
		'services_id' => $this->input->post('service_id'),
		'min_cost' => $this->input->post('mincost'),
        'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		'phone' => $this->input->post('phone'),
		'email' => $this->input->post('email'),
		'emp_id' => $this->input->post('emp_id'),
		'image' => $image      
    );					
    $this->ServiceproviderModel->insertuser($sp_array);         
    $this->session->set_flashdata('msg', 'Inserted successfully');
    redirect('admin/serviceprovider/list_sp');
	}

public function delete(){	
	$spid = $this->uri->segment(4);         
    $delstatus = $this->ServiceproviderModel->deleteuser($spid);
	if($delstatus==1)
		{				 
		$this->session->set_flashdata('msg', 'Deleted successfully');
	    redirect('admin/serviceprovider/list_sp');			
		}
	
	} 

public function update() {	
 	 $spid = $this->uri->segment(4);
     $row = $this->ServiceproviderModel->geteuser($spid);
     $data['vendors'] = $this->ServiceproviderModel->getVendors();
     $data['vendors'] = $this->ServiceproviderModel->getVendors();	
	 $data['maincate'] = $this->ServicecategoriesModel->getmaincategories();
	 $data['cate'] = $this->ServicecategoriesModel->getlDetails();
	 $data['services'] = $this->ServicesModel->getlDetails();	
     $data['service_providers'] = $row;
     $this->load_view('admin/service_provider/update', $data);
     }
		
public function updated() { 

		if(!empty($_FILES["userfile"]["name"])) {
		$config['upload_path'] = 'upload/sp';
		$config['overwrite'] = TRUE;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';  
		$this->upload->initialize($config);
		$this->load->library('upload', $config); //image upload
		$this->upload->do_upload('userfile');
			$image = $_FILES["userfile"]["name"];
		}
		else {
			$image = $this->input->post('existingimage');
		}
		
	  $spid = $this->input->post('spid');
	  $sp_array = array(
        'vendor_id' => $this->input->post('vendor_id'),
		'main_category_id' => $this->input->post('main_id'),
		'category_id' => $this->input->post('cate_id'),
		'services_id' => $this->input->post('service_id'),
		'min_cost' => $this->input->post('mincost'),
        'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		'phone' => $this->input->post('phone'),
		'email' => $this->input->post('email'),
		'emp_id' => $this->input->post('emp_id'),
		'image' => $image  

        );	
     $this->ServiceproviderModel->updateuser($spid,$sp_array);
     $this->session->set_flashdata('msg', 'updated successfully');
     redirect('admin/serviceprovider/list_sp');			
	}
	
}
