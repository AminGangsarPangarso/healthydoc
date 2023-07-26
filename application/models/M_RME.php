<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_RME extends CI_Model
{
    public function rme()
    {
        $nip = $_SESSION['nip'];
        return $this->db->get_where('riwayat', ['NIP' => $nip])->result_array();
    }

    public function rmepasien()
    {
        $nik = $_SESSION['nik'];
        $nama = $_SESSION['nama'];
        return $this->db->get_where('riwayat', ['NIK' => $nik, 'NAMA' => $nama])->result_array();
    }

    public function InsertData($data)
    {
        $this->db->insert('rme', $data);
    }
}
