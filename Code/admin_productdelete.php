<?php

$conn = new mysqli("127.0.0.1", "root", "", "projectse");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " .
mysqli_connect_error();
}
mysqli_query($conn,"DELETE FROM product WHERE ProductID='".$_GET['ProductID']."'");
mysqli_close($conn);

echo("Delete data");
?>