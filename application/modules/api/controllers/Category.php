<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Category extends MY_Controller {

    function __construct() {
        parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
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
		$condition = array('category_type' => $this->input->get('type'));
		$categories = $this->common_model->getRecords('category', $condition, $limit = null, $offset = null);
		echo json_encode($categories);
    }





}
