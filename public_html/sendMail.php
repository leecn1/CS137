<?php
$firstName = $_POST['firstN'];
$lastName = $_POST['lastN'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// build email content
$emailSubject = "Thank you for your feedback.";
$mailContent = "Thank you for submitting feedback " . $firstName . " " . $lastName . ".";

//send mail
mail($email, $emailSubject, $mailContent);
mail("goodbyeturtle@live.com", $firstName . " " . $lastName . " submitted feedback", $comment);
header('Location: home.php');
?>
