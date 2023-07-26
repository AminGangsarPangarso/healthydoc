<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pasien extends CI_Model
{
    public function InsertDataPasien($data){
        $this->db->insert('pasien', $data);
    }

    public function EditDataPasien($where, $data){
        $this->db->where($where);
        $this->db->update('pasien', $data);
    }

    public function DeleteDataPasien($id){
        $this->db->where('NIK', $id);
        $this->db->delete('pasien');
    }
}