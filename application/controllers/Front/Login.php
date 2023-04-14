<?php 

class Login extends Front_Controller
{
	public function __construct()
	{
		parent:: __construct();

	}

	public function index()
	{
		if($this->session->userdata('auth')){
      redirect();
  } 
    else 
  {
		$content['main_content'] = 'signin';
		$this->load->view('front/inc/view',$content);		
  }
}

	public function sigin()
	{ 	
      if (($_POST))
      {		
        $email = $this->input->post('e',TRUE);
        $password = $this->input->post('p',TRUE);
        $users['where'] = array('e' => $email);		
        $users['table'] = 'users';	
        $result = $this->general->get($users);
        if($result){
          foreach($result as $row)
          {
            $pass = $row['p'];
            $emailDb = $row['e'];
            $name = $row['fn'];
            $id =	$row['users_id'];
          }

          if($pass == $password && $email == $emailDb)
          {
            $session_data = array(				
              'e' => $email,
              'fn' => $name,            
              'users_id' => $id,						
            );	 
            $this->session->unset_userdata('total_payment');
            $this->session->unset_userdata('quantity');
            $this->session->set_userdata('login_user_id', $id);
            $this->session->set_userdata('auth', $session_data);   
// $a = $this->session->userdata('auth');
            // print_r($a['fn']); exit;
            $this->session->set_flashdata('success', 'Login Successfull.');
            redirect();
          }else
          {
            $this->session->set_flashdata('error', 'Invalid Email Or Password.');
            redirect('login');
          }							
        }			
      } else
      {
		$content['main_content'] = 'signin';
		$this->load->view('front/inc/view',$content);
      }	
   	
	}


	public function logout()
	{
		$this->session->sess_destroy('auth');
		redirect();
	}	


}


?>