<?php
// Retrieve the form data
$name = $_POST['name'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$education = $_POST['education'];
$ssn = $_POST['ssn'];
$access = $_POST['access'];
$phone = $_POST['phone'];

// Validate the form data
if (empty($name) || empty($dob) || empty($address) || empty($education) || empty($ssn) || empty($access) || empty($phone)) {
    die("Error: Please fill out all required fields.");
}

// Connect to the database (replace the placeholders with your own database credentials)
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Error: Failed to connect to the database.");
}

// Insert the form data into the database
$sql = "INSERT INTO applicants (name, dob, address, education, ssn, access, phone) VALUES ('$name', '$dob', '$address', '$education', '$ssn', '$access', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "Thank you for submitting your application!";
} else {
    echo "Error: Failed to submit your application.";
}

mysqli_close($conn);
?>
