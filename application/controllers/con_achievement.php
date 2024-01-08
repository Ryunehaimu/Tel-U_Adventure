<?php
defined('BASEPATH') or exit('No direct script access allowed');

class con_achievement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MasterData/Achievement/M_Achievement','model');
    }


    public function index()
    {
        $dataac = $this->model->getDataMatakuliah();
        $list = array('dataac'=>$dataac);
        $data['title'] = 'Master Data Achievement';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/MasterData/achievement/achievement',$list);
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('poin', 'Poin', 'required');

        if ($this->form_validation->run()) 
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'poin' => $this->input->post('poin')
            );
            $dataac= $this->model->tambah_data($data);
        }
        return redirect(base_url('con_achievement'));
    }
    
    public function delete($id)
    {
        $where = array('id' => $id);

        $this->model->delete($where,'achievement');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil Dihapus! <button type="button" clase="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        return redirect(base_url('con_achievement'));
    }
    

    public function update() {
        $this->form_validation->set_rules('editName', 'Nama', 'required|max_length[20]');
        $this->form_validation->set_rules('editdeskripsi', 'Deskripsi', 'required|max_length[100]');
        $this->form_validation->set_rules('editpoin', 'Poin', 'required|numeric|greater_than_equal_to[1]|less_than_equal_to[50]');

        if ($this->form_validation->run()) {

            $id = $this->input->post('editid');
            $nama = $this->input->post('editName');
            $deskripsi = $this->input->post('editdeskripsi');
            $poin = $this->input->post('editpoin');
    
            $this->db->where('id', $id);
            $this->db->update('achievement', array('Nama' => $nama, 'Deskripsi' => $deskripsi, 'Poin' => $poin));
        }
        return redirect(base_url('con_achievement'));
    }

    
}
