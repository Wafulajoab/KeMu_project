<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            background: rgba(244, 244, 247, 0.973);
            font-family: Arial, sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        ::after,
        ::before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

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

        textarea {
            width: 100%;
        }

        .contact-form {
            max-width: 20%;
            margin-top: 6rem;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            position: relative;
            top: 7rem;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            margin: 0 auto;
        }

        form input {
            width: 100%;
            border-radius: 5px;
            outline: none;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            width: 30px;
            padding:4px;
            margin-bottom: 10px;
        }

        button {
            width: 100px;
            background-color: purple;
            color: white;
            padding: 10px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        button:hover {
            background-color: green;
        }

        .contact-section {
            max-width: 20%;
            margin-top: 0rem;
            margin: 0px auto;
            background-color: purple;
            padding: 10px;
            position:absolute ;
            right: 0;
            bottom: 9rem;
            border-radius: 25px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .social-icons {
            padding-left: 20px;
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

<div class="contact-form">
    <p id="error-message" class="error-message">
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
            echo "Message Sent Successfully.";
        }
        ?>
    </p>
    <form id="submit" method="post" action="c.php" style="text-align: center;">
        <div class="image">
            <img src="kmu.jpeg" class="image2" alt="KeMU Image" style="max-width: 30%; margin-bottom: 20px;">
        </div>

        <label for="name"><i class="fas fa-user"></i> Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email"><i class="fas fa-envelope"></i> Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message"><i class="fas fa-comment"></i> Your Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <br>

        <button type="submit" onclick="showMessage()"><i class="fas fa-paper-plane"></i> Submit</button>
    </form>
</div>

<div class="contact-section">
    <h1>Contact Us</h1>
    <div class="contact-info">
        <p><i class="fas fa-map-marker-alt"></i> Address: Meru County, Meru, Kenya</p>
        <p><i class="fas fa-envelope"></i> Email: kemus@gmail.com</p>
        <p><i class="fas fa-phone"></i> Phone: +254729-865-457</p>
        <p><i class="fas fa-fax"></i> Fax: +254767-678-890</p>
    </div>
</div>

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

<script>
    // Function to show the message sent confirmation
    function showMessage() {
        alert("Message Sent");
    }
</script>
</body>
</html>
