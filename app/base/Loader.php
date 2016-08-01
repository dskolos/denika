<?php

namespace base;

use controllers\SiteController;

class Loader {

    static function getApp() {
        require_once('App.php');
        require_once('DataBase.php');
        require_once('Controller.php');
        require_once('View.php');
        require_once('Widget.php');
        require_once('Model.php');
        require_once(__DIR__ . '/../controllers/SiteController.php');
        require_once(__DIR__ . '/../widgets/Menu.php');
        require_once(__DIR__ . '/../widgets/TestMenuPoint.php');
        require_once(__DIR__ . '/../widgets/YanMet.php');
        require_once(__DIR__ . '/../models/User.php');
        require_once(__DIR__ . '/../models/Article.php');
        require_once(__DIR__ . '/../models/Note.php');

        $db = require(__DIR__ . '/../config/db.php');

        return new App($db);
    }

    static function getController($controllerId, App $app) {
        $controllerName = ucfirst($controllerId) . 'Controller';
        $controllerLoadName = __DIR__ . '/../controllers/' . $controllerName . '.php';

        if (file_exists($controllerLoadName)) {
            require_once($controllerLoadName);
            $controllerFullName = 'controllers\\' . $controllerName;
            return new $controllerFullName($controllerId, $app);
        } else {
            $app->controllerError = true;
            $app->action = 'error';
            return new SiteController('site', $app);
        }

    }

}
