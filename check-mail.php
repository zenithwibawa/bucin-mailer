<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->Mailer = "smtp";

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "youremail@gmail.com";
  $mail->Password   = "yourpassword";

  $mail->IsHTML(true);
  $mail->AddAddress($_POST['email']);
  $mail->SetFrom("bucin-mailer@gmail.com", "Bucin Mailer");
  //$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
  //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
  $mail->Subject = "Bucin Mailer";
  $contents=array(
    "Fokus ke kamu aja, gak mau ke yang lain.",
    "Merasakan sebuah 'rasa' itu mudah, meninggalkan nya yang terlalu susah.",
    "Bila mencintaimu adalah sebuah ilusi, maka ijinkan aku berimajinasi selamanya.",
    "Jam tidurku hancur dirusak rindu.",
    "Cukup antartika aja yang jauh. Antarkita jangan.",
    "Berjanjilah untuk terus bersamaku sekarang, esok dan selamanya.",
    "Kalau aku udah sayang sama kamu, hujan badai pun aku tetap apelin kamu.",
    "Yang penting itu kebahagiaan kamu, aku sih gak penting.",
    "Kamu itu semangat aku, kalau nggak ada kamu aku nggak tahu gimana hidup aku.",
    "Kalo kamu bidadari, akan kupatahkan semua sayapmu. Karena aku gak rela kamu kembali ke surga.",
    "Aku memang pendiam, diam-diam aku jatuh cinta padamu.",
    "Lihat kebunku penuh dengan bunga, lihat dirimu aku berbunga-bunga."
  );
  $random_content = array_rand($contents);
  $content = $contents[$random_content];
  $mail->MsgHTML($content); 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Bucin Mailer</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto" style="margin-top: 100px;">
          <div class="card">
            <div class="card-body">
              <?php
                if($mail->Send()){
                  echo "<p class='login-box-msg text-center'>Yuk cek gmail kamu sekarang <b>(".$_POST['email'].")</b> biasanya masuk dibagian 'Spam'</p>";
                } else {
                  echo "<p class='login-box-msg'>Ada kesalahan pengiriman ke gmail <b>".$_POST['email']."</b></p>";
                  //var_dump($mail);
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>