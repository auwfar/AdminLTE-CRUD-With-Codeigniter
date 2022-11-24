<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mail extends CI_Controller
{

    function  __construct()
    {
        parent::__construct();
    }

    function send()
    {
        /* Load PHPMailer library */
        $this->load->library('PHPMailer');

        /* PHPMailer object */
        $mail = $this->phpmailer->load();

        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'mx.mailspace.id'; //sesuaikan sesuai nama domain hosting/server yang digunakan
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@miga.co.id'; // user email
        $mail->Password = 'gDSg8oHGOC3iB'; // password email
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('musaeri1807@gmail.com', 'CodexWorld');
        $mail->addReplyTo('musaeri1807@gmail.com', 'CodexWorld');

        /* Add a recipient */
        $mail->addAddress('musaeri1807@gmail.com');

        /* Add cc or bcc */
        $mail->addCC('musaeri1807@gmail.com');
        $mail->addBCC('musaeri1807@gmail.com');

        /* Email subject */
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';

        /* Set email format to HTML */
        $mail->isHTML(true);

        /* Email body content */
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
        <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;

        /* Send email */
        if (!$mail->send()) {
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Mail has been sent';
        }
    }
}
