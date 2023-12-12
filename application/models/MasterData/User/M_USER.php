<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_USER extends CI_Model{
    public function getDataUser(){
        $this->db->select('*');
        $this->db->from('sso');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah_data($data) {
        $this->db->insert('sso', $data);
    }

    public function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}

?>