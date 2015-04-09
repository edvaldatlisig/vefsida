<?php 
$config['dbuser'] = "0712982139"; //database user
$config['dbpass'] = "banana555"; //database password
$config['dbname'] = "0712982139_lokaverkefni"; //database we're connecting to
$config['dbhost'] = "tsuts.tskoli.is";

$db = new mysqli($config['dbhost'], $config['dbuser'], $config['dbpass'], $config['dbname']); //do not edit
if($db->connect_errno > 0){
    die("Database error: ".$db->connect_error);
}

// Breytur
$all['titill'] = "BMW";

function style(){
	echo'
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="font/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="css/screen.css" type="text/css">
';
}

function nav(){
	echo '	
	<nav class="navbar navbar-custom navbar-fixed-top one-page" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">BMW</a>
			</div>
			<div class="collapse navbar-collapse" id="custom-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="section-scroll"><i class="fa fa-home fa-2x"></i>
</a></li>
					<li><a href="index.php#features" class="section-scroll">Features</a></li>
					<li><a href="#about" class="section-scroll">About</a></li>
					<li><a href="#contact-form" class="section-scroll">Order</a></li>
					<li><a href="login.php" class=section-scroll">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>';
}

function script(){
	echo '
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javaskript" src="js/map.js"></script>
	<script type="text/javascript" src="js/preloader.js"></script> 
	<script type="text/javascript" src="js/scroll.js"></script>
	<script type="text/javascript" src="js/fun.js"></script>
	';
}
 ?>
