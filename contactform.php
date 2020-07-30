<?php

if (isset($POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];


    $mailTo = "shalomodozi@gmail.com";
    $headers = "From: ".$emailFrom;
    $text = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $text, $headers);
 header("Location: index.html?mailsend");


}