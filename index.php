<?php

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	// start the session
	session_start();

	// include config
	require 'config.php';
	
	require 'classes/Messages.php';
	require 'classes/Bootstrap.php';
	require 'classes/Controller.php';
	require 'classes/Model.php';	

	require 'controllers/home.php';
	require 'controllers/users.php';
	require 'controllers/shares.php';

	require 'models/home.php';
	require 'models/user.php';
	require 'models/share.php';
	
	$bootstrap = new Bootstrap($_GET);
	$controller = $bootstrap->createController();	
	if($controller){
		$controller->executeAction();
	}