<?php

class Post extends CI_Controller
{

    private $data = array();

    function __construct()
    {
	parent::__construct();
	$this->load->model('Catalog/Post_model');
    }

    public function detail()
    {
	if (isset($_GET['utm_source']) == 'ins')
	{
	    $post_read_count = $this->Post_model->get_post_read_count();
	    $new_count	 = $post_read_count['count'] + 1;
	    $this->Post_model->post_read_count($new_count);
	}
	$url			 = explode("-", $this->uri->segment(2));
	$post_id		 = end($url);
	$this->data['post']	 = $this->Post_model->getPost($post_id);
	$this->load->view('catalog/theme/header', $this->data);
	$this->load->view('catalog/post/detail', $this->data);
	$this->load->view('catalog/theme/footer', $this->data);
    }

}
