<?php
$conn = new mysqli("127.0.0.1", "root", "", "projectse");
if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " .mysqli_connect_error();
	}
$term = mysql_real_escape_string($_REQUEST['term']);    

$sql = "SELECT product.* FROM product WHERE ProductName LIKE '%".$term."%'";
$r_query = mysql_query($sql);

while ($result = mysql_fetch_array($r_query))
	{ 
		echo .$result['PictureURL']; 
		echo '<br /> Name: ' .$result['ProductName']; 
		echo '<br /> Type: '.$result['ProductType']; 
		echo '<br /> Price: '.$result['Price'];  
	} 
mysql_close($conn)
 ?>