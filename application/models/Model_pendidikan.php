<?php 

class Model_pendidikan extends CI_Model{
	
	public function insertPendidikan($data) {
		$this->db->insert('pendidikan', $data);

		if($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}

	//Fungsi ini di gunakan untuk mengambil data pelamar dengan syarat email dan password
	public function getLoginPelamar($email, $password) {
		$this->db->select('*');
		$this->db->from('pelamar');
		$this->db->where(array('email_pelamar' => $email, 'password_pelamar' => $password));

		$result = $this->db->get();

		return $result->row();
	}

	//Fungsi ini di gunakan untuk mendapatkan seluruh data yang terdapat pada table tbl_client
	public function getAllClient() {
		$this->db->select('*');
		$this->db->from('tbl_client');

		$result = $this->db->get();

		return $result->result();
	}

	public function getdataClient() {
		$this->db->select('*');
		$this->db->from('tbl_client');
		$this->db->where('tbl_client.id_client',$this->session->userdata('id_client'));
	
		$result = $this->db->get();

		return $result->result();
	}

	public function getClientById($id_client) {
		$this->db->select('*');
		$this->db->from('tbl_client');
		$this->db->where('id_client', $id_client);

		$result = $this->db->get();

		return $result->row();
	}

	// Fungsi Ini di gunakan untuk melakukan update data terhadap tabel tbl_client
	public function updateDataPelamar($id_pelamar, $data) {
		$this->db->where('id_pelamar', $id_pelamar);
		$this->db->update('pelamar', $data);
	}

	function getDetailDataPelamar($id_pelamar, $nama_pelamar) {
		$this->db->select('*');
		$this->db->from('pelamar');
		
		$this->db->where(array('pelamar.id_pelamar' 		=> $id_pelamar, 
							   'pelamar.nama_pelamar' 	=> $nama_pelamar));

		$result = $this->db->get();

		return $result->row();
	}

	public function updateBiodataPelamar($id, $data) {
		$this->db->where('id_pelamar', $id);
		$this->db->update('pelamar', $data);

		if($this->db->affected_rows() > 0)
			return true;
		else
			return false;
	}
}
