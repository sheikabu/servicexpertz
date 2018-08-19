<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * User Backend
 *
 * @author Sheik Abdullah
 */
class Services extends MY_Controller {

    function __construct() {
        parent::__construct();      
		$this->load->model('ServicesModel');
		$this->load->helper('date');
		$this->load->library('upload');
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  } 

public function list_services() {
	$data['services_list'] = $this->ServicesModel->getlDetails();   	
    $this->load_view('services/list',$data);    
	}
	

public function add(){
	$data['maincate'] = $this->ServicesModel->getMainCategories();
	$data['cate'] = $this->ServicesModel->getCategories();
	
    $this->load_view('services/create', $data);	    
	}

public function insert() { 
if(!empty($_FILES["userfile"]["name"]))  
			{
	$config['upload_path'] = 'upload/services';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('userfile'))  
        {  
        echo $this->upload->display_errors();  
        }
		$images = $_FILES["userfile"]["name"];
			}
		else {
         $images =  $this->input->post('old_image');
		}			  
	$service_array = array(
		'main_category_id' => $this->input->post('maincate_id'),
        'category_id' => $this->input->post('cate_id'),		
        'services' => $this->input->post('service'),
		'descriptions' => $this->input->post('descriptions'),
        'images' => $images,
        'terms_conditions' => $this->input->post('terms_conditions')		
    );			
    //print_r($service_array); exit;		
    $this->ServicesModel->insertService($service_array);         
    $this->session->set_flashdata('msg', 'Inserted successfully');
    redirect('admin/services/list_services');
	}

public function delete(){	
	$sid = $this->uri->segment(4);         
    $delstatus = $this->ServicesModel->deleteService($sid);
	if($delstatus==1)
		{				 
		$this->session->set_flashdata('msg', 'Deleted successfully');
	    redirect('admin/services/list_services');			
		}
	
	} 

public function update() {	
 	 $sid = $this->uri->segment(4);
     $row = $this->ServicesModel->getService($sid);
     $data['maincate'] = $this->ServicesModel->getMainCategories();
	 $data['cate'] = $this->ServicesModel->getCategories();
     $data['service'] = $row;
     $this->load_view('admin/services/update', $data);
     }
		
public function updated() { 
if(!empty($_FILES["userfile"]["name"]))  
			{
	$config['upload_path'] = 'upload/services';
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->upload->initialize($config);
        $this->load->library('upload', $config); //image upload
        if(!$this->upload->do_upload('userfile'))  
        {  
        echo $this->upload->display_errors();  
        }
		$images = $_FILES["userfile"]["name"];
			}
		else {
         $images =  $this->input->post('old_image');
		}	
	  $sid = $this->input->post('sid');
	  $service_array = array(
		'main_category_id' => $this->input->post('maincate_id'),
        'category_id' => $this->input->post('cate_id'),		
        'services' => $this->input->post('service'),
        'updated_at' => 'CURRENT_TIMESTAMP',
        'descriptions' => $this->input->post('descriptions'),
        'images' => $images,
		'terms_conditions' => $this->input->post('terms_conditions')		 
    	);			
     $this->ServicesModel->updateService($sid,$service_array);
     $this->session->set_flashdata('msg', 'updated successfully');
     redirect('admin/services/list_services');			
	}
		
	
}
