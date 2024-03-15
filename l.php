<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kemu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['psw'];

// Query the database for user credentials
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Successful login
    echo "Login successful!";
    header("Location: index.php"); // Redirect to the login page
    exit(); // Ensure that no other content is sent
} else {
    // Failed login
    header("Location: login.php?error=invalid");
    exit();
}

// Close connection
$conn->close();
?>
