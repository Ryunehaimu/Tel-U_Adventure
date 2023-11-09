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
    public function Matakuliah()
    {
        $data['title'] = 'Master Data MataKuliah';
        // $this->load->view('admin/header', $data);
        // $this->load->view('admin/sidebar');
        // $this->load->view('admin/MasterData/gedung/gedung');
        // $this->load->view('admin/footer');
        $this->load->view('admin/MasterData/Matakuliah/index');
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