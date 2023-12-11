<?php

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