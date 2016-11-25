<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Админка</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/admin/static/css/style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/administrator">Админка</span> </a>
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
			
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first active"><a href="/administrator">Главная</a></li>
							<li><a href="/administrator/menu">Меню</a></li>
							<li><a href="/administrator/users">Пользователи</a></li>
							<li class="last"><a href="/administrator/goods">Товары</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">

						<?php include 'admin/views/'.$content_view; ?>
						
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			
		</div>
		<div id="footer">
			<a href="/administrator">ADMINISTRATOR</a>
		</div>
	</body>
</html>