<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Category extends MY_Controller {

    function __construct() {
        parent::__construct();
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
