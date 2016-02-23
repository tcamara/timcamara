<?php
    $to = "tcamara21@gmail.com";
    $subject = "Contact Form";
    $from = "form@timcamara.com";
    $headers = "From: $from";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $question = $_POST['question'];

    $message = "
    Contact Form \n
    --------------------- \n
    Name: $name \n
    Email: $email \n
    Question: $question \n
    ";

    if(strlen($name) > 0 && strlen($email) > 0 && strlen($question) > 0){    
        mail($to, $subject, $message, $headers);
    }

?>
