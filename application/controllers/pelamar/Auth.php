<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Auth extends CI_Controller
	{
		
		public function __construct() {
			parent:: __construct();
			
			$this->load->model('Model_pelamar');

			# code...
		}
		public function index(){
			$this->template->load('Template1','pelamar/V_login');
		}

		public function daftar(){
			$this->template->load('Template1','pelamar/V_daftar');
		}

		public function insertPelamar(){
			$this->form_validation->set_rules('nama_pelamar', 'Nama Lengkap', 'required',
									array('required' => 'Nama Lengkap Wajib di Isi'));
			$this->form_validation->set_rules('email_pelamar', 'Alamat Email', 'required',
									array('required' => 'Alamat Email Wajib di Isi'));
			$this->form_validation->set_rules('password_pelamar', 'Password', 'required',
									array('required' => 'Password Wajib di Isi'));

			if($this->form_validation->run() == FALSE){
				$this->daftar();
			} else {
				//memasukkan data ke tabel pelamar
				$nama_pelamar = $this->input->post('nama_pelamar');
				$email_pelamar = $this->input->post('email_pelamar');
				$password_pelamar = $this->input->post('password_pelamar');

				$datapelamar = array('nama_pelamar'	=> $this->input->post('nama_pelamar'),
									'email_pelamar'	=> $this->input->post('email_pelamar'),
									'password_pelamar'	=> $this->input->post('password_pelamar'));
				$this->Model_pelamar->insertPelamar($datapelamar);
				

			//	$this->sendEmailToPelamar($email_pelamar, $password_pelamar);

				

				echo "Joosss";
			}
			redirect('pelamar/Auth/LoginPelamar');
		}

		public function LoginPelamar(){
			$this->form_validation->set_rules('email_pelamar', 'E-mail pelamar', 'required|valid_email',
									array('required' 	=> 'E-mail pelamar Harus di Isi',
										  'valid_email'	=> 'E-mail Harus Valid'));
		$this->form_validation->set_rules('password_pelamar', 'password pelamar', 'required',
									array('required'	=> 'password Harus di Isi'));

		if($this->form_validation->run() ===  FALSE) {
			$this->index();
		} else {
			$email = $this->input->post('email_pelamar');
			$password = $this->input->post('password_pelamar');

			$datalogin = $this->Model_pelamar->getLoginPelamar($email, $password);

			if($datalogin->status_pelamar == "nonaktif") {
				$this->session->set_flashdata('mdd', 'User ini telah di non-aktifkan. Harap menghubungi CS/Admin untuk pengaktifan kembali akun');
				redirect(site_url('pelamar/Auth'));
				die();
			}

			if(count($datalogin) > 0) {
				$datasess = array('id_pelamar' 		=> $datalogin->id_pelamar, 
								  'nama_pelamar' 	=> $datalogin->nama_pelamar,
								  'email_pelamar' 	=> $datalogin->email_pelamar,  
								  'logged_in' => TRUE);

				$this->session->set_userdata($datasess);

				redirect(site_url('pelamar/dashboard'));
			} else {
				$this->session->set_flashdata('mdd', 'E-mail dan Password Pelamar Salah');
				redirect(site_url('pelamar/Auth'));
			}
		}
		}

		public function logOut(){
			$this->session->sess_destroy();
			$this->session->set_flashdata('mdd','Anda Berhasil Logout');
			redirect(site_url('main'));
		}


		function sendEmailToPelamar($email_pelamar, $password_pelamar) {
		$config = Array(  
		    'protocol' => 'smtp',  
		    'smtp_host' => 'ssl://smtp.googlemail.com',  
		    'smtp_port' => 465,  
		    'smtp_user' => 'coursedotcom@gmail.com',   
		    'smtp_pass' => 'm0hsoleh',   
		    'mailtype' => 'html',   
		    'charset' => 'iso-8859-1'  
	   	);    

		$this->load->library('email', $config);  
		$this->email->set_newline("\r\n");  
		$this->email->from('coursedotcom@gmail.com', 'Admin Re:Code');   
		$this->email->to($email_pelamar);   
		$this->email->subject('Rekrutmen Account');   
		$this->email->message('Berikut Password Login anda:'. $password_pelamar);
	   
	   if (!$this->email->send()) {  
	    show_error($this->email->print_debugger());   
	   }else{  
	    echo 'Success to send email';   
	   }  
	}



	}
?>