<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kemu";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch incidents from the database
$sql = "SELECT * FROM incidents";
$result = $conn->query($sql);




    // Non-printable logo
    echo "<div class='non-printable' style='text-align: center;'>";
    echo "<img src='kmu.jpeg' class='image2' alt='KeMU Image' style='max-width: 5%; height: auto;'>";
    echo "</div>";

    // Printable title
    echo "<h1 class='printable' style='text-align: center;'>KEMU SECURITY INCIDENTS REPORTS</h1>";


if ($result->num_rows > 0) {
    // Display incidents in a table
    echo "<table border='1'>";
    echo "<tr><th>Serial Number</th><th>Location</th><th>Uploader's Name</th><th>Video</th><th>Photo</th><th>Date</th></tr>";
    $serialNumber = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $serialNumber . "</td>";
        echo "<td>" . $row["locationn"] . "</td>";
        echo "<td>" . $row["uploaderName"] . "</td>";
        echo "<td><a href='" . $row["uploadVideoPath"] . "' target='_blank'>View Video</a></td>";
        echo "<td><a href='" . $row["uploadImagePath"] . "' target='_blank'>View Photo</a></td>";
        echo "<td>" . $row["idate"] . "</td>";
        echo "</tr>";
        $serialNumber++;
    }
    echo "</table>";
} else {
    echo "No incidents recorded.";
}

$conn->close();
?>
