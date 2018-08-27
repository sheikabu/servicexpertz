<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Category extends MY_Controller {

    function __construct() {
        parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        header('Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE, OPTIONS');
        header('Access-Control-Max-Age: 1000');
		$method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        
		$this->load->model('api/common_model');
    }

    function index() {

    }
	
	public function getCategoryList(){
		$condition = array('main_category_id' => $this->input->get('type'));
		$categories = $this->common_model->getRecords('service_categories', $condition, $limit = null, $offset = null);
		$i = 0;
		foreach($categories as $cat){
			$cat_condition = array('category_id' => $cat->sc_id);
			$subcategories = $this->common_model->getRecords('services', $cat_condition, $limit = null, $offset = null);
			$categories[$i]->services = $subcategories;
			$i++;
		}	
		echo json_encode($categories);
    }





}
