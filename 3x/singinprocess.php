<?php

require "Database.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$pwd = $_POST["p"];
$gender = $_POST["g"];
$mobile = $_POST["m"];

if (empty($fname)) {
    echo ("enter your frist name -require");
} else if (empty($lname)) {
    echo ("enter your last name -require");
} else if (empty($email)) {
    echo ("enter your email -require");
} else if (empty($pwd)) {
    echo ("enter your password -require");
} else if (empty($gender)) {
    echo ("enter your gender -require");
} else if (empty($mobile)) {
    echo ("enter your mobile -require");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "' OR `mobile`='" . $mobile . "'");
    $n = $rs->num_rows;

    if ($n > 0) {
        echo ("user alresy exist");
    } else {
        Database::iud("INSERT INTO `user`(`fname`,`lname`,`email`,`pwd`,`gender_id`,`mobile`) VALUES ('" . $fname . "','" . $lname . "','" . $email . "','" . $pwd . "','" . $gender . "','" . $mobile . "')");

        echo ("success");
    }
}

// $conn = new mysqli("localhost", "root", "@Tharu0929", "myshop", "3306");



// $conn->query($q);
