<?php
/**
 *
 */
namespace controllers;
class IndexController {
    public function indexAction() {
        var_dump("Index Hello World!!");
    }

    public function errorAction() {
        var_dump("Page not found");
    }
}