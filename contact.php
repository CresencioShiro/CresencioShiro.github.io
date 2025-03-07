<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Send email using PHPMailer or mail() function
    // For example:
    mail('anjelikaalcoseba@icloud.com', $subject, $message, 'krisshiro122@gmail.com' . $email);

    echo 'Message sent successfully!';
?>