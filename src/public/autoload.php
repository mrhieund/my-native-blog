<?php

spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register('autoload');

function autoload($class) {
    $class = str_replace('\\', '/', $class);
    require_once '../'.  ucfirst($class) . '.php';
}