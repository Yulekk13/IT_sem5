<?php

// // Assuming your form uses POST method
// $Name = isset($_POST['Name']) ? $_POST['Name'] : '';
// $Subject = isset($_POST['Subject']) ? $_POST['Subject'] : '';
// $Date = isset($_POST['Date']) ? $_POST['Date'] : '';
// $Time = isset($_POST['Time']) ? $_POST['Time'] : '';
// $Description = isset($_POST['Description']) ? $_POST['Description'] : '';

// // Validate input if needed
// // Example: You can use regex, filter_var, or other validation methods here

// // Database connection
// $conn = new mysqli('localhost', 'root', '', 'users');

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Prepare and execute the query
// $stmt = $conn->prepare("INSERT INTO meetings (Name, Subject, Date, Time, Description) VALUES (?, ?, ?, ?, ?)");

// if (!$stmt) {
//     die("Error in preparing statement: " . $conn->error);
// }

// $stmt->bind_param("sssss", $Name, $Subject, $Date, $Time, $Description);

// if (!$stmt->execute()) {
//     die("Error in executing statement: " . $stmt->error);
// }

// $stmt->close();
// $conn->close();

// header("Location: meetings.php");

$Name = $_POST['Name'];
$Subject = $_POST['Subject'];
$Date = $_POST['date'];
$Time = $_POST['time'];
$Description = $_POST['Description'];


//Database connection
$conn = new mysqli('localhost', 'root','','users');

$stmt = $conn->prepare("insert into meetings(Name, Subject, Date, Time, Description)
values (?,?,?,?,?)");

$stmt->bind_param("sssss", $Name, $Subject, $Date, $Time, $Description);
$stmt->execute();
$stmt->close();

header("Location: meetings.php");

?>