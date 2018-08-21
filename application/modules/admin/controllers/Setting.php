<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * User Backend
 *
 * @author Sheik Abdullah
 */
class setting extends MY_Controller {

    function __construct() {
        parent::__construct();      
		$this->load->model('SettingModel');
		$this->load->helper('date');
		$this->load->library('upload');
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  } 
 
   	public function update() {	
     	 $st_id = $this->uri->segment(4);			 
         $row = $this->SettingModel->getesetting($st_id);
         $data['setting'] = $row;
         $this->load_view('admin/setting/update', $data);
         }
		
	public function updated() { 
		$st_id = $this->input->post('st_id');
		$setting_array = array(
		 'email' => $this->input->post('email'),
		);		  
		$this->SettingModel->updatesetting($st_id,$setting_array);
		$this->session->set_flashdata('msg', 'updated successfully');
		redirect('admin/setting/update/1');			
		}
	
}