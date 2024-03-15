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

// Fetch data from the database
$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

// Display the data in a table with horizontal and vertical lines
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
    echo "</div>";
    echo "<table style='border-collapse: collapse; width: 100%; margin: 0 auto;'>";
    

    echo "<div style='text-align: center;'>";
    echo "<div class='image' style='text-align: center;'>";
    echo "<img src='kmu.jpeg' class='image2' alt='KeMU Image' style='max-width: 5%; height: auto;'>";
    echo "</div>";
    echo "<h2>KEMU SECURITY SYSTEM MESSAGES</h2>";
    
    echo "<style>
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 0 auto; /* This will center-align the table */
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .send-btn {
        background-color: purple;
        color: white;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .send-btn:hover {
        background-color: green;
    }
    .reply-column {
        text-align: right;
    }
  </style>";

 
    echo "<table>";
    echo "<tr><th>Serial No.</th><th>Name</th><th>Email</th><th>Message</th><th>Created At</th><th class='reply-column'>Reply</th></tr>";

    $serial = 1; // Initializing serial number counter

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $serial . "</td>"; // Serial number column
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "<td>" . $row["created_at"] . "</td>";
        echo "<td class='reply-column'>
                <form method='post' action='record_reply.php'>
                    <textarea name='reply_message' rows='3' cols='30'></textarea>
                    <input type='hidden' name='message_id' value='" . $row["id"] . "'>
                    <button type='submit' class='send-btn'>Send</button>
                </form>
              </td>"; // Reply column with textarea and send button
        echo "</tr>";
        $serial++; // Incrementing serial number counter
    }
    echo "</table>";
} else {
    echo "No messages found.";
}


// Logout button
echo "<div style='text-align: center; margin-top: 20px;'>"; // Adjust margin-top as needed
echo "<a href='landingpage.php' class='logout-btn'>Logout</a>";
echo "<style>
    .logout-btn {
        background-color: purple;
        color: white;
        padding: 8px 12px;
        border: none;
        border-radius: 25px;
        text-decoration: none;
    }
    .logout-btn:hover {
        background-color: green;
    }
</style>";
echo "</div>";

// Go back button
echo "<div style='text-align: center; margin-top: 20px;'>"; // Adjust margin-top as needed
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
