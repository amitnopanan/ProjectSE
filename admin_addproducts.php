<?php
$con=mysqli_connect("127.0.0.1","root","","projectse");
if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$ProductName= mysqli_real_escape_string($con, $_POST['ProductName']);
$Price = mysqli_real_escape_string($con, $_POST['Price']);
$Quantity= mysqli_real_escape_string($con, $_POST['Quantity']);
$ProductType= mysqli_real_escape_string($con, $_POST['ProductType']);
$PictureURL= mysqli_real_escape_string($con, $_POST['PictureURL']);

$sql = "INSERT INTO product (ProductName, Price, Quantity, ProductType, PictureURL)
VALUES ('".$ProductName."', '".$Price."','".$Quantity."','".$ProductType."', '".$PictureURL."');";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
echo "The data has been added into the database.";
mysqli_close($con);
header("location:admin_products.php");
?>
