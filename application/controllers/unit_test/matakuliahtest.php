<?php
defined('BASEPATH') or exit('No direct script access allowed');

class matakuliahtest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->library('form_validation');
        $this->load->model('MasterData/Matakuliah/M_Matakuliah');
    }

    public function valid_testcase()
    {
        $_POST['nama'] = 'SampleName';
        $_POST['kode'] = 'SPO202';
        $_POST['dosen'] = 'SampleProfessor';

        $validation_result = $this->create();
    
        echo $this->unit->run($validation_result, true, 'Form Validation Passed');
    }

    public function invalid_testcase()
    {
        $_POST['nama'] = '';
        $_POST['kode'] = 'InvalidCode';
        $_POST['dosen'] = 'Sample Professor';
    
        $validation_result = $this->create();

        echo $this->unit->run($validation_result, false, 'Form Validation Failed');
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
            return true;
        }else{
            return false;
        }

    }
}
