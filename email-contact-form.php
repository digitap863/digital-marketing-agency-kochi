<?php 

$web = $_POST['web'];
$visitor_email = $_POST['email'];

$to = "new.tapclone@gmail.com";
$body = "";

$body .= "From: ".$visitor_email. "\r\n";
$body .= "Website: ".$web. "\r\n";

if(isset($_POST['web']) && $_POST['email'] !="") {

    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {                
            
        mail($to,$body,$body);
        echo "Mail Send Successfuly.";         

    } else {
        echo "Kindly fill valid details";
    }  

}

?>





  // if(IsInjected($visitor_email))
        // {
        // echo "Bad email value!";
        // exit;
        // }

// function IsInjected($str)
// {
//   $injections = array('(\n+)',
//               '(\r+)',
//               '(\t+)',
//               '(%0A+)',
//               '(%0D+)',
//               '(%08+)',
//               '(%09+)'
//               );
//   $inject = join('|', $injections);
//   $inject = "/$inject/i";
//   if(preg_match($inject,$str))
//     {
//     return true;
//   }
//   else
//     {
//     return false;
//   }
// }


