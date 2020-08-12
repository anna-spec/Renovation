<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$budget = $_POST['budget'];

$to = "somebody@example.com";
$subject = "Get Free Estimate";
$txt = "
    <div><label>Name: </label>".$name."</div>
    <div><label>Email: </label>".$email."</div>
    <div><label>Budget: </label>".$budget."</div>
";
$headers = "From: webmaster@example.com";

$sent = mail($to,$subject,$txt,$headers);
if($sent){
    $_SESSION['success'] = 'Message Sent';
    header('Location: index.php');
}
else{
    $_SESSION['error'] = 'Failed to sent message';
    header('Location: index.php');
}
