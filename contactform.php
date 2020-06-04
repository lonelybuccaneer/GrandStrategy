<?php

if (isset($_POST ['Submit'])) {
    $name = $_POST ['name'];
    $subject = $_POST ['subjectheading'];
    $mailfrom = $_POST ['email'];
    $message = $_POST ['subject'];
    
    $mailTo = "jeremyjwalker@protonmail.com";
    $headers = "From: Grand Strategy".$mailfrom
    $txt ="You have received an email from ".$name.".\n\n".$message;
    
    mail($mailto, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}



