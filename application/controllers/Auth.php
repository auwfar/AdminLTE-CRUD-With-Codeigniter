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

		// var_dump($this->form_validation->set_rules());
		// $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('txt_email', 'Email', 'required');
		$this->form_validation->set_rules('txt_password', 'Password', 'required');


		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['txt_email']);
			$pass = trim($_POST['txt_password']);



			$data = $this->M_auth->login($username);
			// // var_dump($data->password);
			// // die();
			// if (!password_verify($pass, $data->password) == true) {
			// 	echo "Benar";
			// } else {

			// 	echo "salah";
			// }
			// die();
			if (!password_verify($pass, $data->field_password) == true) {
			// if ($data == false) {
				$this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
				redirect('Auth');
			} else {	
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				$this->session->set_userdata($session);
				// var_dump	($session);
				// die();
				redirect('Home');
			}
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('Auth');
		}
	}


	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */