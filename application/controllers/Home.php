<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $data = $this->session->userdata();
        if(isset($data['user_id'])){
            $data = $this->db->get_where('user', ['user_id' => $data['user_id']])->result_array()[0];
        }

        $this->load->view("templates/header" , $data);
        $this->load->view("templates/leftBar");
        $this->load->view("home/index");
        $this->load->view("templates/footer");
    }
}
