<?php

class Category extends AD_Controller
{

    function __construct()
    {
	parent::__construct();
	$this->load->model('Admin/Category_model');
    }

    public function index()
    {
	$this->data['application_name']	 = 'category_index';
	$this->data['categories']	 = $this->Category_model->get_categories();
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/category/index', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

    public function add()
    {
	$this->data['application_name'] = 'category_add';
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	    $this->form_validation->set_rules('title', 'Başlık', 'trim|required');
	    $this->form_validation->set_rules('seo_title', 'Seo Başlık', 'trim|required');
	    $this->form_validation->set_rules('status', 'Durum', 'trim');
	    $this->form_validation->set_rules('order', 'Sıralama', 'trim');

	    if ($this->form_validation->run() == FALSE)
	    {
		$this->data['form_validation_error'] = validation_errors();
	    }
	    else
	    {

		$set_post = $this->Category_model->add_category();

		if ($set_post > 0)
		{
		    $this->data['set_post_success'] = "Kategori Ekleme İşlemi Başarı İle Gerçekleşti";
		}
		else
		{
		    $this->data['set_post_error'] = "Kategori Ekleme İşlemi Başarısız !! Tekrar Deneyiniz";
		}
	    }
	}
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/category/add', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

    public function edit($category_id)
    {
	$this->data['application_name'] = 'category_edit';
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	    $this->form_validation->set_rules('title', 'Başlık', 'trim|required');
	    $this->form_validation->set_rules('seo_title', 'Seo Başlık', 'trim|required');
	    $this->form_validation->set_rules('status', 'Durum', 'trim');
	    $this->form_validation->set_rules('order', 'Sıralama', 'trim');

	    if ($this->form_validation->run() == FALSE)
	    {
		$this->data['form_validation_error'] = validation_errors();
	    }
	    else
	    {

		$set_post = $this->Category_model->edit_category($category_id);

		if ($set_post > 0)
		{
		    $this->data['set_post_success'] = "Kategori Güncelleme İşlemi Başarı İle Gerçekleşti";
		}
		else
		{
		    $this->data['set_post_error'] = "Kategori Güncelleme İşlemi Başarısız !! Tekrar Deneyiniz";
		}
	    }
	}
	$this->data['category'] = $this->Category_model->get_category($category_id);
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/category/edit', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

}
