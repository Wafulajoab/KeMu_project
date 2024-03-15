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

// Check if the user ID is set in the URL parameters
if(isset($_GET['id'])) {
    // Sanitize the user ID
    $id = $_GET['id'];
    
    // Prepare a delete statement
    $sql = "DELETE FROM users WHERE id = ?";
    
    // Bind parameters to the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the user management page after deletion
        header("Location: display_users.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // If no user ID is provided in the URL parameters, display an error message
    echo "User ID not specified.";
}

// Close connection
$conn->close();
?>
