<?php 
session_start();
mysql_connect("127.0.0.1 ","root","");
mysql_select_db("projectse");
$Email = $_SESSION['Email'];
$strSQL = "SELECT * FROM user WHERE Email = 'Email' ";
// connect to SQL
$conn = new mysqli("127.0.0.1", "root","", "projectse");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " .mysqli_connect_error();
}
?>

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Main</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php
if(isset($_GET['ProductID']))
{
$ProductID=$_GET['ProductID'];
$query1=mysql_query("DELETE FROM product WHERE ProductID='$ProductID'");
if($query1)
{
header('location:admin_products.php');
}
}
?>
</body>
</html>