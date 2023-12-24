<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('header', $data);
            $this->load->view('auth/login');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        $user = $this->db->get_where('sso', ['Username' => $username])->row_array();
    
        if ($user) {
            if (password_verify($password, $user['Password'])) {
                session_start();
                $userdata = [
                    'NIM_NIP' => $user['NIM_NIP'],
                    'username' => $user['Username'],
                    'nama' => $user['Nama'],
                    'angkatan' => $user['Angkatan'],
                    'role_id' => $user['role_id'],
                ];
                
    
                $this->session->set_userdata($userdata);
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } elseif ($user['role_id'] == 0) {
                    redirect('user');
                } else {
                    redirect(base_url('auth'));
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect(base_url('auth'));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
            redirect(base_url('auth'));
        }
    }
    
    
}
