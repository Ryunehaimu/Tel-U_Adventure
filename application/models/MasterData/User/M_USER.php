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
}

?>