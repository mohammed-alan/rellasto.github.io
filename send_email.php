<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "mohd.otmn@gmail.com"; // Replace with your email address
    $subject = "New message from $name";
    $headers = "From: $email";
    
    // You can add additional headers or modifications here if needed
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Error sending the message.";
    }
} else {
    echo "Method not allowed.";
}
?>
