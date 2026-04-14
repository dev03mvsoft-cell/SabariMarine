<?php
if(!defined('SECURE_ACCESS')) exit('Forbidden');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 0. Honeypot Check (Spambots will fill this)
    if (!empty($_POST['hp_field'])) {
        echo "<script>
            alert('Sending failed. Spam detected.');
            window.location.href = '$base_url/contact';
        </script>";
        exit;
    }

    // 1. reCAPTCHA v3 Verification
    $recaptcha_secret = 'YOUR_RECAPTCHA_SECRET_KEY';

    // STRICT CHECK: If keys are not configured, DO NOT SEND mail.
    if ($recaptcha_secret === 'YOUR_RECAPTCHA_SECRET_KEY') {
        echo "<script>
            alert('Message NOT sent. reCAPTCHA keys are missing in configuration. Please contact administrator.');
            window.location.href = '$base_url/contact';
        </script>";
        exit;
    }

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make the POST request to Google
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Check if reCAPTCHA was successful and score is high enough
    if (!$recaptcha->success || $recaptcha->score < 0.5) {
        echo "<script>
            alert('Message NOT sent. reCAPTCHA verification failed. Please try again.');
            window.location.href = '$base_url/contact';
        </script>";
        exit;
    }

    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"]));
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;              // Enable verbose debug output
        $mail->isSMTP();                                      // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                 // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = 'dev03.mvsoft@gmail.com';             // SMTP username
        $mail->Password   = 'rhgc lslb qfxx szen';    // !!! ENTER YOUR GOOGLE APP PASSWORD HERE !!!
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryption
        $mail->Port       = 587;                              // TCP port to connect to

        //Recipients
        $mail->setFrom('dev03.mvsoft@gmail.com', 'Sabari Marine Website');
        $mail->addAddress('dev03.mvsoft@gmail.com', 'Sabari Marine Sales');
        $mail->addAddress('dev03.mvsoft@gmail.com', 'Dev Admin'); // Also send copy to dev email
        $mail->addReplyTo($email, $name);

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "New Contact Inquiry from $name - $service";

        $bodyHtml = "
            <h2>New Inquiry from Website</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Service Needed:</strong> $service</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->Body    = $bodyHtml;
        $mail->AltBody = "Name: $name\nEmail: $email\nService: $service\nMessage: $message";

        $mail->send();

        // Success redirect or message
        echo "<script>
            alert('Thank you! Your message has been sent successfully.');
            window.location.href = '$base_url/contact';
        </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
