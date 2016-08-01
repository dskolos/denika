<?php

namespace base;

class View {

    public $title;

    public $app;

    public $params;

    public function __construct(App $app) {
        $this->app = $app;
    }

    public function render($view) {
        $content = $this->renderView($view);
        $content = $this->renderLayout($this->app->layout, $content);
        return $content;
    }

    public function renderView($view) {
        ob_start();
//        require($this->app->viewsDir . '\\' . $this->app->controller->id . '\\' . $view . '.php');
        require($this->app->viewsDir . '/' . $this->app->controller->id . '/' . $view . '.php');
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function renderLayout($layout, $content) {
        ob_start();
        require($this->app->layoutsDir . '\\' . $layout . '.php');
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}
