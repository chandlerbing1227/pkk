<?php
/**
 * Simplified Mail Handler - Using Server's Built-in Mail
 */

// Safety: Only proceed if it's a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1. Sanitize and Validate Inputs
    $fname = filter_var(trim($_POST['fname'] ?? ''), FILTER_SANITIZE_STRING);
    $lname = filter_var(trim($_POST['lname'] ?? ''), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone = filter_var(trim($_POST['phone'] ?? ''), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message'] ?? ''), FILTER_SANITIZE_STRING);

    if (!$email) {
        echo "error: invalid email";
        exit;
    }

    $name = trim($fname . ' ' . $lname);

    // Prepare email content
    $to_admin = 'productionspkk@gmail.com';
    $subject_admin = "Website Inquiry: $name";

    $message_admin = "
    <html>
    <head><title>New Website Inquiry</title></head>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
    </body>
    </html>
    ";

    $headers_admin = "MIME-Version: 1.0" . "\r\n";
    $headers_admin .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers_admin .= "From: noreply@pkkproductions.com" . "\r\n";
    $headers_admin .= "Reply-To: $email" . "\r\n";

    // Send to admin
    $admin_sent = mail($to_admin, $subject_admin, $message_admin, $headers_admin);

    // Send auto-reply to user
    $subject_user = "We received your message - PKK Productions";
    $message_user = "
    <html>
    <body>
        <h2>Thank you for contacting us!</h2>
        <p>Dear $name,</p>
        <p>We have received your message and will get back to you shortly.</p>
        <p>Best regards,<br>PKK Productions Team</p>
    </body>
    </html>
    ";

    $headers_user = "MIME-Version: 1.0" . "\r\n";
    $headers_user .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers_user .= "From: PKK Productions <noreply@pkkproductions.com>" . "\r\n";

    $user_sent = mail($email, $subject_user, $message_user, $headers_user);

    // Update Leads CSV
    $csvFile = 'leads.csv';
    $data = [];
    $header = ["Name", "Email", "Phone", "Submissions"];
    $updated = false;

    $fp = fopen($csvFile, 'c+');
    if ($fp && flock($fp, LOCK_EX)) {
        while (($row = fgetcsv($fp)) !== FALSE) {
            if ($row[1] === $email && $row[2] === $phone) {
                $row[3] = (int) $row[3] + 1;
                $updated = true;
            }
            $data[] = $row;
        }

        if (!$updated) {
            if (empty($data))
                $data[] = $header;
            $data[] = [$name, $email, $phone, 1];
        }

        ftruncate($fp, 0);
        rewind($fp);
        foreach ($data as $fields) {
            fputcsv($fp, $fields);
        }
        fflush($fp);
        flock($fp, LOCK_UN);
        fclose($fp);
    }

    if ($admin_sent && $user_sent) {
        echo "success";
    } else {
        echo "error: Email could not be sent. Please contact us directly.";
    }

} else {
    echo "Direct access not allowed.";
}
?>