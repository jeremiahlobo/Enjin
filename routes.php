<?php
/**
 * lisitng routes
 */
$router->define([
	
		'' => 'controllers/login.php',
		'login' => 'controllers/login.php',
		'register' => 'controllers/register.php',
		'dashboard'=>'controllers/dashboard.php',
		'logout' => 'controllers/logout.php'
	]);