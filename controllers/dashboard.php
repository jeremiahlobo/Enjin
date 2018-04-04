<?php
	include_once("core/Users.php");
	include 'core/functions.php';
	
	session_start();
	if(Users::loggedin())
	{
		$userlogin = new Users($app['config']['database']);
		$title = 'Dashboard';
		$username = $_SESSION['username'];
		require 'views/dashboard.php';
	}else {
		
		redirect('login');
	}


