<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Admin Backend
 *
 * @author Sheik Abdullah
 */
class Servicesubcategories extends MY_Controller {

    function __construct() {
        parent::__construct();
		    $this->load->model('ServiceproviderModel');
		    $this->load->model('ServicecategoriesModel');  
		    $this->load->model('ServicesubcategoriesModel');
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

     function list_servicesubcategories() {     	
    	$data['servicesubcategories'] = $this->ServicesubcategoriesModel->getlDetails();   	
        $this->load_view('service_subcategories/list',$data);    
    }


  public function add()

	{	      
		//$data['servicsubcategories'] = $this->ServicesubcategoriesModel->getMainServiceCategories();
		$data['maincate'] = $this->ServicecategoriesModel->getmaincategories();
	    $data['cate'] = $this->ServicecategoriesModel->getlDetails();		
	    $this->load_view('service_subcategories/create',$data);      
	}

	public function fetch_category() {
			//$this->input->post('maincate');
			$mcate_id = $this->input->post('maincate');
		    $cate_id = $this->input->post('cate_id');
			echo $this->ServicesubcategoriesModel->fetchCategory($mcate_id,$cate_id);
			
	}

	public function insert() { 

        $main_id = $this->input->post('main_category');
		$category = $this->input->post('cate_id');
		
			if(!empty($_FILES["userfile"]["name"]))  
			{
				$config['upload_path'] = 'upload/servicesubcategories';
				$config['overwrite'] = TRUE;
				$config['allowed_types'] = 'jpg|jpeg|png|gif';  
				$this->upload->initialize($config);
				$this->load->library('upload', $config); //image upload
				if(!$this->upload->do_upload('userfile'))  
				{  
				echo $this->upload->display_errors();  
				}
				$imagess = 'upload/servicesubcategories/'.$_FILES["userfile"]["name"];
			}
			else {
				$imagess =  $this->input->post('old_image');
			}
		
		$Servicesubcategories_array = array(            
			'main_category_id' => $main_id,
		    'category_id' => $category,
			'sub_category' => $this->input->post('sub_category'),
            'sub_category_image' => $imagess,
			'category_description' => $this->input->post('description')
			 
        );					
        $this->ServicesubcategoriesModel->insertServicesubcategories($Servicesubcategories_array);         
        $this->session->set_flashdata('msg', 'Inserted successfully');
        redirect('admin/servicesubcategories/list_servicesubcategories');

	}


     public function delete()
	{	
		$ssc_id = $this->uri->segment(4);         
        $delstatus = $this->ServicesubcategoriesModel->deleteServicesubcategories($ssc_id);
		if($delstatus==1)
		{			
			$this->session->set_flashdata('msg', 'Deleted successfully');
		    redirect('admin/servicesubcategories/list_servicesubcategories');			    
		}
		
	} 
   public function update()

         {	 $data['maincate'] = $this->ServicecategoriesModel->getmaincategories();
	         $data['cate'] = $this->ServicecategoriesModel->getlDetails();
         	 $ssc_id = $this->uri->segment(4);			 
             $row = $this->ServicesubcategoriesModel->geteServicecategories($ssc_id);
             $data['service'] = $row;
             $this->load_view('admin/service_subcategories/update', $data);
         }
		
	public function updated() { 
	if(!empty($_FILES["userfile"]["name"]))  
			{
				$config['upload_path'] = 'upload/servicesubcategories';
		        $config['overwrite'] = TRUE;
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
		        $this->upload->initialize($config);
		        $this->load->library('upload', $config); //image upload
		        if(!$this->upload->do_upload('userfile'))  
		        {
		        echo $this->upload->display_errors();  
		        }
				$imagess = 'upload/servicesubcategories/'.$_FILES["userfile"]["name"];
			}
		else {
         	$imagess =  $this->input->post('old_image');
		}
		  $ssc_id = $this->input->post('ssc_id');
		  $Servicecategories_array = array(	           
				'main_category_id' => $this->input->post('main_category'), 
				'category_id' => $this->input->post('cate_id'),
				'sub_category' => $this->input->post('sub_category'),
                'sub_category_image' => $imagess,
			    'category_description' => $this->input->post('description')				
	        );			
		  
         $this->ServicesubcategoriesModel->updateServicesubcategories($ssc_id,$Servicecategories_array);
         $this->session->set_flashdata('msg', 'updated successfully');
	      redirect('admin/servicesubcategories/list_servicesubcategories');	
	}
	
}

