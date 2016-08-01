<?php

namespace widgets;
use base\Widget;

class Menu extends Widget {

    protected function _run() {
        ?>
        <div class="top-menu">
            <ul>
                <?php $class = (
                    '' == $_SERVER['REDIRECT_URL']
                    || $this->app->userId > 0
                ) ? ' class="active"' : '';
                ?>
                <li<?=$class;?>><a href="/">All users</a></li>

                <?php $class = (
                    '/user' == $_SERVER['REDIRECT_URL']
                    || '/user/add' == $_SERVER['REDIRECT_URL']
                ) ? ' class="active"' : '';
                ?>
                <li<?=$class;?>><a href="<?='/user/add'?>">Add user</a></li>

                <?php $class = (
                    '/article' == $_SERVER['REDIRECT_URL']
                    || '/article/add' == $_SERVER['REDIRECT_URL']
                ) ? ' class="active"' : '';
                ?>
                <li<?=$class;?>><a href="<?='/article/add'?>">Add article</a></li>

                <?php $class = (
                    '/site/about' == $_SERVER['REDIRECT_URL']
                ) ? ' class="active"' : '';
                ?>
                <li<?=$class;?>><a href="<?='/site/about'?>">About</a></li>

                <?php (new TestsMenuPoint($this->app))->show() ?>

            </ul>
        </div>
        <?php
    }
}