<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('mjurusan');
		if ($this->session->userdata('username') == null) {
			redirect("");
		}
	}

	public function index()
	{
		$data['jurusans'] = $this->mjurusan->getall();
		$data['title'] = "Jurusan";
		$data['page'] = 'admin/jurusan/list';
		$this->load->view('layout/base', $data);
	}

    public function tambah()
    {
        if ($this->mjurusan->add()) {
			redirect('admin/jurusan','refresh');
		}
    }

	public function ubah($id)
    {
        if ($this->mjurusan->edit($id)) {
			redirect('admin/jurusan','refresh');
		}
    }

	public function hapus($id)
    {
        if ($this->mjurusan->delete($id)) {
			redirect('admin/jurusan','refresh');
		}
    }
}
