<?php 

class Work extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
	    $content['main_content'] = 'trabaja-aqui';
		$this->load->view('front/inc/view',$content);		

	}




}


?>