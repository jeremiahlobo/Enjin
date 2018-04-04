<?php
	include_once("core/Users.php");
	include 'core/functions.php';

	Users::logout();
	redirect('login');
?>