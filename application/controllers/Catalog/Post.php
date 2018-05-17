<?php

class Post extends CI_Controller
{

    private $data = array();

    function __construct()
    {
	parent::__construct();
    }

    public function detail()
    {
	$url			 = explode("-", $this->uri->segment(2));
	$post_id		 = end($url);
	$this->load->model('Catalog/Post_model');
	$this->data['post']	 = $this->Post_model->getPost($post_id);
	$this->load->view('catalog/theme/header', $this->data);
	$this->load->view('catalog/post/detail', $this->data);
	$this->load->view('catalog/theme/footer', $this->data);
    }

}
