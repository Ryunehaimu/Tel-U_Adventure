<?php
defined('BASEPATH') or exit('No direct script access allowed');

class con_hilang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MasterData/Barang_Hilang/M_Hilang','model');
    }


    public function index()
    {
        $datahl = $this->model->getDataMatakuliah();
        $list = array('datahl'=>$datahl);
        $data['title'] = 'Master Data Laporan Barang Hilang';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/LaporanBarangHilang/LaporanBarangHilang',$list);
        $this->load->view('admin/footer');
    }

    public function create()
    {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('jenis', 'Jenis', 'required');
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    
    if ($this->form_validation->run()) 
        {
            $config['upload_path'] = './application/assets/gambar/hilang';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 10000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')){
                $upload_data = $this->upload->data();

            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis'),
                'tanggal' => $this->input->post('tanggal'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $upload_data['file_name'], // Save the file name
                'status' => $this->input->post('status'),
            );
            echo "chechpoin1";
            $datamk= $this->model->tambah_data($data);
            } else {
                // Upload gagal, handle sesuai kebutuhan
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('errors', $error);
            }
        return redirect(base_url('con_hilang'));
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('errors', validation_errors());
        }
    }
    public function delete($id)
    {
        $where = array('id' => $id);

        $this->model->delete($where,'hilang');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil Dihapus! <button type="button" clase="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        return redirect(base_url('con_hilang'));
    }
    

    public function update() {
        $id = $this->input->post('editid');
        $nama = $this->input->post('editName');
        $jenis = $this->input->post('editjenis');
        $tanggal = $this->input->post('edittanggal');
        $deskripsi = $this->input->post('editdeskripsi');
        $status = $this->input->post('editstatus');
    
        $id = $this->input->post('editid');
        $nama = $this->input->post('editName');
        $deskripsi = $this->input->post('editdeskripsi');
        $keterangan = $this->input->post('editketerangan');
    
        $data = array(
            'Nama' => $nama,
            'Jenis' => $jenis,
            'Tanggal' => $tanggal,
            'Deskripsi' => $deskripsi,
            'Status' => $status,
        );
    
        // Check if a new image is uploaded
        if ($_FILES['editgambar']['name']) {
            $config['upload_path'] = './application/assets/gambar/hilang';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 10000;
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('editgambar')) {
                $upload_data = $this->upload->data();
                $data['Gambar'] = $upload_data['file_name'];
            } else {
                // Handle upload errors
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('errors', $error);
                return redirect(base_url('con_hilang'));
            }
        }
    
        $this->db->where('id', $id);
        $this->db->update('hilang', $data);
  
        return redirect(base_url('con_hilang'));
    } 
}
