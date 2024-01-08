<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Hilang extends CI_Model{
    public function getDataMatakuliah(){
        $this->db->select('*');
        $this->db->from('hilang');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah_data($data) {
        $this->db->insert('hilang', $data);
    }

    public function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getBarangStatusCount() {
        $query = $this->db->select('status, COUNT(*) as total_barang')
                          ->from('hilang')
                          ->group_by('status')
                          ->get();

        return $query->result_array();
    }
}

?>