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
$phone_number = $_POST['phone_number'];
$campus = $_POST['campus'];
$password = $_POST['psw'];

// Insert data into the database
$sql = "INSERT INTO users (username, phone_number, campus, password) VALUES ('$username', '$phone_number', '$campus', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: user_registrationsuccess.php"); // Redirect to the login page
    exit(); // Ensure that no other content is sent
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close connection
$conn->close();
?>
