<?php
    $mailto = $_POST['email'];
    $mailSub = $_POST['subject'];
    $mailMsg = $_POST['message'];

   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;//for debugging give 1
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "aashuk19990@gmail.com";//ADD your gmail id
   $mail ->Password = "ashuprince98";//ADD Password
   $mail ->SetFrom("aashuk19990@gmail.com");//ADD same gmailid given above
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
       header("Location: catering_page.php?Mail_Sent");
   }





   

