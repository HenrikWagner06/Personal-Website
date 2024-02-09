<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["text"];
    $subject = $_POST["subject"];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;  // Enable verbose debug output (set to 2 for detailed debug output)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'henrikwagner2006@gmail.com';  // Your SMTP username
        $mail->Password = 'umzb fqwc ykup pjei';  // Your SMTP password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom($email,$subject,  $name);
        $mail->addAddress('henrikwagner2006@gmail.com', $name);  // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Body = "Name: $name <br> Subject: $subject<br> Email: $email<br>Message: $message";

        // Send email
        $mail->send();
        http_response_code(200);
        echo '<script>alert("Message send!.")</script>';
    } catch (Exception $e) {
        http_response_code(500);
        echo '<script>alert("Message could not be sent. Please try again.")</script>';
    }
    Header('Location:contact.html');
}
?>