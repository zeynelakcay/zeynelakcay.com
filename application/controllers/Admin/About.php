<?php

class About extends AD_Controller
{

    function __construct()
    {
	parent::__construct();
	$this->load->model('Admin/About_model');
    }

    public function index()
    {
	$this->data['application_name'] = 'about_index';

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	    $this->form_validation->set_rules('about', 'Hakkımda', 'trim|required');

	    if ($this->form_validation->run() == FALSE)
	    {
		$this->data['form_validation_error'] = validation_errors();
	    }
	    else
	    {

		$set_post = $this->About_model->edit_about();

		if ($set_post > 0)
		{
		    $this->data['set_post_success'] = "İşlem Başarı İle Gerçekleşti";
		}
		else
		{
		    $this->data['set_post_error'] = "İşlem Başarısız !! Tekrar Deneyiniz";
		}
	    }
	}
	$this->data['about'] = $this->About_model->get_about();
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/about/index', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

}
