<?php
	/**
	 * 
	 */
	class Dashboard extends CI_Controller
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

		public function doupdate() {
			
		  $id = $this->input->post('id_pelamar');

			$data = array('notelp_pelamar'	=> $this->input->post('notelp_pelamar'),
						'nama_pelamar'	=> $this->input->post('nama_pelamar'),
						'kewarganegaraan'	=> $this->input->post('kewarganegaraan'),
						'alamat_pelamar'	=> $this->input->post('alamat_pelamar'),
						'alamat_domisili'	=> $this->input->post('alamat_domisili'),
						'umur_pelamar'	=> $this->input->post('umur_pelamar'),
						'status_pelamar'	=> $this->input->post('status_pelamar'),
						'tgl_lahir_pelamar'	=> $this->input->post('tgl_lahir_pelamar'),
						'jenis_kelamin_pelamar'	=> $this->input->post('jenis_kelamin_pelamar'),
						'tinggi_badan'	=> $this->input->post('tinggi_badan'),
						'berat_badan'	=> $this->input->post('berat_badan'),
						'id_agama'	=> $this->input->post('id_agama'),
						'gol_darah'	=> $this->input->post('gol_darah'),
						  'hobi'	=> $this->input->post('hobi'));

			$this->Model_pelamar->updateBiodataPelamar($id, $data);

			$this->session->set_flashdata('sukses', 'Data Berhasil di Update');

			redirect(site_url('pelamar/dashboard'));


		
	}
	

		

		public function updateAva() {
		//CONFIGURASI UPLOAD IMAGE
		$config['upload_path'] 		= './assets/upload/pelamar/img';
		$config['allowed_types'] 	= 'jpg|png|svg';
		$config['max_size'] 		= '12000';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		//PROSES UPLOAD IMAGE
		if(! $this->upload->do_upload('avapelamar')) {
			$data['errors'] 	= $this->upload->display_errors();
			print_r($data);
		} else {

			$upload_data = array('uploads' =>$this->upload->data());

			$data = array('pas_foto' => $upload_data['uploads']['file_name']);

			$id_pelamar = $this->session->userdata('id_pelamar');

			$this->Model_pelamar->updateDataPelamar($id_pelamar, $data);

			redirect(site_url('pelamar/dashboard'));

		}
	}

	public function updateAvaFull() {
		//CONFIGURASI UPLOAD IMAGE
		$config['upload_path'] 		= './assets/upload/pelamar/img/full';
		$config['allowed_types'] 	= 'jpg|png|svg';
		$config['max_size'] 		= '12000';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		//PROSES UPLOAD IMAGE
		if(! $this->upload->do_upload('avapetinju')) {
			$data['errors'] 	= $this->upload->display_errors();
			print_r($data);
		} else {

			$upload_data = array('uploads' =>$this->upload->data());

			$data = array('foto_full_badan' => $upload_data['uploads']['file_name']);

			$id_pelamar = $this->session->userdata('id_pelamar');

			$this->Model_pelamar->updateDataPelamar($id_pelamar, $data);

			redirect(site_url('pelamar/dashboard'));

		}
	}

	}
?>