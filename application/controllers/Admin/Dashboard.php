<?php

class Dashboard extends AD_Controller
{

    function __construct()
    {
	parent::__construct();
	//$this->load->model('Admin/Dashboard_m');
    }

    function index()
    {
	$this->data['application_name'] = 'dashboard_index';
	$this->load->view('admin/theme/header', $this->data);
	$this->load->view('admin/dashboard/index', $this->data);
	$this->load->view('admin/theme/footer', $this->data);
    }

}
