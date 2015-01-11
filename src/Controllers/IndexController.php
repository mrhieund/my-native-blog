<?php
/**
 *
 */
namespace controllers;

class IndexController extends Controller{
    public function indexAction() {
        $editableText = "Index Hello World!!";
        $this->render('editable', array('text' => $editableText));
        $notes = $this->renderPartial('notes');
        $this->render('form', array('notes' => $notes));
        $this->render('footer');
    }

    public function errorAction() {
        var_dump("Page not found");
    }
}