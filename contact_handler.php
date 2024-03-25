<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'contact@toiletgamestudies.org';
    $subject = $_POST['subject'];
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if (mail($to,$subject,$body)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, please try again!</p>';
    }
?>