<?php

namespace base;

class Widget {

    public $app;

    public function __construct(App $app) {
        $this->app = $app;
    }

    public function show() {
        ob_start();
        $this->_run();
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    protected function _run() {
        ?>WIDGET<?php
    }

}
