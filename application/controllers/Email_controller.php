<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email_controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    require APPPATH . 'libraries/phpmailer/src/Exception.php';
    require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
    require APPPATH . 'libraries/phpmailer/src/SMTP.php';
  }

  public function index()
  {

    $this->load->helper('form');
    $this->load->view('email_form');
  }
  public function send_mail()
  {
    //select * FROM userlogin Where email='emailuser' kemudian ambil data Password untuk dikirim ke email user
    $nama = $this->input->post('email');
    $tokenn = md5('musaeri1807@gmail.com');
    $tentangkami = '<p></p>';
    $alamat = '';
    // $alamat = ' <li><span class="text">Jln TB Badaruddin RT 01 RW 05 Kel Jatinegara Kaum Pulogadung</span></li>
    //             <li><span class="text">+62 8xxx xxxx xxxx</span></a></li>';
    $from = 'PT MSI';
    if ($this->input->post('pilih') == 'forgot') {
      $subject = 'Reset Password';
      $content = '<P><h3>Anda melakukan Reset Password<br>Klik link di bawah untuk merubah Password akun anda:</h3></P>';
      $button  = 'Ubah Sandi';
    } else {
      $subject = 'Account Verification';
      $content = '<P><h3>Anda telah melakukan registrasi Aplikasi<br>Klik link di bawah untuk mengaktifkan akun anda:</h3></P>';
      $button  = 'Aktifkan Akun';
    }


    // PHPMailer object
    $response = false;
    $mail = new PHPMailer();
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host     = 'mx.mailspace.id'; //sesuaikan sesuai nama domain hosting/server yang digunakan
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@miga.co.id'; // user email
    $mail->Password = 'gDSg8oHGOC3iB'; // password email
    $mail->SMTPSecure = 'ssl';
    $mail->Port     = 465;
    $mail->setFrom('noreply@miga.co.id', $from); // user email
    $mail->addReplyTo('', 'noreply'); //user email
    $mail->addAddress($this->input->post('email')); //email tujuan pengiriman email
    $mail->Subject = $subject; //subject email
    $mail->isHTML(true);
    $mail->Body = sendmailuser($nama, $content, $tokenn, $button, $tentangkami, $alamat);

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
