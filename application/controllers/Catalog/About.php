<?php

class About extends CI_Controller
{

    public function index()
    {
	$this->data['application_name'] = 'contact_index';
	$this->load->view('catalog/theme/header', $this->data);
	$this->load->view('catalog/about/index', $this->data);
	$this->load->view('catalog/theme/footer', $this->data);
    }

}
