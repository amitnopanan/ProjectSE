<?php
session_start();
mysql_connect("127.0.0.1","root","");
mysql_select_db("projectse");
$Email = $_SESSION['Email'];
$strSQL = "SELECT * FROM user WHERE Email = 'Email' ";
?>

<!DOCTYPE html>
<html lang="en">

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
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-primary card-inverse">
                            <div class="card-header card-primary">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer card-default">
                                <a href="javascript:;">
                                    <span class="pull-xs-left">View Details</span>
                                    <span class="pull-xs-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-green card-inverse">
                            <div class="card-header card-green">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge">12</div>
                                        <div>Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer card-green">
                                <a href="javascript:;">
                                    <span class="pull-xs-left">View Details</span>
                                    <span class="pull-xs-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-yellow card-inverse">
                            <div class="card-header card-yellow">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge">124</div>
                                        <div>Products!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer card-yellow">
                                <a href="javascript:;">
                                    <span class="pull-xs-left">View Details</span>
                                    <span class="pull-xs-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </div>

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header card-default">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart
                            </div>
                            <div class="card-block">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

				<?php
				$conn = new mysqli("127.0.0.1", "root", "", "projectse");
				if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " .mysqli_connect_error();
				}
				// Search By Name or Email
				$sql = "SELECT user.*
				FROM user
				WHERE Type = 'customer'";
				$query = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
				$count = 0;				
				?>

                <div class="row">
				  <div class="col-xl-4 col-lg-12">
                        <div class="card card-default">
                            <div class="card-header card-default">
                                <i class="fa fa-user"></i> New User
                            </div>
                              <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Email</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
								<?php
								while($result = mysqli_fetch_array($query))
									{
								?>	
                                            <tr>
                                                <td>10/21/2013</td>
                                                <td><?php echo $result["Email"];?></td>
                                                <td><?php echo $result["FirstName"];?></td>
                                                <td><?php echo $result["LastName"];?></td>
                                            </tr>
								<?php } ?>	
                                        </tbody>	
                                    </table>
								<?php mysqli_close($conn); ?>												
                                </div>
                                <div class="text-xs-right">
                                    <a href="javascript:;">View All User <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card card-default">
                            <div class="card-header card-default">
                                <i class="fa fa-clock-o fa-fw"></i> Tasks Card
                            </div>
                            <div class="card-block">
                                <div class="list-group">
                                    <a href="javascript:;" class="list-group-item">
                                        <span class="label label-pill label-default pull-xs-right">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="javascript:;" class="list-group-item">
                                        <span class="label label-pill label-default pull-xs-right">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="javascript:;" class="list-group-item">
                                        <span class="label label-pill label-default pull-xs-right">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="javascript:;" class="list-group-item">
                                        <span class="label label-pill label-default pull-xs-right">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="javascript:;" class="list-group-item">
                                        <span class="label label-pill label-default pull-xs-right">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="javascript:;" class="list-group-item">
                                        <span class="label label-pill label-default pull-xs-right">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="javascript:;" class="list-group-item">
                                        <span class="label label-pill label-default pull-xs-right">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="javascript:;" class="list-group-item">
                                        <span class="label label-pill label-default pull-xs-right">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-xs-right">
                                    <a href="javascript:;">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card card-default">
                            <div class="card-header card-default">
                                <i class="fa fa-money fa-fw"></i> Transactions Card
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-xs-right">
                                    <a href="javascript:;">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
