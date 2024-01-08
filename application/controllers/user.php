<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MasterData/User/M_USER');
    }
    public function index(){
        $this->load->model('MasterData/Gedung/M_Gedung','model');
        $datagd = $this->model->getDataMatakuliah();
        $list = array('datagd'=>$datagd);
        $data['title'] = 'MAP';
        $this->load->view('user/header',$data);
        $this->load->view('user/map',$list);
        $this->load->view('admin/footer');
    }
    public function setting()
    {
        $data['title'] = 'Profil';
        $this->load->view('user/header',$data);
        $this->load->view('user/profil');
        $this->load->view('admin/footer');
    }
    public function map()
    {
        $this->load->model('MasterData/Gedung/M_Gedung','model');
        $datagd = $this->model->getDataMatakuliah();
        $list = array('datagd'=>$datagd);
        $data['title'] = 'MAP';
        $this->load->view('user/header', $data);
        $this->load->view('user/sidebar');
        $this->load->view('user/map',$list);
        $this->load->view('admin/footer');
    }
    public function feedback()
    {
        $data['title'] = 'Feedback';
        $this->load->view('user/header', $data);
        $this->load->view('user/feedback');
        $this->load->view('admin/footer');
    }

    public function update() {
        $this->form_validation->set_rules('konten', 'konten', 'required');
    
        if ($this->form_validation->run()) {
            $newFeedback = $this->input->post('konten');
            $userId = $this->session->userdata('NIM_NIP');
    
            $this->M_USER->updateFeedback($userId, $newFeedback);
    
            $userSessionData = $this->session->userdata();
            $userSessionData['feedback'] = $newFeedback;
            $this->session->set_userdata($userSessionData);
            
            redirect('user/feedback');
        } else {
            redirect('user/feedback');
        }
    }
}