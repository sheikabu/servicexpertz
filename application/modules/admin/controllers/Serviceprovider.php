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
    $this->load_view('service_provider/create', $data);	    
	}

public function insert() { 			  
	$sp_array = array(
		'vendor_id' => $this->input->post('vendor_id'),
        'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		'phone' => $this->input->post('phone'),
		'emp_id' => $this->input->post('emp_id')          
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
     $data['service_providers'] = $row;
     $this->load_view('admin/service_provider/update', $data);
     }
		
public function updated() { 
	  $spid = $this->input->post('spid');
	  $sp_array = array(
            'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'phone' => $this->input->post('phone'),	  
			'vendor_id' => $this->input->post('vendor_id'),
			'emp_id' => $this->input->post('emp_id')

        );	
     $this->ServiceproviderModel->updateuser($spid,$sp_array);
     $this->session->set_flashdata('msg', 'updated successfully');
     redirect('admin/serviceprovider/list_sp');			
	}
	
}
