<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Admin Backend
 *
 * @author Sheik Abdullah
 */
class Vendors extends MY_Controller {

    function __construct() {
        parent::__construct();
		    $this->load->library('session');        
		    $this->load->model('VendorModel');
    }
   
	public function load_view($view, $vars = array()) {
	    $this->load->view('common/inner_header',$vars);    
	    $this->load->view('common/inner_left_menu');    
	    $this->load->view($view, $vars);
	    $this->load->view('common/inner_footer');
	  }

    function index() {
       $vendors=new VendorModel;
       $data['data']=$vendors->get_vendors();
       print_r($data); exit;
       $this->load_view('vendor/list',$data);    

    }

    public function create()
	{	      
	    $this->load_view('vendors/create');	    
	}
	
   public function store()
   {
       $vendors=new VendorModel;
       $vendors->insert_vendor();
       redirect(base_url('admin/vendors'));
    }

	 public function edit($id)
   {
       $vendor = $this->db->get_where('vendors', array('vid' => $id))->row();       
       $this->load_view('vendors/edit',array('vendor'=>$vendor));
   }

      public function update($id)
   {
       $vendors=new VendorModel;
       $vendors->update_vendor($id);
       redirect(base_url('admin/vendors'));
   }

      public function delete($id)
   {
       $this->db->where('vid', $id);
       $this->db->delete('vendors');
       redirect(base_url('admin/vendors'));
   }
}
