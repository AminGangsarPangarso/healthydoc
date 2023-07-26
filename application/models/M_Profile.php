<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Profile extends CI_Model
{
    public function ProfileDokter($where, $data){
        $this->db->where($where);
        $this->db->update('dokter', $data);
    }
}