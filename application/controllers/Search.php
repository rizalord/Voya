<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function index()
    {
        // if(empty($this->input->get('q'))){
        //     redirect('home');
        // }
        $this->load->view("search/header");
        $this->load->view("templates/leftBar");
        $this->load->view('search/index');
        $this->load->view("search/footer");
    }
}
