<?php

chdir(dirname(dirname(__FILE__)));

// Set localtime zone
date_default_timezone_set("America/Bogota");

// Memory limit
ini_set("memory_limit","256M");

// Run application
require_once("autoload.php");

try
{
	$config = include "config/application.config.php";
	$mvc = new Drone_Mvc_Application($config);
	$mvc->run();
}
catch (Drone_Mvc_PageNotFoundException $e)
{
	header('Location: ' . $config["environment"]["base_path"] . '/public/Utils/Router/notFound');
	exit();
}