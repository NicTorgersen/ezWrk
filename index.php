<?php
	/*error_reporting(E_ALL ^ E_STRICT);
	ini_set('display_errors', true);
	ini_set('display_startup_errors', true);*/
	
	// set default controller and action
	if (!isset($_GET['do'])) {
		$do = 'home/index';
	} else {
	// execute a controller with a given action
		$do = $_GET['do'];
	}
	require_once("tools/Config.tool.php");
	require_once("autoload.php");
    require_once("vendor/autoload.php");
	$app = new \ezWrk\Application($do);
	$app->run();