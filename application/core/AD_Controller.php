<?php

Class AD_Controller extends CI_Controller
{

    public $data = array();

    function __construct()
    {
	parent::__construct();

	if (!$this->session->userdata('user_login'))
	{
	    redirect('/Admin/Login', 'refresh');
	}
	else
	{
	    $this->data['session'] = $this->session->userdata('user_login');
	}
    }

}
