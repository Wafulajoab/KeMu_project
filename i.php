<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kemu";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$locationn = isset($_POST['locationn']) ? $_POST['locationn'] : '';
$uploaderName = isset($_POST['uploaderName']) ? $_POST['uploaderName'] : '';

// Process file uploads
$uploadVideoPath = uploadFile('uploadVideo', 'videos/');
$uploadImagePath = uploadFile('uploadImage', 'images/');

// Get current timestamp
$currentTimestamp = date('Y-m-d H:i:s');

// Example: Insert data into 'incidents' table
$sql = "INSERT INTO incidents (locationn, uploaderName, uploadVideoPath, uploadImagePath, idate) 
        VALUES ('$locationn', '$uploaderName', '$uploadVideoPath', '$uploadImagePath', '$currentTimestamp')";

if ($conn->query($sql) === TRUE) {
    // Redirect to the same page
    header("Location: incidents.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Function to handle file uploads
function uploadFile($inputName, $targetDirectory) {
    // Create target directory if it doesn't exist
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    $targetFile = $targetDirectory . basename($_FILES[$inputName]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // ... (rest of the code)

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        return "";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES[$inputName]["name"])) . " has been uploaded.";
            return $targetFile;
        } else {
          //  echo "Sorry, there was an error uploading your file.";
            return "";
        }
    }
}
?>
