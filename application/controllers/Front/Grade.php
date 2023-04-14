<?php 

class Grade extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
	    $content['main_content'] = 'curso';
		$this->load->view('front/inc/view',$content);		

	}
	
		  public function submit()
	{	
		if ($_POST) 
			$content = array(
				'name' =>	$this->input->post('name',TRUE),
				'email' => $this->input->post('email', TRUE),
			);
			$data['table'] = 'waitlist';
			$this->general->insert($data,$content);
			$this->session->set_flashdata('success', 'Submitted Successfully.');
            redirect();
	}




}


?>