<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * User Backend
 *
 * @author Sheik Abdullah
 */
class Setting extends MY_Controller {

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

public function list_setting() {
	$data['Setting_list'] = $this->ServicesModel->getlDetails();   	
    $this->load_view('Setting/list',$data);    
	}
	
}