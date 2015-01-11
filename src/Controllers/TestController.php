<?php
namespace controllers;

use Modules\Storage\File;

class TestController extends Controller {
    public function indexAction() {
        var_dump("Test Hello World!!");
        $file = new File(array('file_name' => 'test.txt'));
        $file->save($_POST);
        $a = $file->load(1);
    }
}