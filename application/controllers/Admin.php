<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$data['dokter'] = $this->db->get_where('dokter', ['NIP' =>
		$this->session->userdata('nip')])->row_array();

		$data['riwayat'] = $this->M_RME->rme();

		$data['title'] = 'Dashboard';
		$this->load->view('tamplate/side_header', $data);
		$this->load->view('auth/beranda', $data);
	}

	public function dokter()
	{
		$data['title'] = 'EDIT PROFILE DOKTER';
		$this->load->view('tamplate/side_header', $data);
		$this->load->view('auth/editdokter');
	}

	public function updatedokter()
	{
		$NIP = $this->input->post('nip');
		$NAMA = $this->input->post('nama');
		$TMPLAHIR = $this->input->post('tempat');
		$TGLLAHIR = $this->input->post('tgllahir');
		$JENKELCUS = $this->input->post('inlineRadioOptions');
		$ALAMAT = $this->input->post('alamat');
		$EMAIL = $this->input->post('email');
		$PASSWORD_DOKTER = $this->input->post('password');
		$foto = $_FILES['filefoto'];
		if ($foto = '') {
		} else {
			$config['upload_path']	= './asset/image';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('filefoto')) {
			} else {
				$foto = $this->upload->data('file_name');
			}
		}

		$Data = array(
			'nip' => $NIP,
			'nama' => $NAMA,
			'tmplahir' => $TMPLAHIR,
			'tgllahir' => $TGLLAHIR,
			'jenkelcus' => $JENKELCUS,
			'alamat' => $ALAMAT,
			'IMG' => $foto,
			'email' => $EMAIL,
			'password_dokter' => $PASSWORD_DOKTER
		);

		$where = array(
			'nip' => $NIP
		);

		$this->M_Profile->ProfileDokter($where, $Data);
		redirect(base_url('Admin/'));
	}

	public function pasien()
	{
		$data['title'] = 'EDIT DATA PASIEN';
		$this->load->view('tamplate/side_header', $data);
		$this->load->view('auth/editpasien');
	}

	public function inputPasien()
	{
		$data['title'] = 'INPUT DATA PASIEN';
		$this->load->view('tamplate/side_header', $data);
		$this->load->view('auth/inputpasien');
	}

	public function dttabel()
	{
		$data['pasien'] = $this->db->get_where('pasien')->result_array();

		$data['title'] = 'DATA PASIEN';
		$this->load->view('tamplate/side_header', $data);
		$this->load->view('auth/tabelpasien', $data);
	}

	public function AksiInsert()
	{
		$NIK = $this->input->post('nik');
		$NAMA = $this->input->post('nama');
		$TMPLAHIR = $this->input->post('tempat');
		$TGLLAHIR = $this->input->post('tgllahir');
		$JENKELCUS = $this->input->post('inlineRadioOptions');
		$ALAMAT = $this->input->post('alamat');

		$DataInsert = array(
			'NIK' => $NIK,
			'NAMA' => $NAMA,
			'TMPLAHIR' => $TMPLAHIR,
			'TGLLAHIR' => $TGLLAHIR,
			'JENKELCUS' => $JENKELCUS,
			'ALAMAT' => $ALAMAT
		);

		$this->M_pasien->InsertDataPasien($DataInsert);
		redirect(base_url('Admin/dttabel'));
	}

	public function AksiEdit()
	{
		$NIK = $this->input->post('nik');
		$NAMA = $this->input->post('nama');
		$TMPLAHIR = $this->input->post('tempat');
		$TGLLAHIR = $this->input->post('tgllahir');
		$JENKELCUS = $this->input->post('inlineRadioOptions');
		$ALAMAT = $this->input->post('alamat');

		$data = array(
			'NIK' => $NIK,
			'NAMA' => $NAMA,
			'TMPLAHIR' => $TMPLAHIR,
			'TGLLAHIR' => $TGLLAHIR,
			'JENKELCUS' => $JENKELCUS,
			'ALAMAT' => $ALAMAT
		);

		$where = array(
			'NIK' => $NIK
		);

		$this->M_pasien->EditDataPasien($where, $data);
		redirect(base_url('Admin/dttabel'));
	}

	public function AksiDelete()
	{
		if (isset($_GET['nik'])) {
			$nik = $_GET['nik'];

			$this->M_pasien->DeleteDataPasien($nik);
			redirect(base_url('Admin/dttabel'));
		}
	}

	public function inputRME()
	{
		$data['pasien'] = $this->db->get_where('pasien')->result_array();

		$data['title'] = 'FORM INPUT DATA RME';
		$this->load->view('tamplate/side_header', $data);
		$this->load->view('auth/inputrme', $data);
	}

	public function InsertRME()
	{
		$NIK = $this->input->post('nik');
		$keluhan = $this->input->post('Klhn');
		$diagnosa = $this->input->post('diagnosa');
		$tglperiksa = $this->input->post('tglperiksa');
		$tindakan = $this->input->post('tindakan');
		$tglRME = $this->input->post('tglrme');
		$NIP = $this->input->post('nip');

		$DataInsert = array(
			'NIK' => $NIK,
			'keluhan' => $keluhan,
			'diagnosa' => $diagnosa,
			'tglperiksa' => $tglperiksa,
			'tindakan' => $tindakan,
			'TglRME' => $tglRME,
			'NIP' => $NIP
		);

		$this->M_RME->InsertData($DataInsert);
		redirect(base_url('Admin/'));
	}

	public function logout()
	{
		$this->session->unset_userdata('nip');
		redirect('healthydoc');
	}
}
