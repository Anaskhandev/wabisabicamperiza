<?php 

class About extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
	    $content['main_content'] = 'sobre-nosotros';
		$this->load->view('front/inc/view',$content);		

	}




}


?>