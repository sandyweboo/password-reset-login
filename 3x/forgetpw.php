<?php
require "Database.php";

require "mail/SMTP.php";
require "mail/PHPMailer.php";
require "mail/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET["e"])){
    $email = $_GET["e"];

    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."'");
    $n = $rs->num_rows;

  
    if($n == 1){
        $code = uniqid();
        Database::iud("UPDATE `user` SET `vcode` = '".$code."' WHERE `email` = '".$email."' ");
   
        $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sandyweboo@gmail.com';
            $mail->Password = 'vdhstyrodkhptngg';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('sandyweboo@gmail.com', 'Reset Password');
            $mail->addReplyTo('sandyweboo@gmail.com', 'Reset Password');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'eShop Forgot Password Verification Code';
            $bodyContent = '<h1 style="color:green">Your Verification code is '.$code.'</h1>';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Verification code sending failed';
            } else {
                echo 'Success';
            }
    }else{
        echo ("invalid email");
    }
}

?>