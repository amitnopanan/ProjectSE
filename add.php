<?php
session_start();
$studentID = $_SESSION['studentID'];
$conn = new mysqli("127.0.0.1", "root", "", "courseregistration");
if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}
$result2 = $conn->query("SELECT * FROM register WHERE studentID= $studentID");
mysqli_query($conn,"INSERT INTO studentcourse (studentID,OpenID,RegisNo) 
VALUES ("$studentID", ".$result["ID"].", ".$result2["RegisNo"].")");
mysqli_close($conn);

echo("Data Updated");
?>