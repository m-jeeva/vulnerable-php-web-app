<?php
// database connection details
$host = "localhost";
$user = "root";
$password = "";
$dbname = "feedback_db";

// connect to database
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get form data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$category = $_POST['category'];

// prepare SQL statement
$stmt = "INSERT INTO feedback (name, email, feedback, category) VALUES ('$name', '$email', '$feedback', '$category')";

// execute SQL statement
if (mysqli_query($conn, $stmt)) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error submitting feedback: " . $conn->error;
}

// close database connection
$conn->close();
?>
