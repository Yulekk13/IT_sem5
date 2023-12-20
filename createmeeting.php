<?php

$Name = $_POST['Name'];
$Subject = $_POST['Subject'];
$Room = $_POST['Room'];
$Date = $_POST['date'];
$Time = $_POST['time'];
$Description = $_POST['Description'];


//Database connection
$conn = new mysqli('localhost', 'root','','users');

$stmt = $conn->prepare("insert into meetings(Name, Subject, Room, Date, Time, Description) values (?,?,?,?,?,?)");

$stmt->bind_param("ssssss", $Name, $Subject, $Room, $Date, $Time, $Description);
$stmt->execute();
$stmt->close();

header("Location: meetings.php");

?>