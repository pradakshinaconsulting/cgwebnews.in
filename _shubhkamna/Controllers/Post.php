<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\CategoryModel;
use App\Models\AdvertisementModel;
use App\Models\TrackerModel;

class Post extends BaseController
{
    public function index()
    {
        $postModel = new PostModel();
        $advertisementModel = new AdvertisementModel();
        $categoryModel = new CategoryModel();

        /* Post list */
        //$postList = $postModel->where('status','1')->orderBy('id', 'DESC')->paginate(9);
        $postList = $postModel->where('status', '1')->orderBy('id', 'DESC')->paginate(20);
        $pager = $postModel->pager;
        foreach ($postList as $k => $v) {
            if ($v["post_img"] != "") {
                $postList[$k]['post_img'] = site_url("_a_/store/".$v['post_img']);
                $postList[$k]['category'] = $categoryModel->where('slug', $v['category_id'])->first();
            }
        }

        $data['postList'] = $postList;
        $data['pager'] = $pager;

        /* Random Post */
        $rDate = date("Y/m/d", mt_rand(1601510400, time()));
        $rPostList = $postModel->where('status', '1')->where('post_date <', $rDate)->orderBy('id', 'DESC')->findAll(6);
        foreach ($rPostList as $k => $v) {
            if ($v["post_img"] != "") {
                $rPostList[$k]['post_img'] = site_url("_a_/store/".$v['post_img']);
                $rPostList[$k]['category'] = $categoryModel->where('slug', $v['category_id'])->first();
            }
        }
        $data['rPostList'] = $rPostList;

        /* Category List */
        $categoryList = $categoryModel->findAll();
        $data['categoryList'] = $categoryList;

        /* Advertisement */
        $advertisementList = $advertisementModel->where('status', '1')->orderBy('id', 'DESC')->where('status', '1')->where('till_date >= ', date('Y-m-d'))->findAll();
        foreach ($advertisementList as $k => $v) {
            if ($v["ads_img"] != "") {
                $advertisementList[$k]['ads_img'] = site_url("_a_/store/".$v['ads_img']);
            }
        }
        $data['advertisementList'] = $advertisementList;

        $data["meta"]["title"] = "CGWEBNEWS.IN";
        $data["meta"]["description"] = "देश · प्रदेश · अंतरास्ट्रीय · राजनीति · बॉलीवुड · बॉलीवुड · राजनीति ...";
        $data["meta"]["og_image"] = site_url("public/images/news.jpg");
        $data["meta"]["og_type"] = "article";

        $data["content"] = view("pages/post/index", $data);
        return view("templates/post", $data);
    }

    public function category($category_slug = "")
    {
        $postModel = new PostModel();
        $advertisementModel = new AdvertisementModel();
        $categoryModel = new CategoryModel();

        $category = $categoryModel->where('slug', $category_slug)->first();

        /* Post list */
        $postList = $postModel->where('status', '1')->orderBy('id', 'DESC')->where("category_id", $category_slug)->paginate(9);
        $pager = $postModel->pager;
        foreach ($postList as $k => $v) {
            if ($v["post_img"] != "") {
                $postList[$k]['post_img'] = site_url("_a_/store/".$v['post_img']);
                $postList[$k]['category'] = $categoryModel->where('slug', $v['category_id'])->first();
            }
        }

        $data['postList'] = $postList;
        $data['pager'] = $pager;

        /* Random Post */
        $rDate = date("Y/m/d", mt_rand(1601510400, time()));
        $rPostList = $postModel->where('status', '1')->where('post_date <', $rDate)->orderBy('id', 'DESC')->findAll(6);
        foreach ($rPostList as $k => $v) {
            if ($v["post_img"] != "") {
                $rPostList[$k]['post_img'] = site_url("_a_/store/".$v['post_img']);
                $rPostList[$k]['category'] = $categoryModel->where('slug', $v['category_id'])->first();
            }
        }
        $data['rPostList'] = $rPostList;
        /* Category List */
        $categoryList = $categoryModel->findAll();
        $data['categoryList'] = $categoryList;

        /* Advertisement */
        $advertisementList = $advertisementModel->where('status', '1')->orderBy('id', 'DESC')->where('status', '1')->where('till_date >= ', date('Y-m-d'))->findAll();
        foreach ($advertisementList as $k => $v) {
            if ($v["ads_img"] != "") {
                $advertisementList[$k]['ads_img'] = site_url("_a_/store/".$v['ads_img']);
            }
        }
        $data['advertisementList'] = $advertisementList;

        $data["meta"]["title"] = $category['name_hindi']. " - CGWEBNEWS.IN";
        $data["meta"]["description"] = "देश · प्रदेश · अंतरास्ट्रीय · राजनीति · बॉलीवुड · बॉलीवुड · राजनीति ...";
        $data["meta"]["og_image"] = site_url("public/images/news.jpg");
        $data["meta"]["og_type"] = "article";

        $data["content"] = view("pages/post/index", $data);
        return view("templates/post", $data);
    }

    public function view($id = "")
    {
        $postModel = new PostModel();
        $advertisementModel = new AdvertisementModel();
        $categoryModel = new CategoryModel();
        $trackerModel = new TrackerModel();

        /* Tracker insert */
        $data = ['post_id' => $id, 'http_referer' => isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '', 'http_user_agent' => $_SERVER['HTTP_USER_AGENT'], 'http_user_agent' => $_SERVER['HTTP_USER_AGENT'], 'ip' => $_SERVER['REMOTE_ADDR'], 'created_at' => date("Y-m-d H:i:s"), ];
        $trackerModel->insert($data);

        /* Single Post */
        $post = $postModel->where('id', $id)->first();
        $post['count'] = $trackerModel->where('post_id', $id)->countAllResults();
        ;
        $post['category'] = $categoryModel->where('slug', $post['category_id'])->first();
        if ($post['post_img'] != "") {
            $post['post_img'] = site_url("_a_/store/".$post['post_img']);
        }
        if ($post['post_img_1'] != "") {
            $post['post_img_1'] = site_url("_a_/store/".$post['post_img_1']);
        }
        if ($post['post_img_2'] != "") {
            $post['post_img_2'] = site_url("_a_/store/".$post['post_img_2']);
        }
        $data['post'] = $post;



        /* Post List */
        $postList = $postModel->where('status', '1')->orderBy('id', 'DESC')->findAll(9);
        foreach ($postList as $k => $v) {
            if ($v["post_img"] != "") {
                $postList[$k]['post_img'] = site_url("_a_/store/".$v['post_img']);
            }
            $postList[$k]['category'] = $categoryModel->where('slug', $v['category_id'])->first();
        }
        $data['postList'] = $postList;

        /* Random Post */
        $rDate = date("Y/m/d", mt_rand(1601510400, time()));
        $rPostList = $postModel->where('status', '1')->where('post_date <', $rDate)->orderBy('id', 'DESC')->findAll(6);
        foreach ($rPostList as $k => $v) {
            if ($v["post_img"] != "") {
                $rPostList[$k]['post_img'] = site_url("_a_/store/".$v['post_img']);
                $rPostList[$k]['category'] = $categoryModel->where('slug', $v['category_id'])->first();
            }
        }
        $data['rPostList'] = $rPostList;

        /* Advertisement */
        $advertisementList = $advertisementModel->where('status', '1')->orderBy('id', 'DESC')->where('status', '1')->where('till_date >= ', date('Y-m-d'))->findAll();
        foreach ($advertisementList as $k => $v) {
            if ($v["ads_img"] != "") {
                $advertisementList[$k]['ads_img'] = site_url("_a_/store/".$v['ads_img']);
            }
        }
        $data['advertisementList'] = $advertisementList;

        /* Category List */
        $categoryList = $categoryModel->findAll();
        $data['categoryList'] = $categoryList;

        //$this->cachePage(864000);

        $data["meta"]["title"] = $post["post_title"]." | CGWEBNEWS.IN";
        $data["meta"]["description"] = $post["post_title"];
        $data["meta"]["og_image"] = $post['post_img'];
        $data["meta"]["og_type"] = "article";
        $data["content"] = view("pages/post/view", $data);
        return view("templates/post", $data);
    }
}
