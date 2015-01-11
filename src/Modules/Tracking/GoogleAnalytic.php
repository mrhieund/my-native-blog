<?php
namespace Modules\Tracking;

class GoogleAnalytic {

    public function loadScript() {
        $string =
            "<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            </script>";
        if (!isProduction()) {
            $string = '<!-- '. $string .'-->';
        }
        return $string;

    }

    public function create() {
        $id = 'UA-' . $this->_getId() . '-1';
        return $this->_initScript("ga('create', '" .$id. "', 'auto')");
    }

    public function view() {
        return $this->_initScript("ga('send', 'pageview');");
    }

    protected function _initScript($str) {
        $string = "<script>if (typeof(ga) != 'undefined'){%s}</script>";
        if (!isProduction()) {
            $string = '<!-- '. $string .'-->';
        }

        return sprintf($string, $str);
    }

    protected function _getId() {
        return '58442258';
    }
}