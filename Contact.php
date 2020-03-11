<?php 
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "francesco.bruno@francesco-bruno.com";
    $headers =  "From: ".$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
?>
