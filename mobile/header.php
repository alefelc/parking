<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php header('Vary: Accept-Encoding'); ?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes"/>
<title>Estacionamiento Medido</title>
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="css/flexslider.css"/>
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link href="css/modal.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/gmap3.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/o-script.js"></script>
</head>
<body class="o-page">
<div id="page">
	<div id="header">
		<a href="#menu"><img src="img/menu.png" width="30" height="30"/></a>
		<span id="Logo" class="svg">
		<img src="img/logo.png"/>
		</span>
		<span class="backBtn call"><a href="tel:+13174562564"><img src="img/call.png" width="30" height="30"/></a></span>
	</div>