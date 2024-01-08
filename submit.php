<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "insurance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];

$sql = "INSERT INTO clients (name, age, dob, contact) VALUES ('$name', '$age', '$dob', '$contact')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>