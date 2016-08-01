<?php

namespace base;

use controllers\SiteController;

class App {

    public $appDir;
    public $baseDir;
    public $controllersDir;
    public $viewsDir;
    public $layoutsDir;

    private $__dataBase;

    public $view;
    public $layout = 'main';

    public $controller;
    public $controllerError = false;

    public $action;

    public $userId = 0;


    public function __construct($db) {

        $this->appDir = dirname(__DIR__);
        $this->baseDir = __DIR__;
        $this->controllersDir = $this->appDir . '\\controllers';
        $this->viewsDir = $this->appDir . '\\views';
        $this->layoutsDir = $this->appDir . '\\views\\layouts';

        $this->__dataBase = new DataBase($db);

        $this->view = new View($this);

        $controllerId = 'site';
        $actionName = 'index';

        $route = explode('/', $_SERVER['REDIRECT_URL']);

        if (is_numeric($route[1])) {
            $this->userId = (int)$route[1];
            $route[1] = null;
            $route[2] = null;
        }

        if ($route[1] && !('' == $route[1])) {
            $controllerId = $route[1];
        }
        if ($route[2] && !('' == $route[2])) {
            $actionName = $route[2];
        }

        $this->action = $actionName . 'Action';

        $this->controller = Loader::getController($controllerId, $this);

    }

    public function getConnection() {
        return $this->__dataBase->getConnection();
    }


    public function run() {

        if ($this->controllerError) {
            echo $this->controller->errorAction();
        }

        if (method_exists($this->controller, $this->action)) {
            echo $this->controller->{$this->action}();
        } else {
            $this->controller = new SiteController('site', $this);
            echo $this->controller->errorAction();
        }

    }

}
