<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    public function user()
    {
        $data['title'] = 'Master Data User';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/user/user');
        $this->load->view('admin/footer');
    }
    public function achievment()
    {
        $data['title'] = 'Master Data User';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/achievement/achievement');
        $this->load->view('admin/footer');
    }
    public function gedung()
    {
        $data['title'] = 'Master Data User';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/gedung/gedung');
        $this->load->view('admin/footer');
    }

    public function setting()
    {
        $data['title'] = 'Master Data User';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('profil/profil');
        $this->load->view('admin/footer');
    }
}
