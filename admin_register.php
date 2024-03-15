 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        .password-toggle {
            position: relative;
        }
        .password-toggle input[type="password"] {
            padding-right: 30px;
        }
        .password-toggle .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: purple;
            color: #fff;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .login-link {
        text-align: center;
        margin-top: 20px;
    }
    .login-link a {
        color: blue;
        text-decoration: none;
        transition: color 0.3s; /* Adding transition effect for color change */
    }
    .login-link a:hover {
        color: darkblue; /* Changing color on hover */
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="image" style="text-align: center;">
            <img src="kmu.jpeg" class="image2" alt="KeMU Image" style="max-width: 15%; height: auto;">
        </div>
        <h2>Admin Registration</h2>
        
    <form action="adregister_process.php" method="post">
        <label for="work_id">Admin Work ID:</label>
        <input type="text" id="work_id" name="work_id" autocomplete="off" required><br><br>

        <label for="rank">Rank:</label>
        <select id="rank" name="rank" autocomplete="off" required>
            <option value="">Select Rank</option>
            <option value="Chief Security Officer">Chief Security Officer (C.S.O)</option>
            <option value="Assistant Chief Security Officer">Assistant Chief Security Officer (A.C.S.O)</option>
        </select><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" autocomplete="off" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" autocomplete="off" required><br><br>

        <button type="submit">Register</button>
    </form>

    <div class="login-link">
       <h> Already registered? <a href="admin_login.php">Login here</a></h>
    </div>

    </div>

</html> 
