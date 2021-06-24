<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 
class Notfound extends CI_Controller{
	function __construct() {
        parent::__construct();
        
    }
    
    public function index(){
        $data['page_title']     = '404-Page Not Found'; 
        $this->load->view('admin/404', $data);
    }
}

