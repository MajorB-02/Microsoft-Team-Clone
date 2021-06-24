<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 
class Privacy extends CI_Controller{
	function __construct() {
        parent::__construct();
        
    }
    
    function index(){
        $data['page_title']     = 'Terms & Conditions'; 
        $this->load->view('admin/privacy_policy', $data);
    }
}

