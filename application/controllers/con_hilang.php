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
        $data['title'] = 'Master Data MataKuliah';
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
            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis'),
                'tanggal' => $this->input->post('tanggal'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => $this->input->post('status')
            );
            $datahl= $this->model->tambah_data($data);
            return redirect(base_url('con_hilang'));
        }
        return redirect(base_url('con_hilang'));
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
    
        $this->db->where('id', $id);
        $this->db->update('hilang', array('Nama' => $nama, 'Jenis' => $jenis, 'Tanggal' => $tanggal ,'Deskripsi' => $deskripsi, 'Status' => $status));
    
        return redirect(base_url('con_hilang'));
    }

    
}
