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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $work_id = mysqli_real_escape_string($conn, $_POST['work_id']);
    $rank = mysqli_real_escape_string($conn, $_POST['rank']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to insert admin data into the database
    $sql = "INSERT INTO admins (work_id, rank, username, password) VALUES ('$work_id', '$rank', '$username', '$hashed_password')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // Redirect to the admin login page after successful registration
        header("Location: adregistration_success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
