<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Watch extends CI_Controller
{
    public function index(){
        $this->load->view("watch/header");
        $this->load->view('watch/index');
        $this->load->view("watch/footer");
    }
}