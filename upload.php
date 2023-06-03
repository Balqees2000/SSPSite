<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
    <link rel="stylesheet" href="css/upload.css">
</head>

<body>
   
    
        <h3>Share Your Favorite Pet's Images</h3>
    
    <form method="POST" enctype="multipart/form-data">
        
        <div class="upload-box">
            <br><br>
            <input type="file" name="file" id="file"><br><br>

            <input type="submit" value="Upload">
        </div>
    </form>

</body>

</html>
<?php
$host="localhost";
$user="id20333275_balqees";
$password="project_1234iA";
$db="id20333275_publications";

$conn=mysqli_connect($host,$user,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $upload_path = "uploads/" . $file_name;

    if (move_uploaded_file($file_tmp, $upload_path)) {
        $query = "INSERT INTO uploads (imagename) VALUES ('$file_name')";
        if (mysqli_query($conn, $query)) {
            // header("Location: test.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        echo "File uploaded successfully.";
    } else {
        echo "Failed to move the uploaded file.";
    }
}
mysqli_close($conn);
?>

        
        
     

