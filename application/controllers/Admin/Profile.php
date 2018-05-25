<?php

class Profile extends AD_Controller
{

    function __construct()
    {
	parent::__construct();
	$this->load->model('Admin/Profile_model');
    }

    function index()
    {
	$this->data['application_name']	 = 'profile_index';
	$user_id			 = $this->session->userdata['user_login']['id'];
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	    $this->form_validation->set_rules('name', 'İsim', 'trim');
	    $this->form_validation->set_rules('surname', 'Soyisim', 'trim');
	    $this->form_validation->set_rules('password', 'Şifre', 'trim|required');
	    $this->form_validation->set_rules('email', 'Email', 'trim|required');
	    $this->form_validation->set_rules('phone', 'Tel', 'trim');

	    if ($this->form_validation->run() == FALSE)
	    {
		$this->data['form_validation_error'] = validation_errors();
	    }
	    else
	    {

		$set_post = $this->Profile_model->editUser($user_id);

		if ($set_post > 0)
		{
		    $this->data['set_post_success'] = "Profil Güncelleme İşlemi Başarı İle Gerçekleşti";
		}
		else
		{
		    $this->data['set_post_error'] = "Profil Güncelleme İşlemi Başarısız !! Tekrar Deneyiniz";
		}
	    }
	}
	$this->data['user'] = $this->Profile_model->getUser($user_id);
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/profile/index', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

}
