<?php

/* use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '465';
            $mail->isHTML();
            $mail->Username = 'tushartdm117@gmail.com';
            $mail->Password = 'fcb@rc@M$N321';
            $mail->SetFrom('no-reply@howcode.org');
            $mail->Subject = 'jsdn';
            $mail->Body = 'test';
            $mail->AddAddress('tdmbarca91011@gmail.com'); //recepient.

            $mail->Send();
 */
            //google blocks this shit!!

            $to = "tdmbarca91011.com";
            $subject = "My subject";
            $txt = "Hello world!";
            $headers = "From: tushartdm117@gmail.com" . "\r\n" .
            "CC: somebodyelse@example.com";
            
            mail($to,$subject,$txt,$headers);
?>