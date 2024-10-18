<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "ar_tour";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the user exists
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, login successful
        $_SESSION['username'] = $username; // Store username in session
        header("Location: index.html");
    } else {
        // Invalid credentials
        echo "Invalid username or password!";
    }
}
	?>