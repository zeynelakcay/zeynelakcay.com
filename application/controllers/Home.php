<?php

class Home extends CI_Controller
{

    private $data = array();

    function index()
    {
	$this->load->model('Catalog/Home_model');
	$this->data['posts'] = $this->Home_model->get_posts();
	$this->load->view('catalog/theme/header', $this->data);
	$this->load->view('catalog/home/index', $this->data);
	$this->load->view('catalog/theme/footer', $this->data);
    }

}
