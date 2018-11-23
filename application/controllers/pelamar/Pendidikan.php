<?php
	/**
	 * 
	 */
	class Pendidikan extends CI_Controller
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
			$this->template->load('template2','pelamar/V_pendidikan', $data);
		}

		public function doTambah() {
		$this->form_validation->set_rules('jenjang', 'jenjang', 'required', 
									array('required' 	=> 'Jenis Terapi Harus di Input'));

		$this->form_validation->set_rules('tahun_lulus', 'tahun lulus', 'required|numeric',
									array('required'	=> 'Biaya Terapi Harus di Input',
										  'numeric'		=> 'Biaya Terapi Harus Angka'));

		if($this->form_validation->run() === FALSE) {
			$this->index();
		} else {
			$data = array('jenjang'	=> $this->input->post('jenjang'),
						  'tahun_lulus'	=> $this->input->post('tahun_lulus'),
						  'jurusan'	=> $this->input->post('jurusan'),
						  'no_seri_ijazah'	=> $this->input->post('no_seri_ijazah'),
						  'ipk'	=> $this->input->post('ipk'),
						  'status_lulus'	=> $this->input->post('status_lulus'),
						  'judul_skripsi'	=> $this->input->post('judul_skripsi'),
						  'id_pelamar'	=> $this->input->post('id_pelamar'));

			$this->Model_pendidikan->insertPendidikan($data);

			$this->session->set_flashdata('sukses', 'Data Berhasil di Tambah');

			redirect(site_url('pelamar/Pendidikan'));


		}
	}

	}
?>