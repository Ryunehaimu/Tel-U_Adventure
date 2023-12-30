<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barangditemukantest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->library('form_validation');
        $this->load->model('MasterData/Matakuliah/M_Matakuliah');
    }

    public function test_create_validation_passes()
    {
        $_POST['nama'] = '';
        $_POST['jenis'] = 'TestJenis';
        $_POST['tanggal'] = 'ASAS1212';
        $_POST['deskripsi'] = 'TestDeskripsi';
        $_POST['status'] = 'belum';

        $validation_result = base_url("unit_test/barangditemukantest/create");

        echo $this->unit->run($validation_result, true, 'Form Validation Passed');
    }

    public function test_create_validation_fails()
    {
        $_POST['nama'] = '';
        $_POST['jenis'] = 'TestJenis';
        $_POST['tanggal'] = 'TestTanggal';
        $_POST['deskripsi'] = 'TestDeskripsi';
        $_POST['status'] = 'TestStatus';

        // Make HTTP request to the create endpoint
        $validation_result = base_url("unit_test/barangditemukan/create");

        echo $this->unit->run($validation_result, false, 'Form Validation Failed');
    }


    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|max_length[20]');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|max_length[20]');
        echo tes;
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|regex_match[/^\d{2}\/\d{2}\/\d{4}$/]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|max_length[100]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[sudah,belum,Sudah,Belum,SUDAH,BELUM]');
        echo 1;
        if ($this->form_validation->run()==true) 
        {
            echo 2;
            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis'),
                'tanggal' => $this->input->post('tanggal'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => $this->input->post('status')
            );
            $datahl= $this->model->tambah_data($data);
            return true;
        }else{
            echo 3;
            return false;
        }
    } 
}
