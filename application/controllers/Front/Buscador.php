<?php

class Buscador extends Front_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $content['main_content'] = 'buscador';
        $this->load->view('front/inc/view', $content);
    }
}
