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
$idno = $_POST['idno'];
$phone_number = $_POST['phone_number'];
$purpose = $_POST['purpose'];
$registration_time = $_POST['registration_time'];
// Insert data into the database
$sql = "INSERT INTO visitors (username, idno, phone_number, purpose, registration_time) 
        VALUES ('$username', '$idno', '$phone_number', '$purpose', NOW())";
if ($conn->query($sql) === TRUE) {
    echo "Registered successful!";
    header("Location:visitors_records.php"); // Redirect to the login page
    exit(); // Ensure that no other content is sent
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close connection
$conn->close();
?>
