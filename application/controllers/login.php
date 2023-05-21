<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('username') != null) {
		// 	redirect("admin/dashboard");
		// }
	}

	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('login', $data);
	}

	public function login()
	{
		$data = $this->input->post();
		$data['password'] = md5($data['password']);
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$result = $this->db->get('login')->row_array();

		$sess = array(
			'username' => $result['username'],
			'nama' => $result['nama'],
			'level' => $result['level']
		);

		$this->session->set_userdata($sess);

		if ($result['level'] == 1) {
			redirect("admin/dashboard");
		}
	}

	public function register()
	{
		$data = $this->input->post();
		$data['password'] = md5($data['password']);
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$result = $this->db->get('login');

		if ($result->num_rows() == 0) {
			$datalog = array(
				'username' => $data['username'],
				'password' => $data['password'],
				'nama' => $data['nama'],
				'level' => 2,
			);
			$this->db->insert('login', $datalog);

			$datapes = array(
				'nama' => $data['nama'],
				'no_ktp' => $data['no_ktp'],
				'alamat' => $data['alamat'],
				'jk' => $data['jk'],
				'tempat_lahir' => $data['tempat_lahir'],
				'tgl_lahir' => $data['tgl_lahir'],
				'email' => $data['email'],
				'no_telp' => $data['no_telp'],
			);
			$this->db->insert('peserta', $datapes);
			echo 'OK';
		}
		else{
			echo 'Akun sudah pernah dibuat';
		}
	}

	public function logout()
	{
		$this->db->where('id', session_id());
        if ($this->db->delete('ci_sessions')){
			redirect("");
		}
	}
}
