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

// Process form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Prepare SQL statement
$sql = "INSERT INTO messages (name, email, message, admin_response, created_at) VALUES ('$name', '$email', '$message', '', NOW())";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    // JavaScript for showing the pop-up message
    echo "<script>alert('Submitted successfully');</script>";
    // Redirect to the contact.php page with a success parameter
    header("Location: contact.php?success=1");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
