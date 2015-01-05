<?php
/**
 *
 */
namespace controllers;
class TestController {
    public function indexAction() {
        var_dump("Test Hello World!!");
        var_dump($_POST);
    }
}