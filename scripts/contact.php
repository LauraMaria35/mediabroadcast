<?php
  $_vnaam = $_POST['firstName'];
  $_anaam = $_POST['lastName'];
  $_emailAddress = $_POST['emailAddress'];
  $_message = $_POST['message'];
    $formcontent="From: $_vnaam \n $_anaam \n Message: $_message";
    $recipient = "contact@lauraciocalau.com";
    $subject = "Contact Form";
    $mailheader = "From: $emailAddress \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "<h1>Mulțumim!</h1><br>
    <a href=index.html><img id=sageata src=img/sageata.png alt=sageata width=30px height=30px><span>&nbsp;</span>Înapoi</a>
    <br>
    <br>";

?>