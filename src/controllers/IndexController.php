<?php
/**
 *
 */
namespace controllers;
class IndexController {
    public function indexAction() {
        $this->renderFile('header.php');
        var_dump("Index Hello World!!");
    }

    public function errorAction() {
        var_dump("Page not found");
    }

    public function renderFile($filePath, $needReturn = false) {
        $realPath = '..views/' . $filePath;
        $result = require($realPath);
        if ($needReturn)
            return $result;
        else echo $result;
    }
}