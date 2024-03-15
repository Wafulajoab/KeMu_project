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

// Query to retrieve user information
$sql = "SELECT id, username, phone_number, campus, registration_time FROM users";
$result = $conn->query($sql);

// Display user information in a table with serial numbers
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
    echo "<div style='width: 80%; margin: 0 auto; padding-top: 50px;'>"; // Adjust padding-top to accommodate navbar height
    echo "</div>";
    echo "<table style='border-collapse: collapse; width: 100%; margin: 0 auto;'>";
    
    echo "<div class='image' style='text-align: center; margin-top: 60px;'>";
    echo "<img src='kmu.jpeg' class='image2' alt='KeMU Image' style='max-width: 5%; height:auto;'>";
    echo "</div>";
    
    echo "<div style='text-align: center;'>"; // Center align the heading
    echo "<h2>KEMU SECURITY SYSTEM USERS</h2>";
    echo "</div>"; // End of center aligned heading
    echo "<table border='1' style='border-collapse: collapse; margin: 0 auto; width: 80%;'>";
    echo "<tr><th style='border: 1px solid black;'>Serial No.</th><th style='border: 1px solid black;'>Username</th><th style='border: 1px solid black;'>Phone Number</th><th style='border: 1px solid black;'>Campus</th><th style='border: 1px solid black;'>Registration Time</th><th style='border: 1px solid black;'>Actions</th></tr>";

    
    $serial = 1; // Initialize serial number
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid black;'>" . $serial . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["username"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["phone_number"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["campus"] . "</td>";
        echo "<td style='border: 1px solid black;'>" . $row["registration_time"] . "</td>";
        echo "<td style='border: 1px solid black;'><a href='delete_user.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a></td>";
        echo "</tr>";
        $serial++; // Increment serial number
    }
    echo "</table>";
    
    echo "<a href='add_user.php' style='display: block; width: 100px; padding: 10px; margin: 10px auto; text-align: center; background-color: purple; color: white; text-decoration: none; border-radius: 5px; transition: background-color 0.3s;' onmouseover=\"this.style.backgroundColor='blue'\" onmouseout=\"this.style.backgroundColor='purple'\">Add User</a>";

    echo "</div>";
} else {
    echo "No users found";
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
<!-- Footer -->
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
            font weight: bold;
        }
    </style>

    <div class="footer">
        <p><span>Company.<strong>All Rights Reserved.</strong>Designed By <a href="jmtech.php">JMTech</a></span></p>
    </div>
</footer>
