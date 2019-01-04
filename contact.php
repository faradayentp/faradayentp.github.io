<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

$support_address = "info@vyastravels.in"; //Your Company Email ID//\

$headers = "From: ".$email;
$headers2 = "From: ".$support_address;
$finalmessage = "
From:   $_POST[name]
email:  $_POST[email]
phone:  $_POST[phone]

Message:$_POST[message]
";
if ( $name == "" )
{
}
else if($email=="" && $phone==""){

}
else
{
   mail("$support_address","$finalmessage",$headers);

   // Your Auto Replay Message//
   mail("$email","Vyas Travels","Thankyou for contacting us !",$headers2);
   unset($name,$email,$url,$message);
   header('location: contact.html');
}
?>
