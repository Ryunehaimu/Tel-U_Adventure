<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MasterData/User/M_USER','model');
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
        $datauser = $this->model->getDataUser();
        $list = array('datauser'=>$datauser);
        $data['title'] = 'Master Data Mahasiswa';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/user/user',$list);
        $this->load->view('admin/footer');
    }

    public function update_profil() {

        $nama = $this->input->post('editName');
        $nim = $this->input->post('editNim');
        $angkatan = $this->input->post('editAngkatan');

        $this->db->where('NIM_NIP', $nim);
        $this->db->update('sso', array('Nama' => $nama, 'Angkatan' => $angkatan));
        return redirect(base_url('admin/setting'));
    }
    public function logout() {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('welcome');
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