<?php

namespace controllers;

use base\Controller;

class ArticleController extends Controller {

    public function indexAction() {

        return $this->view->render('index');
    }

    public function addAction() {

        return $this->view->render('add');
    }


}
