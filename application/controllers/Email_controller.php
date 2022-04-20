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
    echo sendmail();
    $this->load->helper('form');
    $this->load->view('email_form');
  }
  public function send_mail()
  {

    // echo $this->input->post('pilih');
    // die();
    $nama = $this->input->post('email');
    $tokenn = md5('musaeri1807@gmail.com');
    $tentangkami = '<p></p>';
    $alamat = '';
    // $alamat = ' <li><span class="text">Jln TB Badaruddin RT 01 RW 05 Kel Jatinegara Kaum Pulogadung</span></li>
    //             <li><span class="text">+62 8xxx xxxx xxxx</span></a></li>';
    $from = 'Aplikasi Musaeri';
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
    $mail->Host     = 'mail.musaeri.my.id'; //sesuaikan sesuai nama domain hosting/server yang digunakan
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@musaeri.my.id'; // user email
    $mail->Password = '=Q@NO6s87iMd'; // password email
    $mail->SMTPSecure = 'ssl';
    $mail->Port     = 465;

    $mail->setFrom('noreply@musaeri.my.id', $from); // user email
    $mail->addReplyTo('', 'noreply'); //user email

    // Add a recipient
    // $mail->addAddress('musaeri1807@gmail.com'); //email tujuan pengiriman email

    // Add a recipient
    $mail->addAddress($this->input->post('email')); //email tujuan pengiriman email
    // Email subject
    $mail->Subject = $subject; //subject email

    // Set email format to HTML
    $mail->isHTML(true);

    // Email body content
    $mailContent =

      '<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="x-apple-disable-message-reformatting">  
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">  
        
        <style>
    
          
            html,
    body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
        background: #f1f1f1;
    }
    
    
    * {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    
    
    div[style*="margin: 16px 0"] {
        margin: 0 !important;
    }
    
    
    table,
    td {
        mso-table-lspace: 0pt !important;
        mso-table-rspace: 0pt !important;
    }
    
    
    table {
        border-spacing: 0 !important;
        border-collapse: collapse !important;
        table-layout: fixed !important;
        margin: 0 auto !important;
    }
    
    
        -ms-interpolation-mode:bicubic;
    }
    
    
    a {
        text-decoration: none;
    }
    
    
    *[x-apple-data-detectors],  
    .unstyle-auto-detected-links *,
    .aBn {
        border-bottom: 0 !important;
        cursor: default !important;
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }
    
    
    .a6S {
        display: none !important;
        opacity: 0.01 !important;
    }
    
    
    .im {
        color: inherit !important;
    }
    
    
    img.g-img + div {
        display: none !important;
    }
    
    
    @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
        u ~ div .email-container {
            min-width: 320px !important;
        }
    }
    
    @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
        u ~ div .email-container {
            min-width: 375px !important;
        }
    }
    
    @media only screen and (min-device-width: 414px) {
        u ~ div .email-container {
            min-width: 414px !important;
        }
    }
    
    
        </style>
    
    
        <style>
    
          .primary{
      background: #17bebb;
    }
    .bg_white{
      background: #ffffff;
    }
    .bg_light{
      background: #f7fafa;
    }
    .bg_black{
      background: #000000;
    }
    .bg_dark{
      background: rgba(0,0,0,.8);
    }
    .email-section{
      padding:2.5em;
    }
    
    
    .btn{
      padding: 10px 15px;
      display: inline-block;
    }
    .btn.btn-primary{
      border-radius: 5px;
      background: #17bebb;
      color: #ffffff;
    }
    .btn.btn-white{
      border-radius: 5px;
      background: #ffffff;
      color: #000000;
    }
    .btn.btn-white-outline{
      border-radius: 5px;
      background: transparent;
      border: 1px solid #fff;
      color: #fff;
    }
    .btn.btn-black-outline{
      border-radius: 0px;
      background: transparent;
      border: 2px solid #000;
      color: #000;
      font-weight: 700;
    }
    .btn-custom{
      color: rgba(0,0,0,.3);
      text-decoration: underline;
    }
    
    h1,h2,h3,h4,h5,h6{
      font-family: "Poppins", sans-serif;
      color: #000000;
      margin-top: 0;
      font-weight: 400;
    }
    
    body{
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      font-size: 15px;
      line-height: 1.8;
      color: rgba(0,0,0,.4);
    }
    
    a{
      color: #17bebb;
    }
    
    table{
    }
    
    
    .logo h1{
      margin: 0;
    }
    .logo h1 a{
      color: #17bebb;
      font-size: 24px;
      font-weight: 700;
      font-family: "Poppins", sans-serif;
    }
    
    
    .hero{
      position: relative;
      z-index: 0;
    }
    
    .hero .text{
      color: rgba(0,0,0,.3);
    }
    .hero .text h2{
      color: #000;
      font-size: 34px;
      margin-bottom: 0;
      font-weight: 200;
      line-height: 1.4;
    }
    .hero .text h3{
      font-size: 24px;
      font-weight: 300;
    }
    .hero .text h2 span{
      font-weight: 600;
      color: #000;
    }
    
    .text-author{
      bordeR: 1px solid rgba(0,0,0,.05);
      max-width: 50%;
      margin: 0 auto;
      padding: 2em;
    }
    .text-author img{
      border-radius: 50%;
      padding-bottom: 20px;
    }
    .text-author h3{
      margin-bottom: 0;
    }
    ul.social{
      padding: 0;
    }
    ul.social li{
      display: inline-block;
      margin-right: 10px;
    }
    
    
    
    .footer{
      border-top: 1px solid rgba(0,0,0,.05);
      color: rgba(0,0,0,.5);
    }
    .footer .heading{
      color: #000;
      font-size: 20px;
    }
    .footer ul{
      margin: 0;
      padding: 0;
    }
    .footer ul li{
      list-style: none;
      margin-bottom: 10px;
    }
    .footer ul li a{
      color: rgba(0,0,0,1);
    }
    
    
    @media screen and (max-width: 500px) {
    
    
    }
    
    
        </style>
    
    
    </head>
    
    <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
      <center style="width: 100%; background-color: #f1f1f1;">
        <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
          &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    
        </div>
        <img src="https://nyimasantam.my.id/image/email.png"  width="100" >
        <div style="max-width: 600px; margin: 0 auto;" class="email-container">
          
          <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
              <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                 
                  <tr>
                    <td class="logo" style="text-align: center;">                      
                      <h1 class="a">Selamat...! </h1>
                      <h2>' . $nama . '</h2> 
                      ' . $content . '                      
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td valign="middle" class="hero bg_white" style="padding: 1em 0 4em 0;">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                    <td style="padding: 1 1.5em; text-align: center; padding-bottom: 0em;">
                     <a href="https://#/changepswd?key=' . $tokenn . '" class="btn btn-primary">' . $button . '</a>
                    </td>                  
                  </tr>
                  <tr>
                    <td style="text-align: center;">
                      <div>                   
                        <p><a href="https://#/changepswd?key=' . $tokenn . '" >https://#/changepswd?key=' . $tokenn . '</a></p>
                      </div>
                    </td>
                  </tr>
                </table> 
                <center>              
              </td>
            </tr>
    
          </table>
          <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
              <td valign="middle" class="bg_light footer email-section">
                <table>
                  <tr>
                    <td valign="top" width="33.333%" style="padding-top: 20px;">
                      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                          <td style="text-align: left; padding-right: 10px;">
                            <h3 class="heading">Tentang Kami</h3>
                            ' . $tentangkami . '
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td valign="top" width="33.333%" style="padding-top: 20px;">
                      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                          <td style="text-align: left; padding-left: 5px; padding-right: 5px;">
                            <h3 class="heading">Info Alamat</h3>
                            <ul>
                              ' . $alamat . '
                            </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td valign="top" width="33.333%" style="padding-top: 20px;">
                      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                          <td style="text-align: left; padding-left: 10px;">
                            <h3 class="heading">Useful Links</h3>
                            <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About</a></li>
                              <li><a href="#">Services</a></li>
                              <li><a href="#">Work</a></li>
                            </ul>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <img src="#" width="4">
              </td>
            </tr>
            <tr>
              <td class="bg_light" style="text-align: center;">
                <p>Anda tidak perlu membalas pesan ini karena pesan ini di-generate secara otomatis oleh sistem</p>
              </td>
            </tr>
          </table>
    
        </div>
      </center>
    </body>
    </html>'; // isi email
    $mail->Body = $mailContent;

    // Send email
    if (!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      // echo 'Message has been sent';
      redirect('Auth');
    }
  }
}
