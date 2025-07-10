<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input fields to avoid undefined index errors
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
    $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
    $visitor_email = isset($_POST["email"]) ? $_POST["email"] : "";
    $message = isset($_POST["subject"]) ? $_POST["subject"] : "";

    $email_from = "info@taempowerment.org.ng";
    $email_subject = "New Form Submission";
    $email_body = "User First Name: $firstname.\n".
                  "User Last Name: $lastname.\n".
                  "User Email: $visitor_email.\n".
                  "User Message: $message.\n";

    $to = "info@taempowerment.org.ng";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n"; // Append instead of overwriting

    // Send email and check if it was successful
    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: contact.php");
        exit(); // Ensure script stops after redirection
    } else {
        echo "Error: Email could not be sent.";
    }
} else {
    echo "Invalid request method.";
}
?>
