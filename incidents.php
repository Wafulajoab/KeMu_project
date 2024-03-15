<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Incident Upload</title>
    <style>
      
    
/* CSS for Form and Header */
body {
    font-family: Arial, sans-serif;;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    width: 100%;
    margin: 0 auto;
    padding: 0 0px;
}

.incident-form {
    width: 25%;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.incident-form h1 {
    text-align: left;
    color: #333;
}

.incident-form label {
    display: block;
    margin-bottom: 5px;
    color: #666;
}

.incident-form input[type="text"],
.incident-form input[type="file"] {
    width: 80%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.incident-form button {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

.incident-form button:hover {
    background-color: purple;
}


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
            /* width: 100%; */
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




/* CSS for Registered Visitors Section */
#registeredVisitors {
    width: 80%;
    margin: 20px auto;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#registeredVisitors table {
    width: 100%;
    border-collapse: collapse;
}

#registeredVisitors th,
#registeredVisitors td {
    border: 1px solid #ccc;
    padding: 10px;
}

#registeredVisitors th {
    background-color: purple;
    color: white;
}



.goback-btn {
            display: inline-block;
            background-color: purple;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s;
        }

        .goback-btn:hover {
            background-color: #333;
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
  <br><br><br><br><br><br>

<div class="incident-form">
    <h1><i class="fas fa-exclamation-triangle"></i> Report an Incident</h1>
    <form id="incidentForm" action="i.php" method="post" enctype="multipart/form-data">

        <label for="locationn"><i class="fas fa-map-marker-alt"></i> Location:</label>
        <input type="text" id="locationn" name="locationn" required>
        
        <label for="uploaderName"><i class="fas fa-user"></i> Uploader's Name:</label>
        <input type="text" name="uploaderName" id="uploaderName" placeholder="Your Name">

        <label for="uploadVideo"><i class="fas fa-video"></i> Upload Video:</label>
        <input type="file" name="uploadVideo" id="uploadVideo" accept="video/*">

        <label for="uploadImage"><i class="fas fa-camera"></i> Upload Photo:</label>
        <input type="file" name="uploadImage" id="uploadImage" accept="image/*">

        <button type="Submit" style="background-color: #4caf50;"><i class="fas fa-paper-plane"></i> Submit</button>
        
    </form>
</div>

<div id="registeredVisitors">


    <?php
    // Include your PHP script to fetch and display registered visitors
    include('display_incidents.php');
    ?>
</div>
</div>


<div>
    <a href="index.php" class="goback-btn"><i class="fas fa-arrow-left"></i> Go Back</a>
 </div>



<div id="mediaModal" class="modal"></div>

<script src="incidents.js"></script>

<br><br><br><br><br>

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
