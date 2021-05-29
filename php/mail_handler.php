<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$Mobile= $_POST['phone'];
$message= $_POST['msg'];
$to = "pritamrauniyar.np@gmail.com";
$subject = "New User Contact Request";
$txt ="First Name = ". $firstname .  " Last Name =".$lastname."    \r\n    Email = " . $email . "\r\n  Mobile Number = ". $Mobile . "\r\n  Message =" . $message;
$headers = "From: support@sanjivaneesaccosjnk.com.np" . "\r\n" .
"CC: support@sanjivaneesaccosjnk.com.np";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location: index.html");
?>