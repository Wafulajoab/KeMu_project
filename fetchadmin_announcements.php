<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSO Announcements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
      body {
    font-family: Arial, sans-serif; /* Specify your preferred font family */
    background-color: #f4f4f7; /* Set background color */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
      }
    
    </style>
</head>
<body>

<nav>
    <div class="container">
        <div class="navbar">
            <h2>KEMU SECURITY SYSTEM</h2>
            <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="visitors_records.php"><i class="fas fa-book"></i> Visitors-records</a></li>
            <li><a href="incidents.php"><i class="fas fa-exclamation-triangle"></i> Incidents</a></li>
            <li><a href="updates.php"><i class="fas fa-bullhorn"></i>Updates</a></li>
            <li><a href="contact.php"><i class="fas fa-address-book"></i> Contacts</a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li> 
     
             </ul>
        </div>
    </div>
</nav>

<div class="container">
    <img src="kmu.jpeg" alt="KMU Logo" style="width: 15%; display: block; margin: 0 auto; padding-top: 0px;">
    <?php
    // Database connection
    $servername = "localhost";
    $username = "root"; // Your database username
    $password = ""; // Your database password
    $dbname = "kemu"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch announcements from the database
    $sql = "SELECT * FROM announcements ORDER BY announcement_date DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $announcement_date = date("F j, Y, g:i a", strtotime($row["announcement_date"]));
            echo "<div class='announcement'>";
            echo "<p><strong>Date Recorded:</strong> $announcement_date</p>";
            echo "<p>" . $row["announcement_content"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<div>No announcements available.</div>";
    }

    $conn->close();
    ?>
</div>
