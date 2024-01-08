<?php
defined('BASEPATH') or exit('No direct script access allowed');

class con_matkul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MasterData/Matakuliah/M_Matakuliah','model');
    }


    public function index()
    {
        $datamk = $this->model->getDataMatakuliah();
        $list = array('datamk'=>$datamk);
        $data['title'] = 'Master Data MataKuliah';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/Matakuliah/index',$list);
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|max_length[20]');
        $this->form_validation->set_rules('kode', 'Kode', 'required|regex_match[/^[a-zA-Z0-9]{6}$/]');
        $this->form_validation->set_rules('dosen', 'Dosen', 'required');

        if ($this->form_validation->run()) 
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'kode' => $this->input->post('kode'),
                'dosenpengampu' => $this->input->post('dosen')
            );
            
            $datamk = $this->model->tambah_data($data);

        }
        return redirect(base_url('con_matkul'));
    }
    
    
    public function delete($id)
    {
        $where = array('id' => $id);

        $this->model->delete($where,'mata_kuliah');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil Dihapus! <button type="button" clase="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        return redirect(base_url('con_matkul'));
    }
    

    public function update() {
        $kode = $this->input->post('editKode');
        $nama = $this->input->post('editName');
        $Dosen = $this->input->post('editDosen');
    
        $this->db->where('Kode', $kode);
        $this->db->update('mata_kuliah', array('Nama' => $nama, 'DosenPengampu' => $Dosen));
    
        return redirect(base_url('con_matkul'));
    }

    
}
