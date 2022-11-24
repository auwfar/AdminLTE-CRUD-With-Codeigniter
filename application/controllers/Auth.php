<?php
defined('BASEPATH') or exit('No direct script access allowed');
//load email phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
		require APPPATH . 'third_party/PHPMailer/Exception.php';
		require APPPATH . 'third_party/PHPMailer/PHPMailer.php';
		require APPPATH . 'third_party/PHPMailer/SMTP.php';
	}

	public function index()
	{
		$session = $this->session->userdata('status');
		if ($session == '') {
			$data['judul'] = "Login";
			$this->load->view('login', $data);
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

	public function registrasi()
	{
		// $data['userdata'] 	= "1";
		// $data['page'] 		= "register";
		$data['judul'] 		= "Registrasi";
		$this->load->helper('form');
		$this->load->view('v_registrasi', $data);
	}

	public function lupapassword()
	{
		$data['judul'] 		= "Lupa Password";
		$this->load->helper('form');
		$this->load->view('v_lupaspassword', $data);
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}

	//Kirim Email
	public function send_mail()
	{
		//select * FROM userlogin Where email='emailuser' kemudian ambil data Password untuk dikirim ke email user

		$SQL = "SELECT * FROM tbluserlogin";
		$query = $this->db->query($SQL);
		$row = $query->row();

		echo $row->field_nama;

		// var_dump($row['field_nama']);
		die();

		$nama = 'Musaeri';
		$tokenn = md5('musaeri1807@gmail.com');
		$password = 'P@ssw0rd';
		$email = $this->input->post('email');

		$from = 'No Replay';
		if ($this->input->post('pilih') == 'forgot') {
			$subject = 'Reset Password';
			$content = 'Reset Password';
			$button  = 'Ubah Sandi';
		} else {
			$subject = 'Akun Verifikasi';
			$content = 'Pendaftaran';
			$button  = 'Aktifkan';
		}


		// PHPMailer object
		// $response = false;
		$mail = new PHPMailer();

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = SERVERMAIL; //sesuaikan sesuai nama domain hosting/server yang digunakan
		$mail->SMTPAuth = true;
		$mail->Username = EMAIL; // user email
		$mail->Password = PASSMAIL; // password email
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom(EMAIL, $from); // user email
		$mail->addReplyTo('', 'noreply'); //user email
		$mail->addAddress($this->input->post('email')); //email tujuan pengiriman email
		$mail->Subject = $subject; //subject email
		$mail->isHTML(true);
		$mail->Body = sendmailuser($nama, $email, $content, $password, $tokenn, $button);

		// Send email
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			$this->session->set_flashdata('message', 'Email Terkirim');
			redirect('Auth');
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */