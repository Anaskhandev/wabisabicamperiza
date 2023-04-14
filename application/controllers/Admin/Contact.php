<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_Controller {
    function __construct() {
        parent::__construct(); 
        $this->table_name = $this->uri->segment(2);     
        $this->record_id = $this->uri->segment(2).'_id';     
        $this->record_status = $this->uri->segment(2).'_status';     
        

        //To use CRUD or not. (TRUE to make CRUD enable) 
        $this->is_crud = true;

        $this->form_validations = array(
            
        );

        $this->image_fields = array(

        );

    } 

    public function index(){
     if($this->is_crud == false){
         redirect('admin/'.$this->table_name.'/form/edit/1');
     }

     $data['table'] = $this->table_name;  
     $data['output_type'] = 'result';    
     // $content['title'] = $this->title;          
     $content['records']  = $this->general->get($data);
     $content['main_content'] = $this->table_name.'/list';           
     $this->load->view('admin/inc/view',$content);   
 }


public function view($id)
{
    if($this->is_crud == true){
        $data['where'] = array($this->record_id => $id); 
        $data['table'] = $this->table_name;   
        $data['output_type'] = 'row';   
        // $content['title'] = $this->title;  
        $content['record']  = $this->general->get($data);
        $content['main_content'] = $this->table_name.'/view';           
        $this->load->view('admin/inc/view',$content); 
    }
    else{
        redirect('admin/'.$this->table_name);
    }

}
public function form($form_type = "", $id = "")
{
    // echo 'hjlk'; die;
      if ($this->is_crud == false) {
            $id = 1;
        }
        if ($_POST) {
            $this->form_validation->set_rules($this->form_validations);
            if (!$this->form_validation->run() == FALSE) {
                $this->input->post();

                $content = $this->input->post();

                //Image Uploding
                foreach ($this->image_fields as $image_field) {
                    if ($_FILES[$image_field['field_name']]['size'] > 0) {
                        $image = single_image_upload($_FILES[$image_field['field_name']], $image_field['path']);
                        if (is_array($image)) {
                            $this->session->set_flashdata('error', $image);
                        } else {
                            $content[$image_field['field_name']] = $image;
                        }
                    }
                }

                $data['table'] = $this->table_name;
                if ($form_type == 'edit') {
                    $data['where'] = array($this->record_id => $id);
                    $this->general->update($data, $content);
                    $this->session->set_flashdata('success', 'Updated Successfully.');
                    redirect('admin/' . $this->table_name);
                } else if ($form_type == 'add' || $form_type == 'duplicate') {
                    $this->general->insert($data, $content);
                    $this->session->set_flashdata('success', 'Added Successfully.');
                    redirect('admin/' . $this->table_name);
                }
            } else {
                $data['where'] = array($this->record_id => $id);
                $data['table'] = $this->table_name;
                $data['output_type'] = 'row';
                // $content['title'] = $this->title;
                $content['record']  = $this->general->get($data);
                $content['main_content'] = $this->table_name . '/form';
                $this->load->view('admin/inc/view', $content);
            }
        } else {
            $data['where'] = array($this->record_id => $id);
            $data['table'] = $this->table_name;
            $data['output_type'] = 'row';
            // $content['title'] = $this->title;
            $content['record']  = $this->general->get($data);
            $content['main_content'] = $this->table_name . '/form';
            $this->load->view('admin/inc/view', $content);
        }

}
public function delete($id)
{
    if($this->is_crud == true){
        $content = array(
            $this->record_status => 'disable',
        );    
        $data['where'] = array($this->record_id => $id); 
        $data['table'] = $this->table_name;  
        $this->general->update($data,$content);        
        $this->session->set_flashdata('success', 'Deleted Successfully.');
        redirect('admin/'.$this->table_name);
    }
    else{
        redirect('admin/'.$this->table_name);
    }        
} 
}

