<?php
include_once 'functions.php';
$uri = $_SERVER['REQUEST_URI'];
list($controller, $action, $query) = parseUrl($uri);
$controllerClass = ucfirst($controller) . 'Controller';
$actionName = $action . 'Action';
$filePath = '../controllers/' . $controllerClass . '.php';
if (isFileExist($filePath)) {
    require_once $filePath;
    $className = 'controllers\\' . $controllerClass;
    $con = new $className;
    if (method_exists($con, $actionName))
        $con->$actionName();
    else pageNotFound();
} else pageNotFound();