<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Matakuliah extends CI_Model{
    public function getDataMatakuliah(){
        $this->db->select('*');
        $this->db->from('mata_kuliah');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah_data($data) {
        $this->db->insert('mata_kuliah', $data);
    }

    public function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}

?>