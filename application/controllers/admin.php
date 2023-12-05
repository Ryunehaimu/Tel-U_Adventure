<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MasterData/User/M_USER');
    }

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
        $datauser = $this->M_USER->getDataUser();
        $list = array('datauser'=>$datauser);
        $data['title'] = 'Master Data User';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/user/user',$list);
        $this->load->view('admin/footer');
    }

    public function saveUser()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $angkatan = $this->input->post('angkatan');

        $userData = array(
            'Nama' => $nama,
            'NIM' => $nim,
            'Angkatan' => $angkatan
        );

        $this->M_USER->addUser($userData);
        
        echo json_encode(['status' => 'success']);
    }

    public function achievment()
    {
        $data['title'] = 'Master Data User';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/achievement/achievement');
        $this->load->view('admin/footer');
    }
    public function Matakuliah()
    {
        $data['title'] = 'Master Data MataKuliah';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/Matakuliah/index');
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
    public function LaporanBarangHilang()
    {
        $data['title'] = 'Laporan barang hilang';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/LaporanBarangHilang/LaporanBarangHilang');
        $this->load->view('admin/footer');
    }
    public function LaporanBarangDitemukan()
    {
        $data['title'] = 'Laporan barang hilang';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/LaporanBarangDitemukan/LaporanBarangDitemukan');
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