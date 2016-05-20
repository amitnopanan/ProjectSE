<?php
//connect to local host and database ‘projectse’
$con=mysqli_connect("127.0.0.1","root","","projectse");
//show error massage if cannot connect 
if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}
//get value from post method from admin_addproduct.html and give value in from of $NameofAttibute
$ProductName= mysqli_real_escape_string($con, $_POST['ProductName']);
$Price = mysqli_real_escape_string($con, $_POST['Price']);
$Quantity= mysqli_real_escape_string($con, $_POST['Quantity']);
$ProductType= mysqli_real_escape_string($con, $_POST['ProductType']);
$PictureURL= mysqli_real_escape_string($con, $_POST['PictureURL']);
//Insert value into table product 
$sql = "INSERT INTO product (ProductName, Price, Quantity, ProductType, PictureURL)
VALUES ('".$ProductName."', '".$Price."','".$Quantity."','".$ProductType."', '".$PictureURL."');";
if (!mysqli_query($con,$sql)) {
die('Error: ' . mysqli_error($con));
}
//Print out add value to database already then go to admin_products.php
echo "The data has been added into the database.";
mysqli_close($con);

header("location:admin_products.php");
?>
