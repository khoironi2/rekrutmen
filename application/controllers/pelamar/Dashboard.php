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
		$data ['pelamar'] = $this->Model_pelamar->getDetailDataPelamar($id_pelamar, $nama_pelamar);
			$this->template->load('template2','pelamar/Dashboard', $data);
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
	}
?>