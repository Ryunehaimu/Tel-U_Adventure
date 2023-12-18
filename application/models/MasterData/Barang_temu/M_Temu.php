<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Temu extends CI_Model{
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
}

?>