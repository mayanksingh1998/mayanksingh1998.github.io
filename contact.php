<?php

if (isset($_POST['sumit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailfrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailto = "2016ucs0024@iitjammu.ac.in";
  $headers = "from: ".$mailfrom;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($mailto, $subject, $txt, $headers);
  header("location: index.html?mailsend");