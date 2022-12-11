<!DOCTYPE html>
<html>
<head>
    <head>
        <meta content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link type="text/css" href="../public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../public/bootstrap/css/sb-admin.css" rel="stylesheet">
        <link type="text/css" href="../public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <style>   <?php include "../public/css/theme.css"; ?></style>
    <body>
        <div class="navbar navbar-fixed-top">          
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php"> &ensp; &ensp; &ensp;&ensp; Home</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                             Account &ensp; <i class="fa fa-user" class="nav-avatar"></i>
                                <?php 
								echo isset($_SESSION["account"]) ? $_SESSION["Username"] : "";
							    ?>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Information</a></li>
                                    <li><a href="index.php?act=logout">Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>   
        <div class="wrapper">                    
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">                                            	
                                <li class="active"><a href="index.php"><i class="fas fa-ellipsis-h"></i> &ensp; Dashboard</a>
                                </li>
                                <li><a href="index.php?controller=order/list"><i class="fas fa-dolly"></i> &ensp; Order Management</a>
                                </li>
                                <li><a href="index.php?controller=user/list"><i class="fas fa-user"></i> &ensp; User Management</a>
                                </li>
                                <li><a href="index.php?controller=blog/list"><i class="fas fa-pager"></i> &ensp; Blog Management</a>
                                </li>
                                <li><a href="index.php?controller=chart/chart"><i class="fas fa-chart-bar"></i>&ensp; Statistical Charts</a>
                                </li>
                                <li>
                                <a class="collapsed" data-toggle="collapse" href="#sp">
                                <i class="fas fa-bars"></i>&ensp; Product Management
                                </a>
                                    <ul id="sp" class="collapse unstyled">
                                        <li><a href="index.php?controller=hair/list"></i>Hair care</a></li>
                                        <li><a href="index.php?controller=skin/list"></i>Skin care</a></li>
                                        <li><a href="index.php?controller=makeup/list"></i>Makeup</a></li>
                                        <li><a href="index.php?controller=body/list"></i>Body care</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
             	    </div>
                </div>            
            </div>        
        <?php 
                	if(file_exists($controller))
                		include $controller;
                ?>                 
        </div>  
	    <script src="../public/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	    <script src="../public/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	    <script src="../public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</head>
