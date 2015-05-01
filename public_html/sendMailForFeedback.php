<?php
$firstName = $_POST['firstN'];
$lastName = $_POST['lastN'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// build email content
if($firstName != "" && $lastName != "" && $email != "" && $comment != "")
{
  $emailSubject = "Thank you for your feedback.";
  $mailContent = "Thank you for submitting feedback " . $firstName . " " . $lastName . ".";
  
  //send mail
  mail($email, $emailSubject, $mailContent);
  mail("ryanhuey10@gmail.com", $firstName . " " . $lastName . " submitted feedback", $comment);

  $file = "data/feedback.txt";
  $contents = file_get_contents($file);
  $contents .= "User: " . $email . "\nWrote: " . $comment . "\n";
  file_put_contents("data/feedback.txt", $contents);

  header('Location: home.php');
}
else
{
  header('Location: feedback.php');
}
?>
