<?php 

class Cookie extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
	    $content['main_content'] = 'cookie';
		$this->load->view('front/inc/view',$content);		

	}




}


?>