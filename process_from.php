<?php
if (isset($_POST['contactName']) && isset($_POST['contactEmail']) && isset($_POST['contactMessage'])) {
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $subject = $_POST['contactSubject'];
    $message = $_POST['contactMessage'];

    $to = 'zaxhunt@gmail.com'; // Replace with your email address
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your message. We will be in touch soon.';
    } else {
        echo 'There was a problem sending your message. Please try again.';
    }
}
?>
