<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .admin-panel {
            padding: 20px;
            max-width: 80%;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .dashboard {
            margin-top: 20px;
        }
        .dashboard h2 {
            margin-top: 0;
            font-size: 24px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <!-- Incidents Section -->

        <br><br><br>
        <div class="dashboard">
            <div class="image" style="text-align: center;">
                <img src="kmu.jpeg" class="image2" alt="KeMU Image" style="max-width: 5%; height: auto;">
            </div>

            
            <h2 style="text-align: center;">KEMU SECURITY INCIDENTS REPORTS</h2>

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

                // Display incidents in a table
                echo "<table>";
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
            font-weight: bold;
        }
    </style>

    <div class="footer">
        <p><span>Company.<strong>All Rights Reserved.</strong>Designed By <a href="jmtech.php">JMTech</a></span></p>
    </div>
</footer>

        </div>
    </div>
</body>
</html>
