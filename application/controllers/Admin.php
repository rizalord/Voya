<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        // DASHBOARD PAGE
        $data = [
            'active' => 'dashboard',
            'title' => 'Dashboard'
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function stat()
    {
        // DASHBOARD PAGE
        $data = [
            'active' => 'statistics',
            'title' => 'Statistics'
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/stat');
        $this->load->view('admin/footer');
    }

    public function activity()
    {
        // DASHBOARD PAGE
        $data = [
            'active' => 'activity',
            'title' => 'Activity'
        ];
        $this->load->view('admin/header', $data);
        $this->load->view('admin/activity');
        $this->load->view('admin/footer');
    }

    public function manage($sub = 'index', $id = 0)
    {
        // DASHBOARD PAGE
        if ($sub == 'detail' && is_int((int) $id) && $id != 0) {
            $data = [
                'active' => 'manage',
                'title' => 'User Detail'
            ];
            $this->load->view('admin/header', $data);
            $this->load->view('admin/manage_user_detail');
            $this->load->view('admin/footer');
         } else {
            $data = [
                'active' => 'manage',
                'title' => 'User Manages'
            ];
            $this->load->view('admin/header', $data);
            $this->load->view('admin/manage');
            $this->load->view('admin/footer');
        }
    }
    public function videos($id = 0){
        if($id != 0) {
            $data = [
                'active' => 'manage',
                'title' => 'Video Detail'
            ];
            $this->load->view('admin/header', $data);
            $this->load->view('admin/manage_user_video');
            $this->load->view('admin/footer');
        }else{
            $data = [
                'active' => 'manage',
                'title' => 'Video Manages '
            ];
            $this->load->view('admin/header', $data);
            $this->load->view('admin/manage-video');
            $this->load->view('admin/footer');
        }
    }

}
