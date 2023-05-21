<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjurusan extends CI_Model {

	public function getall()
	{
		$result = $this->db->get('jurusan');
		return $result->result_array();
	}

    public function add()
    {
		$data = $this->input->post();
        if ($this->db->insert('jurusan', $data)){
			return true;
		}
		return false;
    }

	public function edit($id)
    {
		$data = $this->input->post();
		$this->db->where('id', $id);
        if ($this->db->update('jurusan', $data)){
			return true;
		}
		return false;
    }

	public function delete($id)
    {
		$this->db->where('id', $id);
        if ($this->db->delete('jurusan')){
			return true;
		}
		return false;
    }
}
