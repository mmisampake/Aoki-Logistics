<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email address
    $to = "mpakeromeo@gmail.com";

    // Subject of the email
    $subject = "Contact Form Submission from $name";

    // Email body
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect or display a success message
        echo "<p>Thank you for contacting us! Your message has been sent.</p>";
    } else {
        // Display an error message
        echo "<p>Sorry, there was a problem sending your message. Please try again later.</p>";
    }
} else {
    // Redirect to the form page if accessed directly
    header("Location: index.html");
    exit();
}
?>