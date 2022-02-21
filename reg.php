<?php
$First_name = $_POST['First_name '];
$Last_name = $_POST['Last_name '];
$Username = $_POST['Username'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$country= $_POST['country'];
$state = $_POST['state'];

$email_from = $visitor_email ;

$email_Subject = 'Registration Form Submission';

$email_body = "Name: $First_name, + $Last_name.\n".
                "Username: $Username.\n".
                "User email: $visitor_email\n".
                "Phone number: $number.\n";
                "Address: $address.\n";
                "Country: $country.\n";
                "State: $state.\n";


$to = 'xaphrone@gmail.com'

$headers= "From = $email_from \r\n";

$headers ="Reply=to:$visitor_email\r\n";

mail($to,$email_Subject,$email_body,$headers);


header("Location: contact-us.html");



?>