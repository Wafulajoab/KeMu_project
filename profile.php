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

// Fetch users' data from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display users' data in a table
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Phone Number</th><th>Campus</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>"; // Assuming 'id' is the primary key
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["campus"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

// Close connection
$conn->close();
?>
