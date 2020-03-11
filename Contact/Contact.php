<?php 
if (isset($_post['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "francesco.bruno01@universitadipavia.com";
    $headers =  "From: ".$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
