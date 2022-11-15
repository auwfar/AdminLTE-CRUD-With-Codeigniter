<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		$session = $this->session->userdata('status');


		if ($session == '') {
			$this->load->view('login');
		} else {
			redirect('Home');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('txt_email', 'Email', 'required');
		$this->form_validation->set_rules('txt_password', 'Password', 'required');
		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['txt_email']);
			$pass = trim($_POST['txt_password']);
			$data = $this->M_auth->login($username);
			if (!password_verify($pass, $data->field_password) == true) {
				$this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
				redirect('Auth');
			} else {
				$session = [
					'userdata' => $data,
					'status' => "Loged in",
					'logged_in' => TRUE
				];
				$this->session->set_userdata($session);
				redirect('Home');
			}
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('Auth');
		}
	}

	public function register()
	{
		$data['userdata'] 	= "1";
		$data['page'] 		= "register";
		$data['judul'] 		= "Data Posisi";
		$data['deskripsi'] 	= "Manage Data Posisi";
		$this->template->views('register', $data);
	}



	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */