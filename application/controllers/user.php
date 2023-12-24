<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Dashboard User';
        $this->load->view('admin/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('user/dashboard');
        $this->load->view('admin/footer');
    }
    public function setting()
    {
        $data['title'] = 'Master Data User';
        $this->load->view('admin/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('profil/profil');
        $this->load->view('admin/footer');
    }
    public function map()
    {
        $data['title'] = 'MAP';

        $this->load->view('admin/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('user/map');
        $this->load->view('admin/footer');
    }
}