<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = "new.tapclone@gmail.com";
$body = "";

$header .= "From: ".$name. "\r\n";
$header .= "Email: ".$email. "\r\n";
$body .= "Phone No: ".$phone. "\r\n";
$body .= "Message: ".$message. "\r\n";

if(isset($_POST['name']) && $_POST['email'] && $_POST['phone'] && $_POST['message'] !="") {

    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {                
            
        mail($to,$header,$header,$body,$body);
        echo "Mail Send Successfuly.";         

    } else {
        echo "Kindly fill valid details";
    }  

}


?>