<?php
// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "kemu"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST["username"];
$password = $_POST["password"]; // New line to retrieve password
$phone_number = $_POST["phone_number"];
$campus = $_POST["campus"];

// Prepare SQL statement to insert data into users table
$stmt = $conn->prepare("INSERT INTO users (username, password, phone_number, campus) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $password, $phone_number, $campus); // Updated bind_param to include password

// Execute SQL statement
if ($stmt->execute() === TRUE) {
    // Redirect to display_users.php
    header("Location: display_users.php");
    exit(); // Ensure script stops executing after redirection
} else {
    echo "Error: " . $stmt->error;
}

// Close statement
$stmt->close();

// Close connection
$conn->close();
?>
