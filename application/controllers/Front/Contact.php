<?php 

class Contact extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
		$content['main_content'] = 'contact';
		$this->load->view('front/inc/view',$content);		

	}

	  public function submit()
	{	
		if ($_POST) 
			$content = array(
				'name' =>	$this->input->post('name',TRUE),
				'email' => $this->input->post('email', TRUE),
				'msg' => $this->input->post('msg',TRUE),
				'affair' => $this->input->post('affair',TRUE),
			);
			$data['table'] = 'contact';
			$this->general->insert($data,$content);
			$this->session->set_flashdata('success', 'Submitted Successfully.');
            redirect();
	}

}


?>