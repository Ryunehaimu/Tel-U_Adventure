<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Temu extends CI_Model{
    public function getDataMatakuliah(){
        $this->db->select('*');
        $this->db->from('temu');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah_data($data) {
        $this->db->insert('temu', $data);
    }

    public function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}

?>