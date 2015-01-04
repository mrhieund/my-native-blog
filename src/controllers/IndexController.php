<?php
/**
 *
 */
namespace controllers;
class IndexController {
    public function indexAction() {
        $this->renderFile('header');
        $editableText = "Index Hello World!!";
        $this->renderFile('editable', array('text' => $editableText));
        $this->renderFile('notes');
        $this->renderFile('footer');
    }

    public function errorAction() {
        var_dump("Page not found");
    }

    public function renderFile($filePath, array $data = array(), $needReturn = true) {
        $realPath = '../views/' . $filePath . '.php';
        $result = require($realPath);
        if ($needReturn)
            return $result;
        else echo $result;
    }
}