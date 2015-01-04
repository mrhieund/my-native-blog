<?php
/**
 *
 */
namespace controllers;
class IndexController {
    public function indexAction() {
        $this->renderFile('header.php');
        var_dump("Index Hello World!!");
        $this->renderFile('footer.php');
    }

    public function errorAction() {
        var_dump("Page not found");
    }

    public function renderFile($filePath, $needReturn = true) {
        $realPath = 'views/' . $filePath;
        $result = require($realPath);
        if ($needReturn)
            return $result;
        else echo $result;
    }
}