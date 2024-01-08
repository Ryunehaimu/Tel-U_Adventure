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
        $this->form_validation->set_rules('X', 'x', 'required');
        $this->form_validation->set_rules('Y', 'y', 'required');
        

        if ($this->form_validation->run()) 
        {
            $config['upload_path'] = './application/assets/gambar/gedung';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 10000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')){
                $upload_data = $this->upload->data();

            $data = array(
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'keterangan' => $this->input->post('keterangan'),
                'gambar' => $upload_data['file_name'],
                'x' => $this->input->post('X'),  // Change to 'X' instead of 'x'
                'y' => $this->input->post('Y'),   // Change to 'Y' instead of 'y'
            );
            echo "chechpoin1";
            $datamk= $this->model->tambah_data($data);
            } else {
                // Upload gagal, handle sesuai kebutuhan
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('errors', $error);
            }
        return redirect(base_url('con_gedung'));
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('errors', validation_errors());
        }
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
        $this->form_validation->set_rules('editName', 'Name', 'required');
        $this->form_validation->set_rules('editdeskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('editketerangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('editX', 'X', 'required');
        $this->form_validation->set_rules('editY', 'Y', 'required');

        $id = $this->input->post('editid');
        $nama = $this->input->post('editName');
        $deskripsi = $this->input->post('editdeskripsi');
        $keterangan = $this->input->post('editketerangan');
        $X = $this->input->post('editX');
        $Y = $this->input->post('editY');
    
        $data = array(
            'Nama' => $nama,
            'Deskripsi' => $deskripsi,
            'Keterangan' => $keterangan,
            'X' => $X,
            'Y' => $Y,
        );
    
        // Check if a new image is uploaded
        if ($_FILES['editgambar']['name']) {
            $config['upload_path'] = './application/assets/gambar/gedung';
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
                return redirect(base_url('con_gedung'));
            }
        }
    
        $this->db->where('id', $id);
        $this->db->update('gedung', $data);
    
        return redirect(base_url('con_gedung'));
    }

    
}
