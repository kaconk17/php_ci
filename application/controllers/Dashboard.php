<?php

class Dashboard extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('login_status')!= TRUE) {
            redirect('');
        }

    }
    function index(){
        $this->load->view('index');
    }
}
