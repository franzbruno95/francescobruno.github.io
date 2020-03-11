<?php 
    if(isset(%_POST['submit']))
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "francesco.bruno@francesco-bruno.com";
    $headers =  "From: ".$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    if(mail($mailTo, $subject, $txt, $headers)){
        echo "<h1>sent Successfully!"." ".$name.", I will contact you shortly!<h1>";
    }
    else{
        echo "Somenthing went reong!";
    }
    header ("Location: index.html");
    
?>
