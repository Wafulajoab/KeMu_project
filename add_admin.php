<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column; /* Change to column */
            min-height: 100vh; /* Change to min-height */
        }
        .container {
    flex: 1; /* Fill the remaining vertical space */
    max-width: 50%;
    padding: 20px;
    background-color: #fff;
    border-radius: 25px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: auto; /* Center align horizontally */
}

        .navbar {
            background-color: purple;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
     
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 6px;
        }
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        select {
            margin-bottom: 20px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: purple;
            color: #fff;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="navbar">
    <!-- <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a> -->
</div>
<br>
<div class="container">
    <div class="image" style="text-align: center;">
        <img src="kmu.jpeg" class="image2" alt="KeMU Image" style="width: 100px; height: auto;">
    </div>

    <h2>Add Admin</h2>
    <form action="add_admin_process.php" method="post">
        <label for="work_id">Work ID:</label>
        <input type="text" id="work_id" name="work_id" autocomplete="off" required>

        <label for="rank">Rank:</label>
        <select id="rank" name="rank" autocomplete="off" required>
            <option value="">Select Rank</option>
            <option value="Chief Security Officer">Chief Security Officer (C.S.O)</option>
            <option value="Assistant Chief Security Officer">Assistant Chief Security Officer (A.C.S.O)</option>
        </select>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" autocomplete="off" required>

        <label for="password">Password:</label>
        <div style="position:relative;">
            <input type="password" id="password" name="password" autocomplete="off" required>
            <span id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">Show</span>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
<br><br>


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
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.textContent = type === 'password' ? 'Show' : 'Hide';
    });
</script>
</body>
</html>
