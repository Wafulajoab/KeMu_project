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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $user_id = $_POST["user_id"];
    $username = sanitize_input($_POST["username"]);
    $phone_number = sanitize_input($_POST["phone_number"]);
    $campus = sanitize_input($_POST["campus"]);

    // Update user information in the database
    $stmt = $conn->prepare("UPDATE users SET username=?, phone_number=?, campus=? WHERE id=?");
    $stmt->bind_param("sssi", $username, $phone_number, $campus, $user_id);
    $stmt->execute();
    $stmt->close();
}

// Function to sanitize user input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Close connection
$conn->close();
?>
