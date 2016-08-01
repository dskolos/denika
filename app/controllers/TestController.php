<?php

namespace controllers;

use base\Controller;

class TestController extends Controller {

//    protected function _init() {
//        $this->app->layout =  'second';
//    }

    public function indexAction() {
        return $this->view->render('index');
    }

    public function moreAction() {
        return $this->view->render('more');
    }

    public function widgetAction() {
        return $this->view->render('widget');
    }

    public function menuAction() {
        return $this->view->render('menu');
    }

    public function userAction() {
        return $this->view->render('user');
    }

    public function articleAction() {
        return $this->view->render('article');
    }

    public function dbAction() {
        return $this->view->render('db');
    }

    public function noteAction() {
        return $this->view->render('note');
    }

    public function noteaddAction() {
        return $this->view->render('noteadd');
    }

    public function serverAction() {
        return $this->view->render('server');
    }


}

