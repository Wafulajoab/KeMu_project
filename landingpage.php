<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Landing Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('cam.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: purple;
            padding: 20px 0;
            text-align: center;
            z-index: 1000; /* Ensure it's above other content */
        }

        .navbar .dropdown {
            position: relative;
            display: inline-block;
            color: white;
     
    
         
        }
       
       
        .container {
            text-align: left;
            margin-bottom: 50px;
        }
       


        .button {
    background-color: transparent;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border: 2px solid green;
    padding: 8px 16px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    border-radius: 25px;
}

.button:hover {
    background-color: green;
    color: white;
}

.button:active {
    transform: translateY(1px);
}
        
    </style>
</head>
<body>
 
<div class="navbar">
    <a href="admin_register.php" class="button">Register as Admin</a>
    <a href="admin_login.php" class="button">Login as Admin</a>
    <a href="register.php" class="button">Register as User</a>
    <a href="login.php" class="button">Login as User</a>
</div>

        </div>
    </div>
    <div class="container">
        <h1>Welcome to KeMU Security System</h1>
        <!--other content here -->
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
</body>
</html>
