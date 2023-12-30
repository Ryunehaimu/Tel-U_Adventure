<?php
defined('BASEPATH') or exit('No direct script access allowed');

class con_gedung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MasterData/Gedung/M_Gedung','model');
    }


    public function index()
    {
        $datagd = $this->model->getDataMatakuliah();
        $list = array('datagd'=>$datagd);
        $data['title'] = 'Master Data Gedung';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/gedung/gedung',$list);
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run()) 
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'keterangan' => $this->input->post('keterangan')
            );
            $datamk= $this->model->tambah_data($data);
        }
        return redirect(base_url('con_gedung'));
    }
    
    public function delete($id)
    {
        $where = array('id' => $id);

        $this->model->delete($where,'gedung');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil Dihapus! <button type="button" clase="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        return redirect(base_url('con_gedung'));
    }
    

    public function update() {
        $id = $this->input->post('editid');
        $nama = $this->input->post('editName');
        $deskripsi = $this->input->post('editdeskripsi');
        $keterangan = $this->input->post('editketerangan');
    
        $this->db->where('id', $id);
        $this->db->update('gedung', array('Nama' => $nama, 'Deskripsi' => $deskripsi, 'Keterangan' => $keterangan));
    
        return redirect(base_url('con_gedung'));
    }

    
}
