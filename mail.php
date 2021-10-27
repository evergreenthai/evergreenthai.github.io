<?php


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo="guoyicong0904@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.html?mailsend");

}

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "guoyicong0904@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");


?>
