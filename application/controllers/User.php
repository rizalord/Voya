<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index(){
        $this->load->view("user/header");
        $this->load->view("templates/leftBar");
        $this->load->view("templates/userHeader");
        $this->load->view("user/index");
        $this->load->view("templates/footer");
    }

    public function videos($creator = 'index' , $sub = 'index' , $param='index'){
        if($creator == 'creator' && $sub == 'index' && $param == 'index'){
            $this->load->view("user/header");
            $this->load->view("templates/leftBar");
            $this->load->view("templates/userHeader");
            $this->load->view("user/creator");
            $this->load->view("templates/footer");
        }else if($creator == 'creator' && $sub == 'delete' && $param != 'index'){
            // dikembalikan lagi ke halaman creator
            redirect('user/videos/creator');
        }else{
            $this->load->view("user/header");
            $this->load->view("templates/leftBar");
            $this->load->view("templates/userHeader");
            $this->load->view("user/videos");
            $this->load->view("templates/footer");
        }
    }

    public function about(){
        $this->load->view("user/header");
        $this->load->view("templates/leftBar");
        $this->load->view("templates/userHeader");
        $this->load->view("user/about");
        $this->load->view("templates/footer");
    }

    public function bookmark(){
        $this->load->view("user/header");
        $this->load->view("templates/leftBar");
        $this->load->view("user/bookmark");
        $this->load->view("templates/footer");
    }

    public function follower(){
        $this->load->view("user/header");
        $this->load->view("templates/leftBar");
        $this->load->view("user/follower");
        $this->load->view("templates/footer");
    }

    public function followed()
    {
        $this->load->view("user/header");
        $this->load->view("templates/leftBar");
        $this->load->view("user/followed");
        $this->load->view("templates/footer");
    }

    public function setting(){
        $this->load->view("settings/header");
        $this->load->view("settings/leftBarSettings");
        $this->load->view("settings/footer");
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}