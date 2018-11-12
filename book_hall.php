<?php
    include_once 'db.php';
    session_start();

    $uid = $_SESSION['uid'];

   /*  $sql = "SELECT * FROM `users` WHERE `user_id`='$uid'";
    $result = mysqli_query($conn,$sql);
    $row2 = mysqli_fetch_assoc($result); */

    $hid = $_SESSION['hid'];

        $ldate = mysqli_real_escape_string($conn,$_POST['ldate']);
        $sdate = mysqli_real_escape_string($conn,$_POST['sdate']);
    
        //echo $ldate." ".$sdate;

        if(empty($sdate) || empty($ldate)){
            header("Location: hall_page.php?booking=empty_fields");
            exit();
        }
        else{

            /* $mail = new PHPMailer();
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
            $mail->Send(); */

            $sql = "INSERT INTO hall_booking (`hall_id`,`user_id`,`s_date`,`e_date`) VALUES ('$hid','$uid','$sdate','$ldate')";
            $result = mysqli_query($conn,$sql);
            header("Location: hall_page.php?Booking_successfull");
        }
    
?>