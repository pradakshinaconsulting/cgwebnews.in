<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Advertisement extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        validate_admin();
        
        $this->load->model('ads_model');
    }
    
    public function index() {
        $data = array();
        
        $advertisementDataset = $this->ads_model->get(array('where'=>array('status'=>'1'),'order'=>array('id desc')));
        
        $data['advertisementDataset'] = $advertisementDataset;
        
        $data['content'] = $this->load->view('page/admin/advertisement/index', $data, true);
        $this->load->view('template/admin', $data);
    }
    
    public function onhold() {
        $data = array();
        
        $advertisementDataset = $this->ads_model->get(array('where'=>array('status'=>'2')));
        
        $data['advertisementDataset'] = $advertisementDataset;
        
        $data['content'] = $this->load->view('page/admin/advertisement/onhold', $data, true);
        $this->load->view('template/admin', $data);
    }
    
    public function deleted() {
        $data = array();
        
        $advertisementDataset = $this->ads_model->get(array('where'=>array('status'=>'3')));
        
        $data['advertisementDataset'] = $advertisementDataset;
        
        $data['content'] = $this->load->view('page/admin/advertisement/deleted', $data, true);
        $this->load->view('template/admin', $data);
    }
    
    public function add() {
        $data = array();
        $actionFlag = TRUE;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('title', 'Title', 'required');
            if ($this->form_validation->run() == FALSE) {
                $actionFlag = FALSE;
            }
            $data = $this->security->xss_clean($_POST);
            
            if ($actionFlag == TRUE) {
                $uniq_id = uniqid();
                if (!$_FILES['ads_img']) {
                } else {
                    $ext = pathinfo($_FILES["ads_img"]["name"], PATHINFO_EXTENSION);
                    $new_file_name = $uniq_id . '.' . $ext;
                    $file_tmp = $_FILES['ads_img']['tmp_name'];
                    $upload_path = './store/advertisement/';
                    if (move_uploaded_file($file_tmp, $upload_path . $new_file_name)) {
                        $data['ads_img'] = 'advertisement/' . $new_file_name;
                        
                        $ads_id = $this->ads_model->add($data);
                        if ($ads_id > 0) {
                            redirect('admin/advertisement/');
                        }
                    }
                }
            }
        }
        
        $data['content'] = $this->load->view('page/admin/advertisement/add', $data, true);
        $this->load->view('template/admin', $data);
    }
    
    public function edit($ads_id){
        $data = array();
        $actionFlag = TRUE;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->security->xss_clean($_POST);
            
            if ($actionFlag == TRUE) {
                $this->ads_model->update(array('id' => $ads_id), $data);
                redirect('admin/advertisement/');
            }
        }
        
        $adsDataset = $this->ads_model->get(array('where' => array('id' => $ads_id)));
        $data['adsDataset'] = $adsDataset[0];
        $data['content'] = $this->load->view('page/admin/advertisement/edit', $data, true);
        $this->load->view('template/admin', $data);
    }
}