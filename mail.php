<?php
//get data from form  
$name = $_POST['NAME'];
$email= $_POST['EMAIL'];
$number = $_POST['CONTACT NO']
$message= $_POST['MESSAGE'];
$to = "hemanthkumar4556@gmail.com";
$subject = "Mail From website";
$txt ="NAME = ". $name . "\r\n  EMAIL = " . $email . "\r\n MESSAGE =" . $message . "\r\n CONTACT NO =" . $number;
$headers = "From: noreply@https://hemanth4556.github.io/personal-portfolio/" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
