<?php
//get data from form  
$name = $_POST['visitor_name'];
$email= $_POST['visitor_email'];
$number= $_POST['visitor_phone'];
$message= $_POST['visitor_message'];
$to = "vkmishra152@gmail.com";
$subject = "Mail From Bhinder Travels";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile Number = ". $number . "\r\n Message =" . $message;
$headers = "From: noreply@bhindertravels.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>