<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label for="fileToupload">Select a file:</label>
        <input type="file" id="fileToupload" name="fileToupload" >
        <input type="submit" value="Upload">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $folder = 'uploads/'; // The folder you want the file to move to
        $original_name = $_FILES["fileToupload"]["name"]; // The name of the file to be uploaded
        $tempName = $_FILES['fileToupload']['tmp_name']; // The name it will take in the new $folder after been uploaded
        $destination = $folder . $original_name; 
        $targetFile = $folder . basename($_FILES["fileToupload"]["name"]);
        
        if(file_exists($targetFile)){ // To check if the files has already been uploaded before
             echo "file already exsits";
        }else {
            if (move_uploaded_file($tempName, $destination)) {
                echo "File $original_name uploaded successfully.<br>";
            } else {
                 echo "Error uploading $original_name.<br>";
            }
            // if the code is not working check my readme file
        }
    }
    ?>
</body>
</html>