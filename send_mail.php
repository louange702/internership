<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message_text = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'yourgmail@gmail.com'; // Your Gmail
        $mail->Password = 'your_app_password';   // Your app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('yourgmail@gmail.com', 'OVP Platform');
        $mail->addAddress('support@votingplatform.com', 'Support Team');

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Message from $name";
        $mail->Body    = "
            <h3>New Message Received</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message_text</p>
        ";

        $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message_text";

        $mail->send();
        header("Location: contact_form.php?status=" . urlencode("✅ Message sent successfully!"));
        exit;
    } catch (Exception $e) {
        header("Location: contact_form.php?status=" . urlencode("❌ Error: {$mail->ErrorInfo}"));
        exit;
    }
} else {
    header("Location: contact_form.php");
    exit;
}
