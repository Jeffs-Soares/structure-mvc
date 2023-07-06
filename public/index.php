<?php 
use Jeff\Project\Controller\Error404Controller;

require_once __DIR__ . "/../vendor/autoload.php";

$routes = require __DIR__ . "/../config/routes.php";
$pdo = require_once __DIR__ . "/../config/conn.php";


session_start();
session_regenerate_id();

$pathInfo = $_SERVER["PATH_INFO"] ?? "/";
$httpMethod = $_SERVER["REQUEST_METHOD"];

$key = "$httpMethod|$pathInfo";

if(array_key_exists($key, $routes)){
    
    $controllerClass = $routes[$key];
    $controller = new $controllerClass();
}else{
    
    $controller = new Error404Controller();
}

$controller ->processRequest();

?>