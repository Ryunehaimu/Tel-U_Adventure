<?php
defined('BASEPATH') or exit('No direct script access allowed');

class achievementtest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->library('form_validation');
        $this->load->model('MasterData/Achievement/M_Achievement');
    }

    public function tc3()
    {
        $_POST['editName'] = 'Mancing Mania';
        $_POST['editdeskripsi'] = 'dapat ikan pada danau galau tanpa ketahuan';
        $_POST['editpoin'] = '45';

        $validation_result = $this->update();

        echo $this->unit->run($validation_result, true, 'Form Validation Update Achievement Passed');
    }

    public function tc4()
    {
        $_POST['editName'] = 'jalan-jalan keliling telkom selama 30 hari no-stop';
        $_POST['editdeskripsi'] = '';
        $_POST['editpoin'] = '1000';

        $validation_result = $this->update();

        echo $this->unit->run($validation_result, false, 'Form Validation Update Achievement Failed');
    }

    public function tc5()
    {
        $_POST['nama'] = 'Donatur Telkom';
        $_POST['deskripsi'] = 'Semester 11 Belum apal map telkom jir';
        $_POST['poin'] = '50';

        $validation_result = $this->create();

        echo $this->unit->run($validation_result, true, 'Form Validation Create Achievement Passed');
    }

    public function tc6()
    {
        $_POST['nama'] = 'Sipaling hapal map telkom sampe akarnya';
        $_POST['deskripsi'] = '';
        $_POST['poin'] = '100';

        $validation_result = $this->create();

        echo $this->unit->run($validation_result, false, 'Form Validation Create Achievement Failed');
    }

    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|max_length[20]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|max_length[100]');
        $this->form_validation->set_rules('poin', 'Poin', 'required|numeric|greater_than_equal_to[1]|less_than_equal_to[50]');

        if ($this->form_validation->run()) 
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'poin' => $this->input->post('poin')
            );
            $dataac= $this->model->tambah_data($data);
            return true;
        }
        return false;
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
            return true;
        }
        return false;
    } 
}
