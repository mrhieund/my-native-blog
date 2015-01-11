<?php
include_once 'autoload.php';
include_once 'functions.php';
include_once 'config.php';
define("APPLICATION_PATH", dirname(__DIR__) .'/');

$env = empty($_SERVER['APPLICATION_ENV']) ? PRODUCTION : $_SERVER['APPLICATION_ENV'];
define("APPLICATION_ENV", $env);

$uri = $_SERVER['REQUEST_URI'];
list($controller, $action, $query) = parseUrl($uri);
$controllerClass = ucfirst($controller) . 'Controller';
$actionName = $action . 'Action';
$filePath = '../Controllers/' . $controllerClass . '.php';
if (isFileExist($filePath)) {
    require_once $filePath;
    $className = 'Controllers\\' . $controllerClass;
    $con = new $className;
    if (method_exists($con, $actionName))
        $con->$actionName();
    else pageNotFound();
} else pageNotFound();