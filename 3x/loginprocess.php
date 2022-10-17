<?php
session_start();
require "Database.php";


$email = $_POST["e2"];
$pwd = $_POST["p2"];
$checked = $_POST["cm"];

if(empty($email)){
    echo("enter email");
}else if(empty($pwd)){
    echo("enter password");
}else{
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."' AND `pwd`='".$pwd."'");
$n = $rs->num_rows;
if($n == 1){
    echo("success");
    $d = $rs->fetch_assoc();

    $_SESSION["user"] = $d;
    if($checked == "true"){
        setcookie("email", $email, time() + (60 * 60 * 24 * 365));
        setcookie("password", $pwd, time() + (60 * 60 * 24 * 365));
    }else{
        setcookie("email","",-1);
        setcookie("password","",-1);
    }
}else {
    echo ("Invalid Username or Password");
}

}




?>