<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('header', $data);
        $this->load->view('admin/dashboard');
    }
}
