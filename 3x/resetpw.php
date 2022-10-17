<?php

require "Database.php";

$email = $_POST["e2"];
$pw1 = $_POST["pw1"];
$pw2 = $_POST["pw2"];
$vcode = $_POST["vcode"];

if(empty($email)){
    echo("enter valid email");
}else if(empty($pw1)){
echo("enter new password");
}else if(empty($pw2)){
    echo("enter new password 2");
    }else if($pw1 != $pw2){
        echo("password does not match");
        }else if(empty($vcode)){
            echo("enter verification code");
            }else{
               $rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."' AND `vcode`='".$vcode."'");
               $n = $rs->num_rows;

               if($n == 1){
                Database::iud("UPDATE `user` SET `pwd` = '".$pw1."' WHERE `email` = '".$email."' ");
               }else{
                echo ("invalid verification code");
               }
            }

?>