<?php
session_start();
mysql_connect("127.0.0.1","root","");
mysql_select_db("projectse");
$Email = $_SESSION['Email'];
$strSQL = "SELECT * FROM user WHERE Email = 'Email' ";
?>

<html>
user information
<?php echo $Email ?>
</html>