<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Control Panel</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="icon" href="../../../images/icon.jpg" sizes="16x16" type="image/jpg">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0px">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="background-color: #e5b68a;" href="index.php">Control panel</a>
            </div>
            <!-- <label style="margin-right:40px;color:white;margin-left:800px;margin-top:18px;">Welcome User</label> -->
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px; display: flex;">
                <a href="../index.php" style="background-color: #e5b68a;" class="btn btn-success square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" style="background-color: #f6f6f6;">
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Control panel</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-users"></i> Users</a>
                    </li>
                    <li>
                        <a href="categories.php"><i class="fa fa-tasks"></i> Categories</a>
                    </li>
                    <li>
                        <a href="product.php"><i class="fa fa-bars"></i> Products</a>
                    </li>
                    <li>
                        <a href="package.php"><i class="fa fa-bars"></i> Package</a>
                    </li>
                </ul>
            </div>
        </nav>