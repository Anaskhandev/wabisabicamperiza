<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends Admin_Controller {
	function __construct() {
		parent::__construct();		
	}  

	public function index(){   
    $price_id = 1;
    if($_POST){
      $this->form_validation->set_rules('master_price', 'Price', 'trim|required|alpha_numeric_spaces|min_length[1]|max_length[7]');
      if (!$this->form_validation->run() == FALSE){
        $content = array(
          'master_price' => $this->input->post('master_price',TRUE),
          'price_status' => 'enable',
          'price_updated_by' => '1'
        );  
     
        $data['where'] = array('price_id' => $price_id);		
        $data['table'] = 'price';	
        $this->general->update($data,$content);        
        $this->session->set_flashdata('success', 'Updated Successfully.');
        redirect('admin/price/index');
      }
      else{
        $data['where'] = array('price_id' => $price_id);		
        $data['table'] = 'price';	
        $data['output_type'] = 'row';	
        $content['title'] = 'Book Price';	
        $content['record']  = $this->general->get($data);
        $content['main_content'] = 'price/edit';			
        $this->load->view('admin/inc/view',$content);   
     }
    }
    else{        
        $data['where'] = array('price_id' => $price_id);		
        $data['table'] = 'price';	
        $data['output_type'] = 'row';	
        $content['title'] = 'Book Price';	
        $content['record']  = $this->general->get($data);
        $content['main_content'] = 'price/edit';			
        $this->load->view('admin/inc/view',$content);   
    }
  }
	
}
