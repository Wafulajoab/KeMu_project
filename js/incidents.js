// Function to handle file uploads
function uploadFile($inputName, $targetDirectory) {
    // Create target directory if it doesn't exist
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, '0777', true);
    }

    $targetFile = $targetDirectory . basename($_FILES[$inputName]["name"]);
    // ... (rest of the code)
}
