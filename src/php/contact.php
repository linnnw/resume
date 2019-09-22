<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # FIX: Replace this email with recipient email
        $mail_to = "linmichael27@gmail.com";

        # Sender Data
        $subject = trim($_POST["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $message = trim($_POST["message"]);

        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($subject) OR empty($message)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }

        # Mail Content
        $content = "Name: $name\r\n";
        $content .= "Email: $email\r\n";
        $content .= "Phone: $phone\r\n";
        $content .= "Message:\n$message\r\n";

        # email headers.
        // $headers = "From: $name &lt;$email&gt;";
        // $header = 'From: $email' . '\r\n' .
        // 'Reply-To: <$email>';
        $headers .= "Reply-To: $name <$email>\r\n";
        $headers .= "Return-Path: $name <$email>\r\n";
        $headers .= "From: $name - A Star Driving School Website<$email>\r\n";
        // $headers .= "Organization: A Star Driving School\r\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/plain; charset=iso 8859-1";
        // $headers .= "X-Priority: 3\r\n";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }

        } else {
            # Not a POST request, set a 403 (forbidden) response code.
            http_response_code(403);
            echo "There was a problem with your submission, please try again.";
        }
?>