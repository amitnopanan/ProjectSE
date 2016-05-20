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
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggler hidden-sm-up pull-sm-right" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    &#9776;
                </button>
                <a class="navbar-brand" href="admin_main.php">Admin System</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-nav top-nav navbar-right pull-xs-right">
                <li class="dropdown nav-item active">
                    <!-- <div class="dropdown"> -->
                        <a class="nav-link dropdown-toggle" href="javascript:;" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope"></i> <b class="caret"></b><span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="dropdown-item message-preview">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="media-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong><?php echo $Email ?></strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-item message-preview">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="media-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong><?php echo $Email ?></strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-item message-preview">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="media-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong><?php echo $Email ?></strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-item message-footer">
                                <a href="javascript:;">Read All New Messages</a>
                            </li>
                        </ul>
                    <!-- </div> -->
                </li>
                <li class="dropdown nav-item">
                    <!-- <div class="dropdown"> -->
                        <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i> <b class="caret"></b><span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-default"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-primary"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-success">Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-info"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-warning"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-danger"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a href="javascript:;">View All</a>
                            </li>
                        </ul>
                    <!-- </div> -->
                </li>
                <li class="dropdown nav-item">
                    <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $Email ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="admin_information.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:;"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:;"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-item">
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-toggleable-sm navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav list-group">
                    <li class="list-group-item">
                        <a href="admin_main.php"><i class="fa fa-fw fa-bar-chart-o"></i> Dashboard</a>
                    </li>
                    <li class="list-group-item">
                        <a href="admin_products.php"><i class="fa fa-fw fa-dashboard"></i> Products</a>
                    </li>
                    <li class="list-group-item">
                        <a href="admin_orders.php"><i class="fa fa-fw fa-table"></i> Orders</a>
                    </li>
                    <li class="list-group-item">
                        <a href="admin_promotions.php"><i class="fa fa-fw fa-edit"></i> Promotion</a>
                    </li>
                    <li class="list-group-item">
                        <a href="admin_gallery.php"><i class="fa fa-fw fa-desktop"></i> Gallery</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add <small>Products</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-shopping-cart fa-2x"></i> Products
                            </li>
                        </ol>
                    </div>
                </div>	
<?php
//get product ID from ProductID that we select from admin_products.php
if(isset($_GET['ProductID']))
{
$ProductID=$_GET['ProductID'];
if(isset($_POST['submit']))
{
$ProductName=$_POST['ProductName'];
$Price=$_POST['Price'];
$Quantity=$_POST['Quantity'];
$ProductType=$_POST['ProductType'];
$PictureURL=$_POST['PictureURL'];
//Use sql to update values in to product table 
$query3=mysql_query("UPDATE product SET ProductName='$ProductName', Price='$Price', Quantity='$Quantity', ProductType='$ProductType', PictureURL='$PictureURL' WHERE ProductID='$ProductID'");
if($query3)
{
    //Print Out Update done! And provide like to go back to Product page(admin_products.php)
echo 'Update Done! ';
echo '<a href= "admin_products.php"> Back to Product Page</a>';
}
}
$query1=mysql_query("select * from product where ProductID='$ProductID'");
$query2=mysql_fetch_array($query1);
?>
<!--in every box will show the date of it which is user can see and edit but if user delete in the data and didn’t put any data or put the wrong type of data it will show error -->
<form method="post" action="">
	Product Name: <br><input type="text" required autocomplete="on" name="ProductName" value="<?php echo $query2['ProductName'] ?>"><br>
	Price:<br><input type="number"  name="Price" value="<?php echo $query2['Price'] ?>"><br>
	Quantity:<br><input type="number" required autocomplete="on"  name="Quantity" value="<?php echo $query2['Quantity'] ?>"> <br>
	Product Type:<br>
	<select name="ProductType" >
	<option value="<?php echo $query2['ProductType'] ?>" >-------Product Type-------</option>
	<option value="Cosmetics_Faces">Cosmetics Faces</option>
	<option value="Cosmetics_Eye&EyeBrow">Cosmetics Eye&EyeBrow</option>
	<option value="Cosmetics_Lips&Cheek">Cosmetics Lips&Cheek</option>
	<option value="Skincare_Lotion&Emulsion">Skincare Lotion&Emulsion</option>
	<option value="Skincare_Cream">Skincare Cream</option>
	<option value="DietarySupplement">DietarySupplement</option>
	</select><br>
	Picture URL:<br><input type="url" required autocomplete="on" name="PictureURL" value="<?php echo $query2['PictureURL'] ?>"> <br>
    <!--//this button use if user want to recover the data that they change but didn’t update yet -->
    <button class="submitbtn">Recover</button>
    <!--//this button use to update data into database -->
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>