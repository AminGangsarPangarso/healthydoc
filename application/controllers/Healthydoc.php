<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Healthydoc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('tamplate/header');
		$this->load->view('home');
		$this->load->view('tamplate/footer');
	}
	public function price()
	{
		$this->load->view('tamplate/header');
		$this->load->view('price');
		$this->load->view('tamplate/footer');
	}
	public function pencariandatarme()
	{
		$this->load->view('tamplate/header');
		$this->load->view('searchrme');
		$this->load->view('tamplate/footer');
	}
	public function detailpembayaran()
	{
		$this->load->model('Hasil_Pembayaran');
		$data['result'] = $this->Hasil_Pembayaran->getData();
		$this->load->view('tamplate/header');
		$this->load->view('detailpembayaran', $data);
		$this->load->view('tamplate/footer');
	}

	public function rme()
	{
		$nik = $this->input->POST('NIK');
		$nama = $this->input->POST('nama');

		$user = $this->db->get_where('pasien', ['NIK' => $nik])->row_array();
		if ($user) {
			if ($user['NAMA'] == $nama) {
				$data = [
					'nik' => $user['NIK'],
					'nama' => $user['NAMA']
				];
				$this->session->set_userdata($data);
				$data['rme'] = $this->M_RME->rmepasien();

				$this->load->view('tamplate/header');
				$this->load->view('datarme', $data);
				$this->load->view('tamplate/footer');
			} else {
				echo "<script>alert('Data yang Anda Inputkan Tidak Valid. Silahkan Coba Lagi!');</script>";
				redirect('healthydoc');
			}
		} else {
			echo "<script>alert('NIK Tidak Terdaftar. Silahkan Coba Lagi!');</script>";
			redirect('healthydoc');
		}
	}

	public function login()
	{

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$nip = $this->input->POST('NIP');
		$mail = $this->input->POST('email');
		$pass = $this->input->POST('password');

		$admin = $this->db->get_where('dokter', ['NIP' => $nip])->row_array();
		if ($admin) {
			if ($admin['EMAIL'] == $mail) {
				if ($admin['PASSWORD_DOKTER'] == $pass) {
					$data = [
						'nip' => $admin['NIP'],
						'nama' => $admin['NAMA']
					];

					$this->session->set_userdata($data);
					redirect('admin');
				} else {
					echo "<script>alert('Password yang Anda Inputkan Salah. Silahkan Coba Lagi!');</script>";
					$this->load->view('login');
				}
			} else {
				echo "<script>alert('Email yang Anda Inputkan Salah. Silahkan Coba Lagi!');</script>";
				$this->load->view('login');
			}
		} else {
			echo "<script>alert('NIP tidak terdaftar. Silahkan Coba Lagi!');</script>";
			$this->load->view('login');
		}
	}

	public function regist()
	{
		$this->load->view('regist');
	}

	public function Register()
	{
		$NIP = $this->input->post('nip');
		$NAMA = $this->input->post('nama');
		$TMPLAHIR = $this->input->post('tempat');
		$TGLLAHIR = $this->input->post('tgllahir');
		$JENKELCUS = $this->input->post('inlineRadioOptions');
		$ALAMAT = $this->input->post('alamat');
		$EMAIL = $this->input->post('email');
		$PASSWORD_DOKTER = $this->input->post('password');

		$DataRegister = array(
			'nip' => $NIP,
			'nama' => $NAMA,
			'tmplahir' => $TMPLAHIR,
			'tgllahir' => $TGLLAHIR,
			'jenkelcus' => $JENKELCUS,
			'alamat' => $ALAMAT,
			'email' => $EMAIL,
			'password_dokter' => $PASSWORD_DOKTER
		);

		$this->M_Register->Register($DataRegister);
		redirect(base_url('healthydoc/login'));
	}



	public function finish()
	{
		$result = json_decode($this->input->post('result_data'), true);

		// Validasi data sebelum menyimpan
		if (isset($result['order_id'], $result['gross_amount'], $result['payment_type'], $result['transaction_time'], $result['va_numbers'][0]['bank'], $result['va_numbers'][0]['va_number'], $result['pdf_url'], $result['status_code'])) {
			$data = [
				'order_id' => $result['order_id'],
				'gross_amount' => $result['gross_amount'],
				'payment_type' => $result['payment_type'],
				'transaction_time' => $result['transaction_time'],
				'bank' => $result['va_numbers'][0]['bank'],
				'va_number' => $result['va_numbers'][0]['va_number'],
				'pdf_url' => $result['pdf_url'],
				'status_code' => $result['status_code']
			];
			$simpan = $this->db->insert('pembayaran', $data);
			if ($simpan) {
				echo "Sukses";
			} else {
				echo "Gagal";
			}
		} else {
			echo "Data tidak valid. Gagal menyimpan.";
		}
	}
}
