<?php
// Start the session
session_start();
$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Resetting default margin and padding */
        body, h1, h2, h3, p, ul {
            margin: 0;
            padding: 0;
        }

        /* Your existing CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the page takes at least the height of the viewport */
        }

        .admin-panel {
            flex: 1; /* Expand to fill remaining vertical space */
            padding: 2px;
            max-width: 400px;
            margin: 0 auto;
            background-color: transparent;
            
        }

        .dashboard {
            background-color: #fff;
            padding: 5px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center align the content */
        }

        .dashboard h2 {
            margin-top: 0;
            font-size: 25px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 0px;
            margin-bottom: 0px;
        }

        .dashboard ul {
            list-style-type: none;
            padding: 40px;
            text-align: left; /* Reset text alignment for list items */
        }

        .dashboard li {
            margin-bottom: 15px;
        }

        .dashboard a {
            text-decoration: none;
            color: black;
            font-size: 18px;
            display: block;
            padding: 15px;
            border-radius: 25px;
            transition: background-color 0.3s;
        }

        .dashboard a:hover {
            background-color:lavender;
        }

        /* Navbar styles */
        .navbar {
            background-color: purple;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000; /* Ensure the navbar is above other content */
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 18px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        #footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: lavender;
            text-align: center;
            padding: 0.5rem;
        }

        .footer p {
            justify-content: center;
        }

        .footer a {
            color: green;
            text-decoration: underline;
            font-weight: bold;
        }

        /* Style for buttons */
        .action-buttons {
            margin-top: 10px; /* Adjusted margin top */
            text-align: center;
        }

        .action-buttons a {
            display: inline-block;
            margin: 5px;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .action-buttons a:hover {
            cursor: pointer;
        }

        .action-buttons .btn-primary {
            background-color: #007bff;
        }

        .action-buttons .btn-primary:hover {
            background-color: #0056b4;
        }

        .action-buttons .btn-danger {
            background-color: #dc3545;
        }

        .action-buttons .btn-danger:hover {
            background-color: #bd2130;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h1>KEMU SECURITY SYSTEM ADMIN PANEL</h1> <!-- Title added here -->
    </div>
    <div class="admin-panel">
        <div class="dashboard">
            <div class="image" style="text-align: center;">
                <img src="kmu.jpeg" class="image2" alt="KeMU Image" style="max-width: 20%; height: auto;">
            </div>
            <h2><?php echo $username ?> 
            <br>Admin Panel Dashboard</h2>
            <ul>
                <li><a href="displayadmins.php">Admins</a></li>
                <li><a href="display_users.php">User Management</a></li>
                <li><a href="display_visitors.php">Visitors Records</a></li>
                <li><a href="incidentsadmin.php">Incident Reports</a></li>
                <li><a href="admin_announcements.php"> Post Announcements</a></li>
                <!-- <li><a href="updates.php"> Updates</a></li> -->
                <li><a href="displaycontact.php">Contacts</a></li>
            </ul>
        </div>

         <!-- Action buttons -->
    <div class="action-buttons">
        <a href="#" class="btn btn-primary" onclick="goBack()">Go Back</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    </div>

   <br><br><br>
    <!-- Footer -->
    <footer id="footer">
        <div class="footer">
            <p><span>Company.<strong>All Rights Reserved.</strong>Designed By <a href="jmtech.php">JMTech</a></span></p>
        </div>
    </footer>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
