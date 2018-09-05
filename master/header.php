<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="nothing">
    <meta name="keywords" content="none,none,none">
	<title><?php echo row['userName']; ?></title>
	<!-- Site favicon -->
	<link href="images/favicon.ico" rel="icon" sizes="32x32" type="image/png" /><!-- /site favicon --><!-- Material design icons stylesheet -->
	<link href="asset/css/material-design-iconic-font.min.css" rel="stylesheet" /><!-- /material design icons stylesheet --><!-- Owl carousel -->
	<link href="asset/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="asset/css/owl.theme.default.min.css" rel="stylesheet" /><!-- /owl carousel --><!-- Bootstrap stylesheet min version -->
	<link href="asset/css/bootstrap.min.css" rel="stylesheet" /><!-- /bootstrap stylesheet min version --><!-- REVOLUTION STYLE SHEETS -->
    <link href="asset/css/animate.css" rel="stylesheet" /><!-- /animated css stylesheet --><!-- clevex core stylesheet -->
	<link href="asset/css/clevex-core.css" rel="stylesheet" /><!-- /clevex core stylesheet -->
	<link href="asset/css/clevex-forms.css" rel="stylesheet" /><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]--><!--Load JQuery--><script src="asset/js/jquery.min.js"></script><!-- REVOLUTION JS FILES -->
</head>
<body><!--Site-->
<div class="site"><!--Site header-->
<header class="site-header"><!-- START NAVBAR -->
<nav class="navbar navbar-default" data-offset-top="1" data-spy="affix">
<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header"><button aria-expanded="false" class="navbar-toggle toggle-menu collapsed" data-target="#mobile-view" data-toggle="collapse" type="button"></button>
<a class="site-logo" href="home.php"><img alt="Logo" class="img-responsive" src="images/logo.png" /> </a></div>
<!-- Collect the nav links, forms, and other content for toggling -->

<div class="collapse navbar-collapse" id="mobile-view">
<div class="main-navigation clearfix">
<div class="navbar-left">
<form class="search-bar right-side-icon hidden">
<div class="form-group"><input class="form-control" placeholder="" type="search" /><button class="search-icon"></button></div>
</form>

<ul class="nav navbar-nav">
	<li class="active"><a href="home.php">Home</a></li>

		
	<li><a href="#">UI Elements</a></li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">DropDown</a>
	<ul class="dropdown-menu">
		<li><a href="#">Register</a></li>
		<li><a href="logout.php">Log Out</a></li>
		
	</ul>
	</li>

</ul>
</div>

<div class="navbar-right user-navbar">
<div class="dropdown user-info"><a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button"><img alt="Profile Picture" class="img-sm" src="images/domnic-harris.jpg" /> <span class="user-name">Domnic Harris</span> </a>

<div class="dropdown-menu drop-menu-list animation animated flipCenter">
<div class="dropdown-menu-header">
<h3 class="title">welcome</h3>

<h3 class="user-name">Domnic Harris</h3>
</div>

<div class="dropdown-menu-body">
<ul class="list-unstyled">
	<li class="active"><a href="home.php">My Account</a></li>
	<li><a href="javascript:void(0)">My Orders</a></li>

</ul>
<a class="btn btn-primary btn-sm text-uppercase" href="logout.php">Logout</a></div>
</div>
</div>

<ul class="social-link hidden">
	<li></li>
	<li></li>
	<li></li>
</ul>

<ul class="notification-list">
	<li class="dropdown">
	<form class="dropdown-menu dropdown-menu-right nav-searchbox animation animated flipCenter">
	<div class="search-bar default-radius form-group"><input class="form-control no-border input-lg bg-grey lighten-4" placeholder="Search..." type="search" /><button class="search-icon"></button></div>
	</form>
	</li>
	<li class="dropdown">
	<div class="dropdown-menu dropdown-menu-right drop-menu-list animation animated flipCenter">
	<div class="dropdown-menu-header">
	<h3 class="title">current cart items <span class="badge bg-grey lighten-1">5</span></h3>
	</div>

	<div class="dropdown-menu-body">
	<ul class="price-list list-unstyled">
		<li><span class="tag-name"><a href="javascript:void(0)">Ecma T-Shirt XL Blue (1)</a></span> <span class="price">₹215.00</span></li>
		<li><span class="tag-name"><a href="javascript:void(0)">Jiggle Diggle Camp (2)</a></span> <span class="price">₹370.00</span></li>
	</ul>
	<a class="btn btn-primary btn-sm text-uppercase" href="lockscreen.html">go to cart</a></div>
	</div>
	</li>
	<li class="dropdown">
	<div class="dropdown-menu dropdown-menu-right drop-menu-list animation animated flipCenter">
	<div class="dropdown-menu-header">
	<h3 class="title">30+ Unread Notifications</h3>
	</div>

	<div class="dropdown-menu-body">
	<ul class="user-notification list-unstyled">
		<li><img alt="..." class="img-circle img-sm" src="images/jimmy-jo.jpg" /> <a href="javascript:void(0)">Alex has sent you an invitation</a></li>
		<li><img alt="..." class="img-circle img-sm" src="images/stella-johnson.png" /> <a href="javascript:void(0)">Event invitation from Joshua</a></li>
	</ul>
	<a class="btn btn-primary btn-sm text-uppercase" href="lockscreen.html">view all</a></div>
	</div>
	</li>
</ul>
</div>
</div>
</div>
<!-- /.navbar-collapse --></div>
<!-- /.container-fluid --></nav>
<!-- END NAVBAR --><!-- START REVOLUTION SLIDER -->