<?php

class Login extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
	parent::__construct();
	$this->lang->load("admin/login", "turkish");
	$this->load->model('Admin/Login_model');
    }

    public function index()
    {

	if (!($this->session->userdata('user_login')))
	{
	    $this->data['application_name'] = 'login_index';
	    $this->load->view('admin/login/index', $this->data);
	}
	else
	{
	    redirect('Admin/Dashboard', 'refresh');
	}
    }

    public function verify()
    {
	$data['application_name'] = 'login_verify';
	$this->form_validation->set_rules('email', $this->lang->line("email"), 'trim|required|valid_email');
	$this->form_validation->set_rules('password', $this->lang->line("password"), 'trim|required');
	if ($this->form_validation->run() == FALSE)
	{
	    $this->data['form_validation_error'] = validation_errors();
	}
	else
	{
	    $email		 = $this->input->post('email');
	    $password	 = $this->input->post('password');
	    $user_data	 = $this->Login_model->user_login($email, $password);
	    if (empty($user_data))
	    {
		$this->data['login_error'] = $this->lang->line("login_error");
	    }
	    else
	    {
		$session_array = array(
		    'id'		 => $user_data['user_id'],
		    'email'		 => $user_data['email'],
		    'name'		 => $user_data['name'],
		    'surname'	 => $user_data['surname']
		);
		$this->session->set_userdata('user_login', $session_array);
		redirect("/Admin/Dashboard");
	    }
	}
	$this->load->view('admin/login/index', $this->data);
    }

    public function log_out()
    {
	$this->session->unset_userdata('user_login');
	session_destroy();
	redirect('/Admin/Login', 'refresh');
    }

}
