<?php
/**
 * Refined Mail Handler with Dual-Email Logic
 * Optimized for Security, Robustness, and Presentation
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Adjust paths based on your folder structure
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

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

    // 2. Load Email Templates
    $userTemplate = file_exists("emailtemplate.html") ? file_get_contents("emailtemplate.html") : "Thank you for contacting us, {{name}}!";
    $adminTemplate = file_exists("admin_template.html") ? file_get_contents("admin_template.html") : "New inquiry from {{name}}.\nMessage: {{message}}";

    // Prepare replacements
    $search = ['{{name}}', '{{email}}', '{{phone}}', '{{message}}'];
    $replace = [$name, $email, $phone, nl2br($message)];

    $user_body = str_replace($search, $replace, $userTemplate);
    $admin_body = str_replace($search, $replace, $adminTemplate);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'productionspkk@gmail.com';
        $mail->Password = 'kafqafirkkqyawxa'; // App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('productionspkk@gmail.com', 'PKK Productions');
        $mail->isHTML(true);

        // --- EMAIL TO USER (Automated Confirmation) ---
        $mail->addAddress($email, $name);
        $mail->Subject = 'We have received your message! - PKK Productions';
        $mail->Body = $user_body;
        $mail->send();

        // --- EMAIL TO ADMIN (Host Notification) ---
        $mail->clearAddresses();
        $mail->addAddress('productionspkk@gmail.com');
        $mail->Subject = "Website Inquiry: $name";
        $mail->Body = $admin_body;
        $mail->send();

        // 3. Update Leads CSV (Robust Handling)
        $csvFile = '../leads.csv';
        $lockFile = $csvFile . '.lock'; // Simple lock mechanism

        $data = [];
        $header = ["Name", "Email", "Phone", "Submissions"];
        $updated = false;

        // Open file with lock to prevent data corruption
        $fp = fopen($csvFile, 'c+');
        if ($fp && flock($fp, LOCK_EX)) {
            // Read existing data
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

            // Rewrite file
            ftruncate($fp, 0);
            rewind($fp);
            foreach ($data as $fields) {
                fputcsv($fp, $fields);
            }
            fflush($fp);
            flock($fp, LOCK_UN);
            fclose($fp);
        }

        echo "success";

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "Direct access not allowed.";
}
?>