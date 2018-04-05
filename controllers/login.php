<?php
	include_once("core/Users.php");
	include 'core/functions.php';

	if (Users::loggedin()) 
	{
		redirect('dashboard');
		exit();

	}
	$clean = [];
	if (isset($_POST['btn-login'])) 
	{
		if (ctype_alnum($_POST['uname']) || ctype_alpha($_POST['uname'])){
			$clean['username'] = htmlentities($_POST['uname'], ENT_QUOTES, 'UTF-8');
			$clean['password'] = htmlentities($_POST['upass'], ENT_QUOTES, 'UTF-8');
			
			$userlogin = new Users($app['config']['database']);
			if ($userlogin->verifylogin($clean)){
				session_start();
				$_SESSION['enjin_session'] = $userlogin->getUserID();
        		$_SESSION['username'] = $clean['username'];
				redirect('dashboard');
			}else{
				$error['message'] = 'please check your username and password';
			 	redirect('/');
			 	require 'views/login.php';
			 	exit();
			}
		}else{
			
			$error['message'] = 'please check your username and password no special characters are allowed!';
			 require 'views/login.php';
			 exit();
		}
	}else{
		$title = 'login';
		require 'views/login.php';
	}
