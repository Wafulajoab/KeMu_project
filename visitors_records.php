<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Visitor Records Management</title>

    <style>
      
        /* CSS for Form and Header */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color:black;
        }

        h2 {
            text-align: center;
            color: white;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            
        }

        form button {
            background-color: purple;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #6a0dad;
        }

        /* CSS for Navigation Bar */
/* 

        ::after,
        ::before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        } */

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
            width: 50%;
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
       
        .ft p {
    justify-content: left;
    position: relative;
}


    </style>
</head>
<body>
  
<nav>
    <div class="navbar">
        <h2> KEMU SECURITY SYSTEM</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="visitors_records.php"><i class="fas fa-book"></i> Visitors-records</a></li>
            <li><a href="incidents.php"><i class="fas fa-exclamation-triangle"></i> Incidents</a></li>
            <li><a href="updates.php"><i class="fas fa-bullhorn"></i>Updates</a></li>
            <li><a href="contact.php"><i class="fas fa-address-book"></i> Contacts</a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li> 
     
        </ul>
    </div>
</nav>
<br><br><br><br>
<h1><i class="fas fa-user"></i> KENYA METHODIST VISITORS RECORDS</h1>
<form id="visitorForm" action="v.php" method="post" style="width: 35%; margin: 0 auto; background-color: white; padding: 45px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    
    <label for="username"><i class="fas fa-user"></i> Name:</label>
    <input type="text"  name="username" id="username" required autocomplete ="off">

    <label for="idno" ><i class="fas fa-id-card"></i> ID Number:</label>
    <input type="text"  name="idno" id="idno" required autocomplete ="off">

    <label for="phone_Number"><i class="fas fa-phone"></i> Phone Number:</label>
    <input type="text" name="phone_number" id="phone_Number" required autocomplete ="off">

    <label for="purpose"><i class="fas fa-info"></i> Purpose of Visit:</label>
    <input type="text" name="purpose" id="purpose" required autocomplete ="off">

    <button type="Submit" style="background-color: purple; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;"><i class="fas fa-sign-in-alt"></i>Register</button>
</form>

<!-- <h2 style="text-align: center; color:black;">Registered Visitors</h2> -->
<!-- <h2 style="text-align: center; color:black;"><i class="fas fa-user"></i> VISITORS RECORDS</h2> -->
<div id="registeredVisitors" style="width: 80%; margin: 20px auto; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <?php
    // Include your PHP script to fetch and display registered visitors
     include('display_visitors.php');
    ?>
</div>

<script src="#"></script>

</body>
</html> 




