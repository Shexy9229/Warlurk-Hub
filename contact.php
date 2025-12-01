<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form inputs
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $child = htmlspecialchars($_POST["child_info"]);
    $datetime = htmlspecialchars($_POST["datetime"]);
    $location = htmlspecialchars($_POST["location"]);
    $notes = htmlspecialchars($_POST["notes"]);

    // Email details
    $to = "shexy9229@gmail.com"; // <-- Replace with your email
    $subject = "New Booking Request - Warlurk Hub";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Child's Name & Age: $child\n";
    $message .= "Date & Time: $datetime\n";
    $message .= "Location: $location\n";
    $message .= "Additional Notes: $notes\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Thank you! Your booking request has been sent.</h2>";
        echo "<p><a href='index.html'>Return to website</a></p>";
    } else {
        echo "<h2>Sorry, there was a problem sending your request.</h2>";
        echo "<p><a href='index.html'>Return to website</a></p>";
    }
} else {
    echo "<h2>Invalid request.</h2>";
    echo "<p><a href='index.html'>Return to website</a></p>";
}
?>
