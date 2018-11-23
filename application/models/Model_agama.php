<?php 

class Model_agama extends CI_Model {

	public function insertJenisTerapi($data) {
		$this->db->insert('tbl_jenisterapi', $data);

		if($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}

	public function getAllAgama() {
		$this->db->select('*');
		$this->db->from('agama');

		$result = $this->db->get();

		return $result->result();
	}

	public function getAgamaById($id_agama) {
		$this->db->select('*');
		$this->db->from('agama');
		$this->db->where('id_agama', $id_agama);

		$result = $this->db->get();

		return $result->row();
	}

	public function updateJenisTerapi($id, $data) {
		$this->db->where('id_jenisterapi', $id);
		$this->db->update('tbl_jenisterapi', $data);

		if($this->db->affected_rows() > 0)
			return true;
		else
			return false;
	}

	public function deleteJenisTerapi($id) {
		$this->db->where('id_jenisterapi', $id);
		$this->db->delete('tbl_jenisterapi');

		if($this->db->affected_rows() > 0)
			return true;
		else
			return false;
	}

}