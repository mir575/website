<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form
    $name =$_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $data = array($name, $email, $subject, $message);

    // Open the text file
    $file = fopen("data.txt", "a");

    // Loop over and append each element to the file
    foreach ($data as $line) {
        fwrite($file, $line . "\n");
    }

    // Close the file
    fclose($file);

    // Redirect back to the form page with a success message
    header("Location: contact.html?message=success");
    exit;
} else {
    // If the form is not submitted, redirect back to the form page
    header("Location: contact.html");
    exit;
}
?>

