<?php

function sendmailuser($nama,$email, $content, $password, $tokenn, $button)
{

    return '<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title></title>
      <style type="text/css" rel="stylesheet" media="all">
          *:not(br):not(tr):not(html) {
              font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
              box-sizing: border-box;
          }
  
          body {
              width: 100% !important;
              height: 100%;
              margin: 0;
              line-height: 1.4;
              background-color: #F2F4F6;
              color: #747e75;
              -webkit-text-size-adjust: none;
          }
  
          p,
          ul,
          ol,
          blockquote {
              line-height: 1.4;
              text-align: left;
          }
  
          a {
              color: #0a45c5;
          }
  
  
          /* Layout ------------------------------ */
  
          .email-wrapper {
              width: 100%;
              margin: 0;
              padding: 0;
              -premailer-width: 100%;
              -premailer-cellpadding: 0;
              -premailer-cellspacing: 0;
              background-color: #16e004;
              /* color header */
          }
  
          .email-content {
              width: 100%;
              margin: 0;
              padding: 0;
              -premailer-width: 100%;
              -premailer-cellpadding: 0;
              -premailer-cellspacing: 0;
          }
  
          /* Masthead ----------------------- */
  
          .email-masthead {
              padding: 25px 0;
              text-align: center;
          }
  
          .email-masthead_logo {
              width: 94px;
          }
  
          .email-masthead_name {
              font-size: 16px;
              font-weight: bold;
              color: #000000;
              text-decoration: none;
              /* text-shadow: 0 1px 0 rgb(196, 135, 4); */
          }
  
          /* Body ------------------------------ */
  
          .email-body {
              width: 100%;
              margin: 0;
              padding: 0;
              -premailer-width: 100%;
              -premailer-cellpadding: 0;
              -premailer-cellspacing: 0;
              border-top: 1px solid #EDEFF2;
              border-bottom: 1px solid #EDEFF2;
              background-color: #FFFFFF;
          }
  
          .email-body_inner {
              width: 570px;
              margin: 0 auto;
              padding: 0;
              -premailer-width: 570px;
              -premailer-cellpadding: 0;
              -premailer-cellspacing: 0;
              background-color: #FFFFFF;
          }
  
          .email-footer {
              width: 570px;
              margin: 0 auto;
              padding: 0;
              -premailer-width: 570px;
              -premailer-cellpadding: 0;
              -premailer-cellspacing: 0;
              text-align: center;
          }
  
          .email-footer p {
              color: #000000;
          }
  
          .body-action {
              width: 100%;
              margin: 30px auto;
              padding: 0;
              -premailer-width: 100%;
              -premailer-cellpadding: 0;
              -premailer-cellspacing: 0;
          }
  
          .details td {
              padding: 5px;
              border: 1px solid #f2f4f6;
          }
  
          .body-sub {
              margin-top: 25px;
              padding-top: 25px;
              border-top: 1px solid #EDEFF2;
          }
  
          .content-cell {
              padding: 35px;
          }
  
          .preheader {
              display: none !important;
              visibility: hidden;
              mso-hide: all;
              font-size: 1px;
              line-height: 1px;
              max-height: 0;
              max-width: 0;
              opacity: 0;
              overflow: hidden;
          }
  
  
  
  
          .align-right {
              text-align: right;
          }
  
          .align-left {
              text-align: left;
          }
  
          .align-center {
              text-align: center;
          }
  
          /*Media Queries ------------------------------ */
  
          @media only screen and (max-width: 600px) {
  
              .email-body_inner,
              .email-footer {
                  width: 100% !important;
              }
          }
  
          @media only screen and (max-width: 500px) {
              .button {
                  width: 100% !important;
              }
          }
  
          /* Buttons ------------------------------ */
  
          .button {
              background-color: #3869D4;
              border-top: 10px solid #3869D4;
              border-right: 18px solid #3869D4;
              border-bottom: 10px solid #3869D4;
              border-left: 18px solid #3869D4;
              display: inline-block;
              color: #FFF;
              text-decoration: none;
              border-radius: 3px;
              box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
              -webkit-text-size-adjust: none;
          }
  
          .button--green {
              background-color: #22BC66;
              border-top: 10px solid #22BC66;
              border-right: 18px solid #22BC66;
              border-bottom: 10px solid #22BC66;
              border-left: 18px solid #22BC66;
          }
  
  
          h1 {
              margin-top: 0;
              color: #2F3133;
              font-size: 19px;
              font-weight: bold;
              text-align: left;
          }
  
          h2 {
              margin-top: 0;
              color: #2F3133;
              font-size: 16px;
              font-weight: bold;
              text-align: left;
          }
  
          h3 {
              margin-top: 0;
              color: #2F3133;
              font-size: 14px;
              font-weight: bold;
              text-align: left;
          }
  
          p {
              margin-top: 0;
              color: #74787E;
              font-size: 16px;
              line-height: 1.5em;
              text-align: left;
          }
  
          p.sub {
              font-size: 12px;
          }
  
          p.center {
              text-align: center;
          }
      </style>
  </head>
  
  <body>
      <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0">
          <tr>
              <td align="center">
                  <table class="email-content" width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                          <td class="email-masthead">
                              <a href="#" class="email-masthead_name">
                                  BSPID
                              </a>
                          </td>
                      </tr>
                      <!-- Email Body -->
                      <tr>
                          <td class="email-body" width="100%" cellpadding="0" cellspacing="0">
                              <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">
                                  <!-- Body content -->
                                  <tr>
                                      <td class="content-cell">
                                          Kepada YTH
  
                                          <h1>' . $nama . '</h1>
                                          <p>
                                              Terimakasih Saudara/i sudah melakukan ' . $content . '.
                                              Berikut kami sampaikan bahwa ' . $content . ' yang Anda lakukan telah berhasil
                                          </p>
                                          <p>
                                              Berikut adalah Username & Password akun Anda :
                                          </p>
                                          <!-- Action -->
                                          <table class="body-action" align="left" width="100%" cellpadding="0"
                                              cellspacing="0">
                                              <tr>
                                                  <td align="center">
                                                      <table class="details" width="100%" border="0" cellspacing="0"
                                                          cellpadding="0">
                                                          <tr>
                                                              <td><b>Name</b></td>
                                                              <td><b>' . $nama . '</b></td>
                                                          </tr>
                                                          <tr>
                                                              <td><b>UserName</b></td>
                                                              <td><b>' . $email . '</b></td>
                                                          </tr>
                                                          <tr>
                                                              <td><b>Password</b></td>
                                                              <td><b>' . $password . '</b></td>
                                                          </tr>
                                                      </table>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td align="center">
                                                      <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                                          style="padding-top: 30px;">
                                                          <tr>
                                                              <td align="center">
                                                                  <table border="0" cellspacing="0" cellpadding="0">
                                                                      <tr>
                                                                          <td>
                                                                              <a href="https://#/changepswd?key=' . $tokenn . '" class="button button--green"
                                                                                  target="https://#/changepswd?key=' . $tokenn . '">' . $button . '</a>
                                                                          </td>
                                                                      </tr>
                                                                  </table>
                                                              </td>
                                                          </tr>
                                                      </table>
                                                  </td>
                                              </tr>
                                          </table>
                                          <p> Selalu jaga kerahasiaan username dan password anda. <br>
                                              Demikian, Terimakasih. <br>
                                              <br>
                                              Hormat kami,<br>
                                              Bank Sampah Pintar</p> <br>
                                          <p>
                                              E-mail ini dibuat secara otomatis, mohon tidak membalas. Jika butuh bantuan,
                                              dapat menyampikan melalui
                                              <a href="https://api.whatsapp.com/send?phone=6281290908320"> Chat
                                                  Whatsapp</a></p>
                                      </td>
                                  </tr>
  
                              </table>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0">
                                  <tr>
                                      <td class="content-cell" align="center">
                                          <p class="sub align-center">&copy; By IT Miga. All rights reserved.</p>
                                      </td>
                                  </tr>
                              </table>
                          </td>
                      </tr>
                  </table>
              </td>
          </tr>
      </table>
  </body>
  
  </html>';
}
