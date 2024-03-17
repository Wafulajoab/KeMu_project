<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Messages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: purple;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            /* Set the navbar to be fixed */
            width: 100%;
            /* Ensure the navbar spans the entire width of the viewport */
            top: 0;
            /* Position it at the top */
            left: 0;
            /* Ensure it's aligned to the left */
            z-index: 1000;
            /* Ensure it's above other content */
        }

        .navbar p {
            color: white;
            font-weight: bold;
            font-size: 24px;
            margin: 0;
        }

        .image {
            text-align: center;
            margin-top: 100px; /* Adjust as needed */
        }

        .image img {
            max-width: 5%;
            height: auto;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto; /* This will center-align the table */
        }

        th,
        td {
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

        .back-btn {
            background-color: purple;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            margin-top: 20px;
            /* Adjust margin-top as needed */
        }

        .back-btn:hover {
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="navbar" style='position: fixed; top: 0; left: 0; width: 100%; background-color: purple; padding: 30px; text-align: center;'>
        <a href='displayadmins.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Admins</a>
        <a href='display_users.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>User Management</a>
        <a href='display_visitors.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Visitors Records</a>
        <a href='admin_announcements.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Post Announcements</a>
        <a href='incidentsadmin.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Incident Reports</a>
        <a href='displaycontact.php' style='color: white; text-decoration: none; padding: 10px; font-weight: bold; background-color: purple; border-radius: 25px; margin: 25px; border: 2px solid white;'>Contacts</a>
        <style>
            .navbar a:active {
                background-color: smokewhite;
            }
        </style>
    </div>

    <div class="image">
        <img src="kmu.jpeg" alt="KeMU Image">
        <h2>KEMU SECURITY SYSTEM MESSAGES</h2>
    </div>

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

        // Fetch data from the database in descending order by ID or timestamp
        $sql = "SELECT * FROM messages ORDER BY id DESC"; // Assuming 'id' is the primary key
        $result = $conn->query($sql);


    // Display the data in a table with horizontal and vertical lines
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Serial No.</th><th>Name</th><th>Email</th><th>Message</th><th>Admin Response</th><th>Created At</th><th class='reply-column'>Reply</th></tr>";

        $serial = 1; // Initializing serial number counter

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $serial . "</td>"; // Serial number column
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td>" . $row["admin_response"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "<td class='reply-column'>
                    <form method='post' action='record_reply.php'>
                        <textarea name='reply_message' rows='3' cols='30' required></textarea>
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
</body>
</html>
