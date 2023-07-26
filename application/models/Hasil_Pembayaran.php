<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_Pembayaran extends CI_Model
{
	public function getData()
	{
		$query = $this->db->get('pembayaran');
		return $query->result();
	}
}
