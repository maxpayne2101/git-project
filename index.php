<?php

	ini_set('display_errors', 1);
	$routes = explode('/', $_SERVER['REQUEST_URI']);
	if ($routes[1] === "administrator") {
		require_once 'admin/bootstrap.php';
	}else{
		require_once 'web/bootstrap.php';
	}
	
?>