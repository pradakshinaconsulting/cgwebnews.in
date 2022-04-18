<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Controller {
    public function __construct() {
        parent::__construct();
        validate_admin();
        //$this->set_timezone();
        $this->load->model('news_model');
        $this->load->model('category_model');
    }
    public function index() {
        $data = array();
        $url = 'admin/post';
        $page_no = (isset($_GET['page'])) ? $_GET['page'] : '1';
        $per_page = 10;
        $start = ($page_no - 1) * $per_page;
        $total_row = $this->news_model->count(array('where' => array('status' => 1)));
        $parameter = '';
        $data['pagination'] = array('url' => $url, 'page_no' => $page_no, 'per_page' => $per_page, 'start' => $start, 'total_row' => $total_row, 'parameter' => $parameter);
        $postDataset = $this->news_model->get(array('where' => array('status' => 1), 'limit' => array($per_page, $start), 'order' => array('id' => 'desc')));
        foreach ($postDataset as $post) {
            $category = $this->category_model->get(['where' => ['slug' => $post->category_id]]);
            $post->category = $category[0];
        }
        $data['postDataset'] = $postDataset;
        $data['content'] = $this->load->view('page/admin/post/index', $data, true);
        $this->load->view('template/admin', $data);
    }
    public function add() {
        $data = array();
        $actionFlag = TRUE;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('post_title', 'Post title', 'required');
            if ($this->form_validation->run() == FALSE) {
                $actionFlag = FALSE;
            }
            $post = $this->security->xss_clean($_POST);
            $data['post_title'] = $post['post_title'];
            $data['post_slug'] = slugify($post['post_slug']);
            $data['post_body'] = $post['post_body'];
            $data['post_video_link'] = $post['post_video_link'];
            $data['category_id'] = $post['category_id'];
            $data['copy_protection'] = $post['copy_protection'];
            $data['post_date'] = date("Y-m-d H:i:s");
            if ($actionFlag == TRUE) {
                $uniq_id = uniqid();
                if (!$_FILES['post_img']) {
                } else {
                    $ext = pathinfo($_FILES["post_img"]["name"], PATHINFO_EXTENSION);
                    $new_file_name = $uniq_id . '.' . $ext;
                    $file_tmp = $_FILES['post_img']['tmp_name'];
                    $upload_path = './store/images/';
                    if (move_uploaded_file($file_tmp, $upload_path . $new_file_name)) {
                        $data['post_img'] = 'images/' . $new_file_name;
                        /*----------------------------------------------------*/
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './store/images/' . $new_file_name;
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = TRUE;
                        $config['width'] = 1200;
                        $config['height'] = 630;
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        $config['source_image'] = './store/images/' . $new_file_name;
                        $config['wm_overlay_path'] = './assets/image/overlay.png';
                        $config['wm_type'] = 'overlay';
                        $config['wm_opacity'] = '48';
                        $config['wm_x_transp'] = '9';
                        $config['wm_y_transp'] = '9';
                        $this->image_lib->initialize($config);
                        $this->image_lib->watermark();
                        /*----------------------------------------------------*/
                    }
                }
                if (!$_FILES['post_img_1']) {
                } else {
                    $ext = pathinfo($_FILES["post_img_1"]["name"], PATHINFO_EXTENSION);
                    $new_file_name_1 = $uniq_id . '_1.' . $ext;
                    $file_tmp_1 = $_FILES['post_img_1']['tmp_name'];
                    $upload_path = './store/images/';
                    if (move_uploaded_file($file_tmp_1, $upload_path . $new_file_name_1)) {
                        $data['post_img_1'] = 'images/' . $new_file_name_1;
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './store/images/' . $new_file_name_1;
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = TRUE;
                        $config_1['width'] = 595;
                        $config_1['height'] = 842;
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        /*----------------------------------------------------*/
                        $this->load->library('image_lib');
                        $config['source_image'] = './store/images/' . $new_file_name_1;
                        $config['wm_overlay_path'] = './assets/image/overlay.png';
                        $config['wm_type'] = 'overlay';
                        $config['wm_vrt_alignment'] = 'middle';
                        $config['wm_hor_alignment'] = 'center';
                        $this->image_lib->initialize($config);
                        $this->image_lib->watermark();
                    }
                }
                if (!$_FILES['post_img_2']) {
                } else {
                    $ext = pathinfo($_FILES["post_img_2"]["name"], PATHINFO_EXTENSION);
                    $new_file_name_2 = $uniq_id . '_2.' . $ext;
                    $file_tmp_2 = $_FILES['post_img_2']['tmp_name'];
                    $upload_path = './store/images/';
                    if (move_uploaded_file($file_tmp_2, $upload_path . $new_file_name_2)) {
                        $data['post_img_2'] = 'images/' . $new_file_name_2;
                        $config_1['image_library'] = 'gd2';
                        $config_1['source_image'] = './store/images/' . $new_file_name_2;
                        $config_1['create_thumb'] = FALSE;
                        $config_1['maintain_ratio'] = TRUE;
                        $config_1['width'] = 595;
                        $config_1['height'] = 842;
                        $this->load->library('image_lib', $config_1);
                        $this->image_lib->resize();
                        /*----------------------------------------------------*/
                        $this->load->library('image_lib');
                        $config_1['source_image'] = './store/images/' . $new_file_name_2;
                        $config['wm_overlay_path'] = './assets/image/overlay.png';
                        $config_1['wm_type'] = 'overlay';
                        $config_1['wm_opacity'] = '48';
                        $config_1['wm_x_transp'] = '9';
                        $config_1['wm_y_transp'] = '9';
                        $this->image_lib->initialize($config_1);
                        $this->image_lib->watermark();
                    }
                }
                $id = $this->news_model->add($data);
                if ($id > 0) {
                    //$response = $this->sendMessage($data['post_title'], $id);
                    redirect('admin/post/');
                }
            }
        }
        $categoryDataset = $this->category_model->get(array('order' => array('name' => 'asc')));
        $data['categoryDataset'] = $categoryDataset;
        $data['content'] = $this->load->view('page/admin/post/add', $data, true);
        $this->load->view('template/admin', $data);
    }
    public function edit($id) {
        $data = array();
        $actionFlag = TRUE;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('post_title', 'Post title', 'required');
            if ($this->form_validation->run() == FALSE) {
                $actionFlag = FALSE;
            }
            $post = $this->security->xss_clean($_POST);
            $data['post_title'] = $post['post_title'];
            $data['post_slug'] = slugify($post['post_slug']);
            $data['post_body'] = $post['post_body'];
            $data['post_video_link'] = $post['post_video_link'];
            $data['category_id'] = $post['category_id'];
            $data['copy_protection'] = $post['copy_protection'];
            if ($actionFlag == TRUE) {
                $uniq_id = uniqid();
                if (!$_FILES['post_img']) {
                } else {
                    $ext = pathinfo($_FILES["post_img"]["name"], PATHINFO_EXTENSION);
                    $new_file_name = $uniq_id . '.' . $ext;
                    $file_tmp = $_FILES['post_img']['tmp_name'];
                    $upload_path = './store/images/';
                    if (move_uploaded_file($file_tmp, $upload_path . $new_file_name)) {
                        $data['post_img'] = 'images/' . $new_file_name;
                        /*----------------------------------------------------*/
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './store/images/' . $new_file_name;
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = TRUE;
                        $config['width'] = 1200;
                        $config['height'] = 630;
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        $config['source_image'] = './store/images/' . $new_file_name;
                        $config['wm_overlay_path'] = './assets/image/overlay.png';
                        $config['wm_type'] = 'overlay';
                        $config['wm_opacity'] = '48';
                        $config['wm_x_transp'] = '9';
                        $config['wm_y_transp'] = '9';
                        $this->image_lib->initialize($config);
                        $this->image_lib->watermark();
                        /*----------------------------------------------------*/
                    }
                }
                if (!$_FILES['post_img_1']) {
                } else {
                    $ext = pathinfo($_FILES["post_img_1"]["name"], PATHINFO_EXTENSION);
                    $new_file_name_1 = $uniq_id . '_1.' . $ext;
                    $file_tmp_1 = $_FILES['post_img_1']['tmp_name'];
                    $upload_path = './store/images/';
                    if (move_uploaded_file($file_tmp_1, $upload_path . $new_file_name_1)) {
                        $data['post_img_1'] = 'images/' . $new_file_name_1;
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './store/images/' . $new_file_name_1;
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = TRUE;
                        $config_1['width'] = 595;
                        $config_1['height'] = 842;
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        /*----------------------------------------------------*/
                        $this->load->library('image_lib');
                        $config['source_image'] = './store/images/' . $new_file_name_1;
                        $config['wm_overlay_path'] = './assets/image/overlay.png';
                        $config['wm_type'] = 'overlay';
                        $config['wm_vrt_alignment'] = 'middle';
                        $config['wm_hor_alignment'] = 'center';
                        $this->image_lib->initialize($config);
                        $this->image_lib->watermark();
                    }
                }
                if (!$_FILES['post_img_2']) {
                } else {
                    $ext = pathinfo($_FILES["post_img_2"]["name"], PATHINFO_EXTENSION);
                    $new_file_name_2 = $uniq_id . '_2.' . $ext;
                    $file_tmp_2 = $_FILES['post_img_2']['tmp_name'];
                    $upload_path = './store/images/';
                    if (move_uploaded_file($file_tmp_2, $upload_path . $new_file_name_2)) {
                        $data['post_img_2'] = 'images/' . $new_file_name_2;
                        $config_1['image_library'] = 'gd2';
                        $config_1['source_image'] = './store/images/' . $new_file_name_2;
                        $config_1['create_thumb'] = FALSE;
                        $config_1['maintain_ratio'] = TRUE;
                        $config_1['width'] = 595;
                        $config_1['height'] = 842;
                        $this->load->library('image_lib', $config_1);
                        $this->image_lib->resize();
                        /*----------------------------------------------------*/
                        $this->load->library('image_lib');
                        $config_1['source_image'] = './store/images/' . $new_file_name_2;
                        $config['wm_overlay_path'] = './assets/image/overlay.png';
                        $config_1['wm_type'] = 'overlay';
                        $config_1['wm_opacity'] = '48';
                        $config_1['wm_x_transp'] = '9';
                        $config_1['wm_y_transp'] = '9';
                        $this->image_lib->initialize($config_1);
                        $this->image_lib->watermark();
                    }
                }
                $this->news_model->update(array('id' => $id), $data);
                redirect('admin/post/');
            }
        }
        $postDataset = $this->news_model->get(array('where' => array('id' => $id)));
        $data['post'] = ($postDataset) ? ($postDataset[0]) : (NULL);
        $categoryDataset = $this->category_model->get(array('order' => array('name' => 'asc')));
        $data['categoryDataset'] = $categoryDataset;
        $data['content'] = $this->load->view('page/admin/post/edit', $data, true);
        $this->load->view('template/admin', $data);
    }
    public function delete($id) {
        $data = array();
        $actionFlag = TRUE;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->security->xss_clean($_POST);
            if ($actionFlag == TRUE) {
                $this->news_model->update(array('id' => $id), $data);
                redirect('admin/post/');
            }
        }
        $postDataset = $this->news_model->get(array('where' => array('id' => $id)));
        $data['post'] = ($postDataset) ? ($postDataset[0]) : (NULL);
        $categoryDataset = $this->category_model->get();
        $data['categoryDataset'] = $categoryDataset;
        $data['content'] = $this->load->view('page/admin/post/delete', $data, true);
        $this->load->view('template/admin', $data);
    }
    public function sendMessage($msg, $id) {
        $content = array("en" => $msg);
        $hashes_array = array();
        array_push($hashes_array, array("id" => "like-button", "text" => "Read more ...", "icon" => "https://www.cgwebnews.in/public/image/logo-big.jpg", "url" => "https://www.cgwebnews.in/article/".$id."/"));
        $fields = array('app_id' => "f1883546-4fff-4689-aad2-0809ad2d8d94", 'included_segments' => array('All'), 'data' => array("foo" => "bar"), 'contents' => $content, 'web_buttons' => $hashes_array);
        $fields = json_encode($fields);
        //print("\nJSON sent:\n");
        //print($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic NjA5MDNiMTgtMjdlMS00Mzg2LWFhOTEtOWRlMjgxZTNlMTE0'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}
