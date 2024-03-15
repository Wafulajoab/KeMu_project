<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMU Security System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* CSS for Navigation Bar */
        .navbar ul li a::after {
            position: absolute;
            content: "";
            bottom: 0;
            left: 50%;
            width: 0%;
            height: 2px;
            background-color: rgb(245, 243, 243);
            transition: 0.4s ease-out;
            align-items: center;
        }

        .navbar ul li a:hover::after {
            left: 0;
        }

        nav {
            position: fixed;
            width: 100%;
            top: 0;
            height: 10vh;
        }

        .container {
            background-color: white;
            width: 100%;
            z-index: 100%;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: purple;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .navbar ul {
            display: flex;
            list-style-type: none;
            top: 0;
        }

        .navbar ul li {
            padding: .5rem;
            margin: .5rem;
        }

        .navbar ul li a {
            text-decoration: none;
            color: rgb(250, 246, 246);
            font-size: 1rem;
            font-weight: bold;
        }

        .navbar h2 {
            font-size: 1.5rem;
            padding: 0.5px;
            margin: 1.5rem;
            font-family: Arial, sans-serif;
            color: rgb(250, 245, 245);
        }

        /* CSS for Footer */
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

        /* CSS for Buttons */
        .button-container {
            width: 100%;
            margin: 0 auto;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
        }

        .button-container button {
            margin: 10px;
            padding: 10px 30px;
            background-color: purple;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button-container button:hover {
            background-color: green;
        }

        /* CSS for Announcement Div */
        .announcement-container {
            width: 20%;
            margin: 0 auto;
            text-align: center;
            margin-top: 100px; /* Adjust margin-top as needed */
            background-color: #f5f5f5; /* Set background color */
            padding: 3%; /* Add padding for better appearance */
            border-radius: 25px; /* Add border-radius for rounded corners */
            position: relative; /* Added position relative */
        }

        .announcement-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .announcement-logo {
            margin-bottom: 10px;
        }

        .announcement-logo img {
            width: 30%; /* Set width to 10% of the container */
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

    <!-- Announcements Div -->
    <div class="announcement-container">
        <div class="announcement-title">Announcements</div>
        <!-- Logo and Buttons section -->
        <div class="logo-and-buttons">
            <div class="announcement-logo">
                <img src="kmu.jpeg" alt="Logo">
            </div>
            <div class="button-container">
                <button onclick="window.location.href='cso_announcements.php'"> Chief Security(CSO) Announcement</button>
                <button onclick="window.location.href='normal_announcements.php'">Normal Announcements</button>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="footer">
            <p><span>Company.<strong>All Rights Reserved.</strong>Designed By <a href="jmtech.php">JMTech</a></span></p>
        </div>
    </footer>
</body>
</html>
