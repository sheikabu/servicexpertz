<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Admin Backend
 *
 * @author Sheik Abdullah
 */
class Servicecategories extends MY_Controller {

    function __construct() {
        parent::__construct();
		       
		    $this->load->model('ServicecategoriesModel');
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
     function list_servicecategories() {
    	$data['servicecategories_list'] = $this->ServicecategoriesModel->getlDetails();   	
        $this->load_view('service_categories/list',$data);    
    }


  public function add()
<<<<<<< HEAD
	{	
     $data['service'] = $this->ServicecategoriesModel->getmaincategories();
	    $this->load_view('service_categories/create');	    
	}

	public function insert() { 			  
		$Servicecategories_array = array(
            /* 'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'), */
=======
	{	      
		$data['servicecategories'] = $this->ServicecategoriesModel->getMainServiceCategories();		
	    $this->load_view('service_categories/create',$data);      
	}

	public function insert() { 			  
		$Servicecategories_array = array(            
>>>>>>> f07c857e7380470b5d823c126240361a5e68fbc3
			'main_category_id' => $this->input->post('main_category_id'),
			'category' => $this->input->post('category')            
        );					
        $this->ServicecategoriesModel->insertServicecategories($Servicecategories_array);         
        $this->session->set_flashdata('msg', 'Inserted successfully');
        redirect('admin/servicecategories/list_servicecategories');

	}


     public function delete()
	{	
		$sc_id = $this->uri->segment(4);         
        $delstatus = $this->ServicecategoriesModel->deleteServicecategories($sc_id);
		if($delstatus==1)
		{
			$data['service'] = $this->ServicecategoriesModel->getlDetails();			 
			$this->session->set_flashdata('msg', 'Deleted successfully');
		    redirect('admin/servicecategories/list_servicecategories');			
		}
		
	} 
   public function update()

         {	$data['servicecategories'] = $this->ServicecategoriesModel->getMainServiceCategories();	
         	 $sc_id = $this->uri->segment(4);			 
             $row = $this->ServicecategoriesModel->geteServicecategories($sc_id);
             $data['service'] = $row;
             $this->load_view('admin/service_categories/update', $data);
         }
		
	public function updated() { 
		  $sc_id = $this->input->post('sc_id');
		  $Servicecategories_array = array(	           
				'main_category_id' => $this->input->post('main_category_id'), 
				'category' => $this->input->post('category')            
	        );			
		  
         $this->ServicecategoriesModel->updateServicecategories($sc_id,$Servicecategories_array);
         $this->session->set_flashdata('msg', 'updated successfully');
	     redirect('admin/servicecategories/list_servicecategories');			
	}
	
}

