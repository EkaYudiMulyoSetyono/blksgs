<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusanterbuka extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('mjurusan');
		$this->load->model('mjurusanterbuka');
		if ($this->session->userdata('username') == null) {
			redirect("");
		}
	}

	public function index()
	{
		$this->mjurusanterbuka->cek();
		$data['jurusanterbukas'] = $this->mjurusanterbuka->getall();
		$data['jurusans'] = $this->mjurusan->getall();
		$data['title'] = "Jurusan Terbuka";
		$data['page'] = 'admin/jurusanterbuka/list';
		$this->load->view('layout/base', $data);
	}

    public function tambah()
    {
        if ($this->mjurusanterbuka->add()) {
			redirect('admin/jurusanterbuka','refresh');
		}
    }

	public function ubah($id)
    {
        if ($this->mjurusanterbuka->edit($id)) {
			redirect('admin/jurusanterbuka','refresh');
		}
    }

	public function hapus($id)
    {
        if ($this->mjurusanterbuka->delete($id)) {
			redirect('admin/jurusanterbuka','refresh');
		}
    }
}
