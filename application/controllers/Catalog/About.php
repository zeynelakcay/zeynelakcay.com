<?php

class About extends CI_Controller
{

    public function index()
    {
	$this->load->model('Admin/About_model');

	$url = 'https://api.instagram.com/v1/users/1384041035/media/recent/?access_token=1384041035.5df03f2.2040d0de7ad54369bc3f6018b3228554';

	$response = $this->get_curl($url); //change request path to pull different photos

	$images = array();

	if ($response)
	{
	    foreach (json_decode($response)->data as $item)
	    {

		$title	 = (isset($item->caption)) ? mb_substr($item->caption->text, 0, 70, "utf8") : null;
		$src	 = $item->images->thumbnail->url;

		$images[] = array(
		    "title"	 => htmlspecialchars($title),
		    "src"	 => htmlspecialchars($src),
		);
	    }
	}

	$this->data['instagram_images']	 = $images;
	$this->data['about']		 = $this->About_model->get_about();
	$this->load->view('catalog/theme/header', $this->data);
	$this->load->view('catalog/about/index', $this->data);
	$this->load->view('catalog/theme/footer', $this->data);
    }

    private function get_curl($url)
    {
	if (function_exists('curl_init'))
	{
	    $ch	 = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	    $output	 = curl_exec($ch);
	    echo curl_error($ch);
	    curl_close($ch);
	    return $output;
	}
	else
	{
	    return file_get_contents($url);
	}
    }

}
