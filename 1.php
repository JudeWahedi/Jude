<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = htmlspecialchars($_POST['message']); // Sanitizing user input
    $to = "your-email@example.com"; // Replace with your email
    $subject = "Message from Aisha's Birthday Site";
    $body = "Message: $message";
    $headers = "From: no-reply@example.com"; // Replace with your email

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
