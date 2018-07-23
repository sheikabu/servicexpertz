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
    }

    function index() {
        $this->load->view('login');
    }

}
