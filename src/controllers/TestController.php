<?php
namespace controllers;

include_once 'autoload.php';
use Modules\Storage\File;

class TestController {
    public function indexAction() {
        var_dump("Test Hello World!!");
        $file = new File(array('file_name' => 'test.txt'));
        $file->save($_POST);
        var_dump($_POST);
    }
}