<?php
$host="localhost";
$user="id20333275_balqees";
$password="project_1234iA";
$db="id20333275_publications";

// $conn=mysqli_connect($host,$user,$password,$db);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// //  Retrieve user input
// $username = $_POST['username'];
// $email = $_POST['email'];
// $pass = $_POST['password'];
// // $petname=$_POST['pet-name'];

// // Prepare SQL statement to insert new user with isAdmin set to 0
// $stmt = $conn->prepare("INSERT INTO Users (Name,Email, Password) VALUES (?, ?, ?)");
// $stmt->bind_param("ssss", $username, $email,$pass);

// // Execute statement and check for errors
// if ($stmt->execute() === TRUE) {
//   echo "New user created successfully";
// } else {
//   echo "Error: " . $stmt->error;
// }

// // Close statement and connection
// $stmt->close();
// $conn->close();


// //  Retrieve user input
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$petname=$_POST['petName'];


$conn=mysqli_connect($host,$user,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert new user with isAdmin set to 0
$stmt = $conn->prepare("INSERT INTO Users (Name, Email,petName, Password) VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss", $username, $email,$petname,$pass);

// Execute statement and check for errors
if ($stmt->execute() === TRUE) {
  echo "New user created successfully";
} else {
  echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();

?>

