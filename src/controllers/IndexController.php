<?php
/**
 *
 */
namespace controllers;
use Modules\Tracking\GoogleAnalytic;

class IndexController {
    public function indexAction() {
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        $this->render('header');
        $tracking = new GoogleAnalytic();
        $script = $tracking->loadScript();
        $create = $tracking->create();
        $view = $tracking->view();
        $this->render('tracking', array('script' => $script, 'create' => $create, 'view' => $view));
        $editableText = "Index Hello World!!";
        $this->render('editable', array('text' => $editableText));
        $notes = $this->renderPartial('notes');
        $this->render('form', array('notes' => $notes));
        $this->render('footer');
    }

    public function errorAction() {
        var_dump("Page not found");
    }

    public function renderPartial($viewFile, $data = null) {
        return $this->_renderFile($viewFile, $data);
    }

    public function render($viewFile, $data = null) {
        return $this->_renderFile($viewFile, $data, false);
    }

    protected function _renderFile($_viewFile_, $_data_ = null, $_return_ = true) {
        $_viewFile_ = $this->_getViewFile($_viewFile_);
        // we use special variable names here to avoid conflict when extracting data
        if(is_array($_data_))
            extract($_data_,EXTR_PREFIX_SAME,'data');
        else
            $data=$_data_;
        if($_return_)
        {
            ob_start();
            ob_implicit_flush(false);
            require($_viewFile_);
            return ob_get_clean();
        }
        else
            require($_viewFile_);
    }

    protected function _getViewFile($viewFile) {
        return '../views/' . $viewFile . '.php';
    }
}