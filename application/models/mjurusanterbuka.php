<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjurusanterbuka extends CI_Model {

	public function getall()
	{
		$result = $this->db->get('jurusan_terbuka');
		return $result->result_array();
	}

    public function add()
    {
		$data = $this->input->post();
        if ($this->db->insert('jurusan_terbuka', $data)){
			return true;
		}
		return false;
    }

	public function edit($id)
    {
		$data = $this->input->post();
		$this->db->where('id', $id);
        if ($this->db->update('jurusan_terbuka', $data)){
			return true;
		}
		return false;
    }

	public function delete($id)
    {
		$this->db->where('id', $id);
        if ($this->db->delete('jurusan_terbuka')){
			return true;
		}
		return false;
    }

	public function cek()
    {
		$result = $this->db->get('jurusan_terbuka')->result_array();
		foreach ($result as $row) {
			if (strtotime($row['tgl_selesai']) <= time()){
				$this->db->where('id', $row['id']);
				$this->db->update('jurusan_terbuka', array('status' => 0));
			}
		}
    }
}
