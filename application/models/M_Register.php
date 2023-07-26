<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Register extends CI_Model
{
     public function Register($data){
         $this->db->insert('dokter', $data);
     }
}