<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "router.php";

echo "Success";
echo "REQUESTED: " . $_SERVER['REQUEST_URI'];
/*
$router = new Router();
$router->get("/" , "/index.php");
$router->get("about", "/about.php");

$uri = $router->dispatch($_SERVER['REQUEST_URI'] , $_SERVER['REQUEST_METHOD']);
echo "requiring : " . $uri;
request_once $uri;
*/
?>
