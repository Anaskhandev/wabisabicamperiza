<?php 

class Manual extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('session');
	}

	public function index()
	{
		$data['table'] = "book_review";
		$content['book_review'] = $this->general->get($data);
		
	    $content['main_content'] = 'book';
		$this->load->view('front/inc/view',$content);	
		

	}
	public function totalAmout()
	{	
		$total_payment = $this->input->post('total_payment',TRUE);
		$quantity = $this->input->post('quantity',TRUE);
		$this->session->set_userdata('quantity', $quantity);
		$this->session->set_userdata('total_payment', $total_payment);
	}
	public function bookType()
	{	
		$book_type = $this->input->post('book_type',TRUE);
		$this->session->set_userdata('book_type', $book_type);
	}
	
	public function reviews()
	{	
	if ($_POST) 
		   $content = array(
			'name' =>	$this->input->post('name',TRUE),
		    'email' => $this->input->post('email', TRUE),
			'affair' => $this->input->post('affair',TRUE),
			'msg' => $this->input->post('msg',TRUE),
			'book_review_status' => "enable"
		);


		$data['table'] = 'book_review';
		$this->general->insert($data,$content);
		$this->session->set_flashdata('success', '¡ GRACIAS POR TU OPINIÓN !');
		redirect('Manual-de-Camperizacion');
	}


}


?>