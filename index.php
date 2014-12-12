<?php
	/*error_reporting(E_ALL ^ E_STRICT);
	ini_set('display_errors', true);
	ini_set('display_startup_errors', true);*/

	// variables from url
	$vars = array();

	// set default controller and action
	if (!isset($_GET['controller'], $_GET['action'])) {
		$vars['controller'] = 'home';
		$vars['action'] = 'index';
	} else {
	// execute a controller with a given action
		$vars['controller'] = $_GET['controller'];
		$vars['action'] = $_GET['action'];
	}

	require_once("autoload.php");
    require_once("vendor/autoload.php");
	require_once("config.php");

	$app = new Application($vars['controller'], $vars['action']);
	$app->run();