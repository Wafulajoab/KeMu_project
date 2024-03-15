<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; text-align: left;">


<br><br><br><br>

<div style="width: 50%; margin: 0 auto; padding-top: 10px; padding: 5px;">
    <h1 style="text-align: center; color: #333;">About Us</h1>
    <div style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(128, 2, 2, 0.384);">
        <!-- Content -->
        <p  style="text-align: center;"><strong>Motto:</strong></p>
        <p  style="text-align: center;"> Providing Security for a Safer Tomorrow</p>
        <p  style="text-align: center;"><strong>Vision:</strong></p>
        <p  style="text-align: center;">To be the leading innovator in security solutions globally.</p>
        <p  style="text-align: center;"><strong>Mission:</strong></p>
        <p  style="text-align: center;"> Our mission is to ensure the safety and protection of individuals and organizations through cutting-edge security technology and dedicated service.</p>
        <p  style="text-align: center;">This system is purposely meant for security issues. In case of any emergency, please contact us through the numbers provided in the <a href="contact.php" style="color: #007bff; text-decoration: none;">Contact</a> section.</p>
        <p style="text-align: center;"><strong>The Future is Here!</strong></p>
    </div>

    <!-- Action buttons -->
    <div class="action-buttons">
        <a href="#" class="btn btn-primary" onclick="goBack()">Go Back</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</div>

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

        /* Style for buttons */
        .action-buttons {
            margin-top: 10px;
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
            background-color: #0056b3;
        }

        .action-buttons .btn-danger {
            background-color: #dc3545;
        }

        .action-buttons .btn-danger:hover {
            background-color: #bd2130;
        }
    </style>

    
    <div class="footer">
        <p><span>Company.<strong>All Rights Reserved.</strong>Designed By <a href="jmtech.php">JMTech</a></span></p>
    </div>
</footer>
</body>
</html>
