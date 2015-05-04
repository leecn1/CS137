<?php
$dealMovie = $_POST['deals'];
$qDeal = (is_numeric($_POST['qDeal']) ? (int)$_POST['qDeal'] : 0);
$rareMovie = $_POST['rareMovie'];
$qRare = (is_numeric($_POST['qRare']) ? (int)$_POST['qRare'] : 0);
$newHero = $_POST['Hero'];
$newInter = $_POST['Inter'];
$newWoods = $_POST['Woods'];
$qNew = (is_numeric($_POST['qNew']) ? (int)$_POST['qNew'] : 0);
$qNew1 = (is_numeric($_POST['qNew1']) ? (int)$_POST['qNew1'] : 0);
$qNew2 = (is_numeric($_POST['qNew2']) ? (int)$_POST['qNew2'] : 0);
$exempt = $_POST['tax'];
$email = $_POST['email'];

if($email != "")
{
  $msg = "You bought:\r\n";
  if($qDeal != 0)
  {
    $msg .= "\r\nTitle: " . $dealMovie . "\r\nQuantity: " . $qDeal . "\r\nPrice: " . round($qDeal*10.99,2) . "\r\n";
  }
  if($qRare != 0)
  {
    $msg .= "\r\nTitle: " . $rareMovie . "\r\nQuantity: " . $qRare . "\r\nPrice: " . round($qRare*14.99,2) . "\r\n";
  }
  if($qNew != 0 && $newHero != "")
  {
    $msg .= "\r\nTitle: Big Hero 6" . "\r\nQuantity: " . $qNew . "\r\nPrice: " . round($qNew*11.99,2) . "\r\n";
  }
  if($qNew1 != 0 && $newInter != "")
  {
    $msg .= "\r\nTitle: Interstellar" . "\r\nQuantity: " . $qNew1 . "\r\nPrice: " . round($qNew1*11.99,2) . "\r\n";
  }
  if($qNew2 != 0 && $newWoods != "")
  {
    $msg .= "\r\nTitle: Into the Woods" . "\r\nQuantity: " . $qNew2 . "\r\nPrice: " . round($qNew2*11.99,2) . "\r\n";
  }

  $subTotal = round(($qDeal * 10.99) + ($qRare * 14.99) + ($qNew * 11.99) + ($qNew1 * 11.99) + ($qNew2 * 11.99),2);
  $msg .= "\r\nReceipt: \r\nSubtotal: " . $subTotal;
  if($exempt == "exempt")
  {
    $msg .= "\r\nSales Tax %: 0";
    $msg .= "\r\nTotal Tax: 0.00";
    $msg .= "\r\nTotal Price: " . $subTotal;
  }
  else
  {
    $msg .= "\r\nSales Tax %: 8.25";
    $totalTax = round($subTotal * 0.0825,2);
    $msg .= "\r\nTotal Tax: " . $totalTax;
    $totalPrice = round($subTotal + totalTax,2);
    $msg .= "\r\nTotal Price: " . $totalPrice;
  }
  $emailSubject = "Thank you for your purchase.";
  mail($email, $emailSubject, $msg);
  mail("goodbyeturtle@live.com", $email . " bought DVDs", $msg);

  $file = "data/bought.txt";
  $contents = file_get_contents($file);
  $contents .= "\nUser: " . $email . "\n" . $msg . "\n";
  file_put_contents("data/bought.txt", $contents);
  header('Location: home.php');
}
else
{
  header('Location: cart.php');
}
?>
