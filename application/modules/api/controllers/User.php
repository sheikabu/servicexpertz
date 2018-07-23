<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://www.roytuts.com
 */
class User extends MY_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model("user_model");
    }

    function index() {
        //$this->load->view('home');
    }

    public function create() {
     	echo 'create user function';die;
        //$this->load->view('home');
    }


}
