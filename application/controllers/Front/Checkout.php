<?php

class Checkout extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['table'] = 'price';  
		$data['output_type'] = 'result';    
		$content['records']  = $this->general->get($data);
		$price = $content['records'][0]->master_price;
	
		if (!$this->session->userdata('total_payment')) {
			$this->session->set_userdata('quantity', 1);
			$this->session->set_userdata('total_payment', $price);
		}
		if (!$this->session->userdata('book_type')) {
			$this->session->set_userdata('book_type', 'Hardback Book');
		}
		$content['main_content'] = 'book-checkout';
		$this->load->view('front/inc/view', $content);
	}

	public function submit()
	{
		if ($_POST)
			$content = array(
				'name' =>	$this->input->post('name', TRUE),
				'email' => $this->input->post('email', TRUE),
				'phone' => $this->input->post('phone', TRUE),
				'request' => $this->input->post('request', TRUE),
				'description' => $this->input->post('description', TRUE),
				'amount' => $this->input->post('amount', TRUE),
				'adrs' => $this->input->post('adrs', TRUE),
			);
		$this->session->set_userdata($content);
		redirect('/make-stripe-payment');
		//$this->load->view('front/checkout');
		//$data['table'] = 'checkout';
		//$this->general->insert($data,$content);
		//$this->session->set_flashdata('success', 'Submitted Successfully.');
		//redirect('checkout');
	}
	public function book()


	{
		$data['table'] = 'price';  
		$data['output_type'] = 'result';    
		$content['records']  = $this->general->get($data);
		$price = $content['records'][0]->master_price;
		if (!$this->session->userdata('total_payment')) {
			$this->session->set_userdata('quantity', 1);
			$this->session->set_userdata('total_payment', $price);
		}
		if (!$this->session->userdata('book_type')) {
			$this->session->set_userdata('book_type', 'Hardback Book');
		}
		$content['main_content'] = 'book-checkout';
		$this->load->view('front/inc/view', $content);
	}
	public function book_processed()
	{
		if ($_POST) {
			//echo $this->input->post('first_name', TRUE); die;
			$this->session->set_userdata('first_name', $this->input->post('first_name', TRUE));
			$this->session->set_userdata('last_name', $this->input->post('last_name', TRUE));
			$this->session->set_userdata('company', $this->input->post('company', TRUE));
			$this->session->set_userdata('User_Id', $this->input->post('User_Id', TRUE));
			$this->session->set_userdata('country', $this->input->post('country', TRUE));
			$this->session->set_userdata('street_name', $this->input->post('street_name', TRUE));
			$this->session->set_userdata('street_number', $this->input->post('street_number', TRUE));
			$this->session->set_userdata('city', $this->input->post('city', TRUE));
			$this->session->set_userdata('state', $this->input->post('state', TRUE));
			$this->session->set_userdata('zipcode', $this->input->post('zipcode', TRUE));
			$this->session->set_userdata('phone_number', $this->input->post('phone_number', TRUE));
			$this->session->set_userdata('email', $this->input->post('email', TRUE));
			$this->session->set_userdata('note', $this->input->post('note', TRUE));
			$this->session->set_userdata('amount', $this->session->userdata('total_payment'));
			redirect('/make-stripe-book-payment');
		}
	}
}
