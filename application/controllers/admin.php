<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MasterData/User/M_USER','model');
        $this->load->model('MasterData/Barang_Hilang/M_HILANG');
        $this->load->model('MasterData/Matakuliah/M_Matakuliah', 'matakuliah_model');
    }

    public function index()
    {
        $data['matakuliah'] = $this->matakuliah_model->getDataMatakuliah();
    
        $angkatanData = $this->model->getTotalMahasiswaPerAngkatan();
    
        $chartData = [];
        foreach ($angkatanData as $row) {
            $chartData[$row['angkatan']] = $row['total_mahasiswa'];
        }
    
        $data['angkatanChartData'] = json_encode($chartData);
    
        $data['title'] = 'Dashboard';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard', $data);
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

    public function update_gmbr(){
        $config['upload_path'] = './application/assets/gambar/profil';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 10000;
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('profile-picture')){
            $upload_data = $this->upload->data();
            $gmbr = $upload_data['file_name'];
            $userSessionData = $this->session->userdata();
            $userSessionData['img'] = $gmbr;
            $this->session->set_userdata($userSessionData);
            $this->db->where('NIM_NIP', $this->session->userdata('NIM_NIP'));
            $this->db->update('sso', array('img' => $gmbr));
        } else {
                // Upload gagal, handle sesuai kebutuhan
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('errors', $error);
        }
        if($this->session->userdata('role_id')==0){
            redirect('user/setting');
        }
        else{
            redirect(base_url('admin/setting'));
        }
    }

    public function update_profil() {

        $newnama = $this->input->post('editName');
        $nim = $this->input->post('editNim');

        $this->db->where('NIM_NIP', $nim);
        $this->db->update('sso', array('Nama' => $newnama));
        $userSessionData = $this->session->userdata();
        $userSessionData['nama'] = $newnama;
        $this->session->set_userdata($userSessionData);

        if($this->session->userdata('role_id')==0){
            redirect('user/setting');
        }else{
            redirect('admin/setting');
        }
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
    public function upload_image() {

        $this->load->library('upload');
    
        $config['upload_path'] = './application/assets/gambar/profil/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
    
        $this->upload->initialize($config);
    
        if ($this->upload->do_upload('new_image')) {
            $upload_data = $this->upload->data();
            $new_image_filename = $upload_data['file_name'];
    
            $this->session->set_userdata('img', $new_image_filename);
    
            redirect('admin/setting');
        } else {
            $error = array('error' => $this->upload->display_errors());
        }
    }
    
}