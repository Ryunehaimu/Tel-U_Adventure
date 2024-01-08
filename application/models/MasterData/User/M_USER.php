<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_USER extends CI_Model{
    public function getDataUser(){
        $this->db->select('*');
        $this->db->from('sso');
        $this->db->where('role_id', 0);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateFeedback($userId, $newFeedback) {
        $this->db->where('NIM_NIP', $userId);
        $this->db->update('sso', array('feedback' => $newFeedback));
    }
    public function getAngkatanData() {
        $query = $this->db->get('sso');
        return $query->result_array();
    }

    public function getTotalMahasiswaPerAngkatan() {
        $query = $this->db->select('angkatan, COUNT(*) as total_mahasiswa')
        ->from('sso')
        ->where('role_id', 0) // Add this condition to filter by role_id = 0
        ->group_by('Angkatan')
        ->get();

        return $query->result_array();
    }
}

?>