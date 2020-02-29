<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="../bootstrap/css/theme.css" rel="stylesheet">
        <link type="text/css" href="../bootstrap/img/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="../index.php">AHR-Pos </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
<!--                        <ul class="nav nav-icons">-->
<!--                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>-->
<!--                            <li><a href="#"><i class="icon-eye-open"></i></a></li>-->
<!--                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>-->
<!--                        </ul>-->
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
<!--                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown-->
<!--                                <b class="caret"></b></a>-->
<!--                                <ul class="dropdown-menu">-->
<!--                                    <li><a href="#">Item No. 1</a></li>-->
<!--                                    <li><a href="#">Don't Click</a></li>-->
<!--                                    <li class="divider"></li>-->
<!--                                    <li class="nav-header">Example Header</li>-->
<!--                                    <li><a href="#">A Separated link</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../bootstrap/img/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="../index.php"><i class="menu-icon icon-dashboard"></i>Dashboard</a></li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                        </i>Products </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="showProduts.php"><i class="icon-inbox"></i>List Products</a></li>
                                        <li><a href="../frontend/add_products.php"><i class="icon-inbox"></i>Add Products</a></li>
                                        <li><a href="../frontend/add_category.php"><i class="icon-inbox"></i>Category Products</a></li>
                                    </ul>
                                </li>

                                <ul class="widget widget-menu unstyled">
                                    <li><a class="collapsed" data-toggle="collapse" href="#togglePurchasePages"><i class="menu-icon icon-cog">
                                            </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                            </i>Purchase </a>
                                        <ul id="togglePurchasePages" class="collapse unstyled">
                                            <li><a href="showPurchase.php"><i class="icon-inbox"></i>List Purchase</a></li>
                                            <li><a href=""><i class="icon-inbox"></i>Add Purchase</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="widget widget-menu unstyled">
                                    <li><a class="collapsed" data-toggle="collapse" href="#toggleSalePages"><i class="menu-icon icon-cog">
                                            </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                            </i>Sale </a>
                                        <ul id="toggleSalePages" class="collapse unstyled">
                                            <li><a href="showPurchase.php"><i class="icon-inbox"></i>List of Sale</a></li>
                                            <li><a href=""><i class="icon-inbox"></i>Add New Sale</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </ul>

                            <!--/.widget-nav-->

                            <ul class="widget widget-menu unstyled">
                                <li><a href=""><i class="menu-icon icon-bullhorn"></i>Customer</a></li>
                                <li><a href=""><i class="menu-icon icon-inbox"></i>Stock</a></li>
                                <li><a href=""><i class="menu-icon icon-tasks"></i>Report</a></li>
                            </ul>
                            <!--/.widget-nav-->

                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#toggleExpensePages"><i class="menu-icon icon-cog">
                                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                        </i>Expense</a>
                                    <ul id="toggleExpensePages" class="collapse unstyled">
                                        <li><a href="showPurchase.php"><i class="icon-inbox"></i>List Expense</a></li>
                                        <li><a href=""><i class="icon-inbox"></i>Add Expense</a></li>
                                    </ul>
                                </li>
                                <li><a href=""><i class="menu-icon icon-tasks"></i>Users</a></li>
                            </ul>
                            <!--/.widget-nav-->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->