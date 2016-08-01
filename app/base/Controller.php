<?php

namespace base;

class Controller {

    public $id;
    public $app;
    public $view;
    public $layout;

    public function __construct($id, App $app) {
        $this->id = $id;
        $this->app = $app;
        $this->view = $app->view;
        $this->layout = @$app->layout;

        $this->_init();
    }

    protected function _init() {
    }

}
