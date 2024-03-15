<?php
// Database connection parameters
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

// Retrieve admins data from the database
$sql = "SELECT * FROM admins";
$result = $conn->query($sql);

// Check if there are admins in the database
if ($result->num_rows > 0) {
    echo "<div class='navbar' style='position: fixed; top: 0; left: 0; width: 100%; background-color: purple; padding: 30px; text-align: center;'>";
    echo "<a href='displayadmins.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Admins</a>";
    echo "<a href='display_users.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>User Management</a>";
    echo "<a href='display_visitors.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Visitors Records</a>";
    echo "<a href='admin_announcements.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Post Announcements</a>";
    echo "<a href='incidentsadmin.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Incident Reports</a>";
    echo "<a href='displaycontact.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Contacts</a>";
    echo "<style>";
    echo ".navbar a:active {";
    echo "background-color: smokewhite;";
    echo "}";
    echo "</style>";
    echo "</div>";
    
    echo "<div style='width: 80%; margin: 0 auto; padding-top: 70px;'>"; // Adjust padding-top to accommodate navbar height
    echo "<div class='image' style='text-align: center;'>";
    echo "<img src='kmu.jpeg' class='image2' alt='KeMU Image' style='max-width: 5%; height: auto;'>";
    echo "</div>";
    echo "<h2 style='text-align: center;'>Admins List</h2>";
    echo "<table style='border-collapse: collapse; width: 80%; margin: 0 auto;'>";
    echo "<tr style='border-bottom: 1px solid black;'><th style='border-right: 1px solid black; padding: 8px;'>Serial No.</th><th style='border-right: 1px solid black; padding: 8px;'>Work ID</th><th style='border-right: 1px solid black; padding: 8px;'>Rank</th><th style='border-right: 1px solid black; padding: 8px;'>Username</th><th style='padding: 8px;'>Actions</th></tr>";

    // Initialize serial number
    $serial = 1;

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr style='border-bottom: 1px solid black;'>";
        echo "<td style='border-right: 1px solid black; padding: 8px;'>" . $serial . "</td>";
        echo "<td style='border-right: 1px solid black; padding: 8px;'>" . $row["work_id"] . "</td>";
        echo "<td style='border-right: 1px solid black; padding: 8px;'>" . $row["rank"] . "</td>";
        echo "<td style='border-right: 1px solid black; padding: 8px;'>" . $row["username"] . "</td>";
        echo "<td style='padding: 8px;'><a href='add_admin.php'>Add Admin</a> | <a href='delete_admin.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this admin?\");'>Delete Admin</a></td>";
        echo "</tr>";
        $serial++;
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "No admins found.";
}

     //go back button
     echo "<button onclick='goBack()' class='back-btn'>Go Back</button>";
     echo "<style>
         .back-btn {
             background-color: purple;
             color: white;
             padding: 8px 12px;
             border: none;
             border-radius: 25px;
             cursor: pointer;
             margin-top: 20px; /* Adjust margin-top as needed */
         }
         .back-btn:hover {
             background-color: green;
         }
     </style>";
     
     echo "<script>
         function goBack() {
             window.history.back();
         }
     </script>";

     

// Close connection
$conn->close();
?>
<br><br><br><br>
<footer id="footer">
    <style>
        #footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: lavender;
            text-align: center;
            padding: 0.1rem;
        }

        .footer p {
            justify-content: center;
        }

        .footer a {
            color: green;
            text-decoration: underline;
            font-weight: bold;
        }
    </style>

    <div class="footer">
        <p><span>Company.<strong>All Rights Reserved.</strong>Designed By <a href="jmtech.php">JMTech</a></span></p>
    </div>
</footer>