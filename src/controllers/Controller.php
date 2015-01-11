<?php
namespace controllers;
use Modules\Tracking\GoogleAnalytic;

class Controller {
    public function __construct() {
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        $this->render('header');
        $tracking = new GoogleAnalytic();
        $script = $tracking->loadScript();
        $create = $tracking->create();
        $view = $tracking->view();
        $this->render('tracking', array('script' => $script, 'create' => $create, 'view' => $view));
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