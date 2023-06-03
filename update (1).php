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

// Retrieve form data
$user_id =$_GET['userId'];
$name=$_POST['username'];
$email = $_POST['email'];
$petname = $_POST['petName'];



// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check graduation project type
   
        // Prepare SQL statement to update the record in AddStudents table
        $stmt = $conn->prepare("UPDATE Users SET Email='$email', petName='$petname' ,Name='$name' WHERE userId='$project_id'");
    // Check for errors in prepare() method
    if (!$stmt) {
        die("Error in SQL query: " . mysqli_error($conn));
    }

    // Bind parameters to the statement
   // $stmt->bind_param("ssssssss", $graduation_project, $student_names, $student_emails, $students_num, $project_name, $academic_year, $semester, $supervisor);

    // Execute statement and check for errors
    if ($stmt->execute() === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    // Retrieve existing data from the database for the specified project ID
    $sql = "SELECT * FROM Users WHERE userId = '$project_id'";
    $result = $conn->query($sql);

    // Check if there is a matching record
    if ($result->num_rows > 0) {
        // Fetch the data and populate the form fields
        $row = $result->fetch_assoc();
        $name = $row["Name"];
        $email = $row["Email"];
        $petname=$row["petName"];

    } else {
        echo "No data found for the specified project ID";
    }
}

// Close the database connection
$conn->close();

?>

