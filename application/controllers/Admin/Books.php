<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->table_name = $this->uri->segment(2);
        $this->record_id = 'book_payment_id';
        // $this->record_status = $this->uri->segment(2) . '_status';


        //To use CRUD or not. (TRUE to make CRUD enable) 
        $this->is_crud = true;

        $this->form_validations = array();

        $this->image_fields = array();
    }

    public function index()
    {
        $this->db->select('*');
        $this->db->from('book_payments');
        $this->db->order_by('book_payment_id', 'DESC');
        $content['records'] = $this->db->get()->result();
        $content['main_content'] = 'book/list';
        $this->load->view('admin/inc/view', $content);
    }
    public function delete($id)
    {
        $this->db->delete('book_payments', array('book_payment_id' => $id));
        redirect('admin/books');
    }

    public function view($id)
    {
        if ($this->is_crud == true) {
            $data['where'] = array($this->record_id => $id);
            $data['table'] = 'book_payments';
            $data['output_type'] = 'row';
            $content['title'] = 'Book Payments';
            $content['record']  = $this->general->get($data);
            $content['main_content'] = 'book/view';
            // echo print_r($content['record']);
            $this->load->view('admin/inc/view', $content);
        } else {
            redirect('admin/' . $this->table_name);
        }
    }
}
