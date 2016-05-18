<?php
session_start();
mysql_connect("127.0.0.1","root","");
mysql_select_db("projectse");
$_SESSION['Email'] = mysql_real_escape_string($_POST['Email']);

$strSQL = "SELECT * FROM user WHERE Email = '".mysql_real_escape_string($_POST['Email'])."'
and Password = '".mysql_real_escape_string($_POST['Password'])."'";
$objQuery = mysql_query($strSQL);

$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{
			 header("location:Non_login.html");
}
else
{
	$_SESSION["Type"] = $objResult["Type"];

	session_write_close();

	if($objResult["Type"] == "admin")
	{
		header("location:admin_main.php");
	}
	else if ($objResult["Type"] == "customer")
	{
		header("location:customer_main.php");
	}
	else
	{
		header("location:Non_login.html");
	}
}
mysql_close();
?>