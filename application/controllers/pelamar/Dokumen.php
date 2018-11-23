<?php
	/**
	 * 
	 */
	class Dokumen extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent:: __construct();
			if($this->session->userdata('nama_pelamar') != 'khoironi' &&
				$this->session->userdata('logged_in')	!= TRUE) {

				$this->session->set_flashdata('mdd', 'Anda harus login dulu');
			redirect(site_url('main'));
			}
		}

		public function index(){
		$id_pelamar = $this->session->userdata('id_pelamar');
		$nama_pelamar = $this->session->userdata('nama_pelamar');
		$data ['agama'] = $this->Model_agama->getAllAgama();
		$data ['pelamar'] = $this->Model_pelamar->getDetailDataPelamar($id_pelamar, $nama_pelamar);
			$this->template->load('template2','pelamar/Dashboard', $data);
		}

	}
?>