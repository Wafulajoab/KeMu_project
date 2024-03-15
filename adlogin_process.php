<?php
session_start();
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kemu";

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the credentials are valid
    $sql = "SELECT * FROM admins WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Verify the password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // $_SESSION['admin_id'] = $admin['id']; // Assuming id is the primary key of admins table
            $_SESSION['username'] = $row['username'];
            // Login successful, redirect to admin dashboard
            header("Location: admin_dashboard.php");
            exit();
        } else {
            // Invalid password, display error message
            echo "Invalid username or password";
        }
    } else {
        // No user found with the given username
        echo "Invalid username or password";
    }
}

// Close database connection
$conn->close();
?>
