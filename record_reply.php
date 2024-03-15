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

// Check if the form is submitted and the reply message is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reply_message"]) && isset($_POST["message_id"])) {
    // Sanitize input data
    $reply_message = htmlspecialchars($_POST["reply_message"]);
    $message_id = $_POST["message_id"];

    // Prepare SQL statement to update the message with admin's reply
    $sql = "UPDATE messages SET admin_response = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $reply_message, $message_id);

    // Execute SQL statement
    if ($stmt->execute()) {
        // Admin reply recorded successfully
        // Redirect to display_contact.php
        header("Location: displaycontact.php");
        exit(); // Stop further execution
    } else {
        // Error recording admin reply
        echo "Error: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
