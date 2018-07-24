<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Admin Backend
 *
 * @author Sheik Abdullah
 */
class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  }

    function index() {
    	$data['title'] = 'Title of the page'; 
    	$this->load->view('common/header',$data);     	        
        $this->load->view('login',$data);
        $this->load->view('common/footer');
    }

    function users() {
    	$data['title'] = 'Title of the page';    	
        $this->load_view('users',$data);    
    }

}
