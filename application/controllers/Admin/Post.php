<?php

class Post extends AD_Controller
{

    function __construct()
    {
	parent::__construct();
	$this->load->model('Admin/Post_model');
    }

    function index()
    {
	$this->data['application_name']	 = 'post_index';
	$this->data['posts']		 = $this->Post_model->getPosts();
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/post/index', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

    function add()
    {
	$this->data['application_name'] = 'post_add';
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	    $this->form_validation->set_rules('title', 'Başlık', 'trim|required');
	    $this->form_validation->set_rules('link', 'Seo Başlık', 'trim|required');
	    $this->form_validation->set_rules('content', 'İçerik', 'trim');
	    $this->form_validation->set_rules('category_id', 'Kategori', 'trim');
	    $this->form_validation->set_rules('author', 'Yazar', 'trim');
	    $this->form_validation->set_rules('write_date', 'Tarih', 'trim');
	    $this->form_validation->set_rules('status', 'Durum', 'trim');
	    $this->form_validation->set_rules('order', 'Sıralama', 'trim');
	    $this->form_validation->set_rules('tag', 'Tag', 'trim');

	    if ($this->form_validation->run() == FALSE)
	    {
		$this->data['form_validation_error'] = validation_errors();
	    }
	    else
	    {

		$set_post = $this->Post_model->addPost();

		if ($set_post > 0)
		{
		    $this->data['set_post_success'] = "İçerik Ekleme İşlemi Başarı İle Gerçekleşti";
		}
		else
		{
		    $this->data['set_post_error'] = "İçerik Ekleme İşlemi Başarısız !! Tekrar Deneyiniz";
		}
	    }
	}
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/post/add', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

    function edit($id)
    {
	$this->data['application_name'] = 'post_edit';
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	    $this->form_validation->set_rules('title', 'Başlık', 'trim|required');
	    $this->form_validation->set_rules('link', 'Seo Başlık', 'trim|required');
	    $this->form_validation->set_rules('content', 'İçerik', 'trim');
	    $this->form_validation->set_rules('category_id', 'Kategori', 'trim');
	    $this->form_validation->set_rules('author', 'Yazar', 'trim');
	    $this->form_validation->set_rules('write_date', 'Tarih', 'trim');
	    $this->form_validation->set_rules('status', 'Durum', 'trim');
	    $this->form_validation->set_rules('order', 'Sıralama', 'trim');
	    $this->form_validation->set_rules('tag', 'Tag', 'trim');

	    if ($this->form_validation->run() == FALSE)
	    {
		$this->data['form_validation_error'] = validation_errors();
	    }
	    else
	    {

		$set_post = $this->Post_model->editPost($id);

		if ($set_post > 0)
		{
		    $this->data['set_post_success'] = "İçerik Güncelleme İşlemi Başarı İle Gerçekleşti";
		}
		else
		{
		    $this->data['set_post_error'] = "İçerik Güncelleme İşlemi Başarısız !! Tekrar Deneyiniz";
		}
	    }
	}
	$this->data['post'] = $this->Post_model->getPost($id);
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/post/edit', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

    function delete($id)
    {
	$data['application_name']	 = 'post_delete';
	$data['delete_post']		 = $this->Post_m->delete_post($id);
	if ($data['delete_post'] > 0)
	{
	    $return_message		 = array(
		0	 => $data['application_name'],
		1	 => 'Başarılı',
		2	 => 'İşlem Başarılı Bir Şekilde Gerçekleşti'
	    );
	    $data['return_message']	 = $return_message;
	}
	else
	{
	    $return_message		 = array(
		0	 => $data['application_name'],
		1	 => 'Hata',
		2	 => 'İşlem Başarısız, Lütfen Tekrar Deneyiniz'
	    );
	    $data['return_message']	 = $return_message;
	}

	$this->data['posts'] = $this->Post_m->get_posts();
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/theme/page_header', $this->data);
	$this->load->view('admin/theme/page_sidebar', $this->data);
	$this->load->view('admin/post/index', $this->data);
	$this->load->view('admin/theme/page_footer', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

}
