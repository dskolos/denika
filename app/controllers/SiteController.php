<?php

namespace controllers;

use base\Controller;

class SiteController extends Controller {

    public function indexAction() {
        return $this->view->render('index');
    }

    public function skyAction() {
        return $this->view->render('sky');
    }

    public function aboutAction() {
        return $this->view->render('about');
    }

    public function errorAction() {
        return $this->view->render('error');
    }

}
