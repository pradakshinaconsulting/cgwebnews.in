<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        validate_admin();
        
        $this->load->model('category_model');
    }
    
    public function index() {
        $data = array();
        
        $categoryDataset = $this->category_model->get();
        
        $data['categoryDataset'] = $categoryDataset;
        $data['content'] = $this->load->view('page/admin/category/index', $data, true);
        $this->load->view('template/admin', $data);
    }
}