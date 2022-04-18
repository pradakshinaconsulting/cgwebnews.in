<?php

namespace App\Controllers;
use App\Models\PostModel;
class Seo extends BaseController
{
  public function robots()
	{
    $this->response->setContentType('text/plain');
		return view('pages/seo/robots');
	}
	public function sitemap()
	{
    $postModel = new PostModel();
    $postList = $postModel->where('status','1')->orderBy('id', 'DESC')->paginate(100);
    
    $data['postList'] = $postList;
    
    $this->response->setContentType('text/xml');
    return view('pages/seo/sitemap',$data);
	}
}
