<?php 

class Blog_internal extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index($id)
	{
		$content['blog'] = $this->db->select('*')->from('blog')->where('blog_id', $id)->get()->row();
		$content['data'] = $this->db->select('*')->from('blog_comment')->where(array('blog_id'=> $id, 'blog_comment_status' => 'enable'))->get()->result();
		$content['reply'] = $this->db->select('*')->from('blog_comment_reply')->where(array('blog_id'=> $id, 'comment_id' => '6'))->get()->result();
		$content['main_content'] = 'blog_internal';
		$this->load->view('front/inc/view',$content);		

	}

}


?>