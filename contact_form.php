<?php
if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "e.lipovanu@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ". $name. ".\n\n" .$message;

  mail($mailTo,$subject, $txt, $headers);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
