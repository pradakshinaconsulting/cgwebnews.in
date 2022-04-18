<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        validate_admin();
        
        
    }
    
    public function index() {
        $data = array();
        $data['content'] = $this->load->view('page/admin/dashboard/index', $data, true);
        $this->load->view('template/admin', $data);
    }
}