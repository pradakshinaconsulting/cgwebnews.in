<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    public function index()
    {
        validate_admin();

        $data = array();

        $admin = $this->admin_model->get(array('id'=>$this->session->userdata('admin')->id));
        $data['admin'] = ($admin) ? ($admin[0]) : null;
        $data['content'] = $this->load->view('page/admin/profile/index', $data, true);
        $this->load->view('template/admin', $data);
    }

    public function create()
    {
        $data = array();

        $actionFlag = true;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('contact_no', 'contact no', 'required');
            $this->form_validation->set_rules('email_id', 'email id', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == false) {
                $actionFlag = false;
            }

            $data = $this->security->xss_clean($_POST);
            $data['uid'] = uniqid();
            $data['type'] = '3';
            $data['name'] = ucwords(trim($data['name']));
            $data['email_id'] = trim($data['email_id']);
            $data['email_id_token'] = sha1(md5($data['email_id']));
            $data['password'] = trim($data['password']);

            $admin_count = $this->admin_model->count(array('where'=>array('email_id'=>$data['email_id'])));
            if ($admin_count > 0) {
                $actionFlag = false;
                $this->session->set_flashdata('error', 'Email id associated with another account');
            }

            $admin_count = $this->admin_model->count(array('where'=>array('contact_no'=>$data['contact_no'])));
            if ($admin_count > 0) {
                $actionFlag = false;
                $this->session->set_flashdata('error', 'Contact no associated with another account');
            }

            if ($actionFlag == true) {
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT, ['cost' => 12]);
                $result = $this->admin_model->add($data);
                if ($result > 0) {
                    $data = null;
                }
            }
        }

        $data['content'] = $this->load->view('page/admin/profile/create', $data, true);
        $this->load->view('template/admin', $data);
    }

    public function login()
    {
        if ($this->session->userdata('isAdminLoggedIn') == true) {
            redirect('admin/dashboard/');
        }

        $data = array();

        $actionFlag = true;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('login_id', 'login id', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == false) {
                $actionFlag = false;
            }
            $data = $this->security->xss_clean($_POST);
            $data['login_id'] = trim($data['login_id']);
            $data['password'] = trim($data['password']);

            if ($actionFlag == true) {
                $admin = $this->admin_model->get(array('where' => array('email_id' => $data['login_id'])));
                if ($admin == null) {
                    $admin = $this->admin_model->get(array('where' => array('contact_no' => $data['login_id'])));
                }
                if ($admin == null) {
                    $this->session->set_flashdata('invalid', 'Invalid login id or password');
                } else {
                    $admin = $admin[0];

                    if (password_verify($data['password'], $admin->password)) {
                        $this->session->set_userdata('admin', $admin);
                        $this->session->set_userdata('isAdminLoggedIn', true);
                        redirect('admin/dashboard/');
                    } else {
                        $this->session->set_flashdata('invalid', 'Invalid login id or password');
                    }
                }
            }
        }

        $data['content'] = $this->load->view('page/admin/profile/login', $data, true);
        $this->load->view('template/admin-login', $data);
    }

    public function logout()
    {
        validate_admin();

        $data = array();

        $this->session->set_userdata('asAdminLoggedIn', false);
        $this->session->sess_destroy();
        redirect('/');

        $data['content'] = $this->load->view('page/admin/profile/logout', $data, true);
        $this->load->view('template/admin', $data);
    }
}
