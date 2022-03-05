<?php
$name = $_POST['name'];
$email = $_POST['emailaddress'];
$message = $_POST['message'];
$to = "three.two.run@gmail.com";
$subject = "test email from form submission"
$txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message;
$headers = "from: fyahflytest2@gmail.com" . "\r\n" . 
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("location:thankyou.html");
?>