<?php 

class Blog extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
// 		$query = $this->db->query("SELECT b.*,(SELECT COUNT(blog_id) FROM blog_comment WHERE blog_id = b.blog_id AND blog_status = 'enable') AS comment_count FROM `blog` AS b");
		$query = $this->db->query("SELECT * FROM blog  WHERE blog_status = 'enable'");
		$content['blog'] = $query->result_array();
// 		echo '<pre>'; print_r($content['blog']); exit;
		$content['main_content'] = 'blog';

		$this->load->view('front/inc/view',$content);		

	}
	
		public function submit()
	{	
		if ($_POST) 
			$content = array(
				'name' =>	$this->input->post('name',TRUE),
				'email' => $this->input->post('email', TRUE),
				'msg' => $this->input->post('msg',TRUE),
				'blog_id' => $this->input->post('blog_id',TRUE),
			);
			$data['table'] = 'blog_comment';
			$this->general->insert($data,$content);
			$this->session->set_flashdata('success', 'Submitted Successfully.');
            redirect($_SERVER['HTTP_REFERER']);
	}

}


?>