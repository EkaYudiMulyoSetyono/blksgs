<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('mjurusan');
		$this->load->model('mjurusanterbuka');
		// if ($this->session->userdata('username') != null) {
		// 	redirect("admin/dashboard");
		// }
	}

	public function index()
	{
		$data['jurusanterbukas'] = $this->mjurusanterbuka->getall();
		$data['jurusans'] = $this->mjurusan->getall();
		$data['title'] = "Home";
		$this->load->view('peserta/home', $data);
	}
}
