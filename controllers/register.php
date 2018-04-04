<?php
	include_once("core/Users.php");
	include 'core/functions.php';

	if (Users::loggedin()) 
	{
		redirect('dashboard');
		exit();
	}
	$clean = [];
	if (isset($_POST['btn-register'])) 
	{
		if (ctype_alnum($_POST['uname']) || ctype_alpha($_POST['uname'])){
			$clean['username'] = htmlentities($_POST['uname'], ENT_QUOTES, 'UTF-8');
			$clean['email'] = htmlentities($_POST['umail'], ENT_QUOTES, 'UTF-8');
			$clean['password'] = htmlentities($_POST['upass'], ENT_QUOTES, 'UTF-8');
			$userregister = new Users($app['config']['database']);
			if ($userregister->register($clean)){
				redirect('login');
			}else{
				$error['message'] = 'please check your username and password';
			 	redirect('/');
			 	require 'views/login.php';
			 	exit();
			}
		}else{
			$error['message'] = 'please check your username and password no special characters are allowed!';
			 require 'controllers/login.php';
			 exit();
		}
	}else{
		
		$title = 'register';
		require 'views/register.php';
	}