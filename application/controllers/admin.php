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
        $data['title'] = 'Master Data User';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/user/user',$list);
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');

        if ($this->form_validation->run()) 
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'angkatan' => $this->input->post('angkatan')
            );
            $datauser = $this->model->tambah_data($data);
            return redirect(base_url('admin/user'));
        }
        return redirect(base_url('admin/user'));
    }
    
    public function delete($id)
    {
        $where = array('NIM' => $id);

        $this->model->delete($where,'sso');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil Dihapus! <button type="button" clase="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        return redirect(base_url('admin/user'));
    }
    

    public function update() {
        $nim = $this->input->post('editNim');
        $nama = $this->input->post('editName');
        $angkatan = $this->input->post('editAngkatan');
    
        $this->db->where('NIM', $nim);
        $this->db->update('sso', array('Nama' => $nama, 'Angkatan' => $angkatan));
    
        return redirect(base_url('admin/user'));
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