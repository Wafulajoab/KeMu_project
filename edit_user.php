<?php
// Database connection parameters and PHP code for handling form submission go here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f0f0f0;">
    <h2 style="text-align: center;">Edit User</h2>
    <div class="image" style="text-align: center;">
    <img src="kmu.jpeg" class="image2" alt="KeMU Image" style="max-width: 80px; height: auto;">
</div>

    <form action="edituser.php>" method="POST" style="width: 30%; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        
        <label for="username" style="display: block; margin-bottom: 5px;">Username:</label>
        <input type="text" id="username" name="username" value="" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        
        <label for="phone_number" style="display: block; margin-bottom: 5px;">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" value="" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        
        <label for="campus" style="display: block; margin-bottom: 5px;">Campus:</label>
        <input type="text" id="campus" name="campus" value="" required style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        
        <button type="submit" name="submit" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Save Changes</button>
    </form>
</body>
</html>
