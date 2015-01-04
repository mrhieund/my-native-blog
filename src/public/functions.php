<?php
const LOG_FOLDER = '../log/';
function mylog($msg, $fileName = 'system.log') {
    file_put_contents(LOG_FOLDER . $fileName, $msg . PHP_EOL, FILE_APPEND | LOCK_EX);
}

function parseUrl($uri) {
    $component = parse_url($uri);
    $path = $component['path'];
    $path = substr($path, 1);
    $pathComponent = explode('/', $path);
    $controller = empty($pathComponent[0]) ? 'index' : $pathComponent[0];
    $action = empty($pathComponent[1]) ? 'index' : $pathComponent[1];
    $query = empty($component['query']) ? '' : $component['query'];
    return array($controller, $action, $query);
}

function isFileExist($filePath) {
    return file_exists($filePath);
}

function pageNotFound() {
    $indexClass = 'controllers\\IndexController';
    $actionName = 'errorAction';
    require_once 'controllers/IndexController.php';
    $controller = new $indexClass;
    $controller->$actionName();
}