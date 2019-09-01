<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login - Voya';
        $this->form_validation->set_rules('username' , 'Username' , "required|trim|min_length[5]");
        $this->form_validation->set_rules('password' , 'Password' , "required|trim|min_length[8]");

        
        
        if($this->form_validation->run() == false){
            // validasi gagal
            $this->load->view('auth/header',$data);
            $this->load->view('auth/index-login');
            $this->load->view('auth/footer-login');
        }else{
            // validasi sukses
            $this->_login();
        }
    }

    private function _login(){
        $username = htmlspecialchars($this->input->post('username'));
        $user = $this->db->get_where('user' , ['username' => $username])->result_array()[0];

        if($user){
                // user ada
                if($user['is_active'] == 1){
                    // user aktif
                    if($user['is_banned'] == 0){
                        // cek di banned apa enggak
                        if(password_verify($this->input->post('password') , $user['password'])){
                            // cek password
                            $data = [
                                'user_id' => $user['user_id'],
                                'role_id' => $user['role_id'],
                                'email' => $user['email']
                            ];

                            $this->session->set_userdata($data);
                            redirect('home');


                        }else{
                            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                            Your Password is wrong!
                            </div>');
                            redirect('auth');        
                        }
                    }else{
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        This account has been Banned!
                        </div>');
                        redirect('auth');        
                    }
                }else{
                    var_dump($user);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    This account has not been Activated!
                    </div>');
                    redirect('auth');        
                }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Username is not registered!
                </div>');
                redirect('auth');    
            }
    }

    public function register()
    {
        // form validation
        $this->form_validation->set_rules('name','Name','required|trim|alpha_numeric|min_length[5]|is_unique[user.username]', [
            'is_unique' => 'Username already been registered.'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email already been registered.'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|alpha_numeric|min_length[8]');
        $this->form_validation->set_rules('password2', 'Second Password', 'trim|matches[password1]',[
            'matches' => 'Password doesn\'t match.'
        ]);

        $data['title'] = 'Registration - Voya';

        if($this->form_validation->run() == false){
            $this->load->view('auth/header',$data);
            $this->load->view('auth/index-register');
            $this->load->view('auth/footer-register');
        }else{

            $userId = substr(uniqid(8,false) , 0 , 10);
            $name = htmlspecialchars($this->input->post('name') , true);
            $username = htmlspecialchars($this->input->post('name'), true);
            $password = password_hash(htmlspecialchars($this->input->post('password1') , true) , PASSWORD_DEFAULT);
            $email = htmlspecialchars($this->input->post('email'), true);
            $date_created = (String)time();
            $roleId = 0;
            $isActive = 1;
            $isBanned = 0;
            $follower = 0;
            $followed = 0;
            $videos = 0;
            $totalView = 0;
            $profileUrl = base_url('assets/img/logo/defaultUser.jpg');
            $bgUrl = base_url('assets/img/logo/bgDefault.png');
            $description = "Baru saja bergabung.";

            $data = [
                'user_id' => $userId,
                'name' => $name,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'date_created' => $date_created,
                'role_id' => $roleId,
                'is_active' => $isActive,
                'is_banned' => $isBanned,
                'follower' => $follower,
                'followed' => $followed,
                'videos' => $videos,
                'totalView' => $totalView,
                'profile_url' => $profileUrl,
                'background_url' => $bgUrl,
                'description' => $description
            ];
            
            $this->db->insert('user' , $data);
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Congratulation! Your account has been created
                </div>');
            redirect('auth');
        }
    }

    public function forget(){
        $data['title'] = 'Forget Password - Voya';
        $this->form_validation->set_rules('email' , 'Email' , "required|trim|min_length[8]|valid_email");

        $this->load->view('auth/header', $data);
        $this->load->view('auth/forget');
        $this->load->view('auth/footer-login');
    }

}
