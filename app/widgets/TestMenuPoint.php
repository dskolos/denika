<?php

namespace widgets;
use base\Widget;

class TestsMenuPoint extends Widget {

    public function show() {
        $this->_run();
        return null;
    }

    protected function _run() {
        ?>
        <?php $class = (
            in_array($_SERVER['REDIRECT_URL'], [
                '/test/index',
                '/test/menu',
                '/test/more',
                '/test/widget',
                '/test/user',
                '/test/article',
                '/test/db',
                '/test/note',
                '/test/noteadd',
                '/test/server',
            ])
        ) ? ' class="menu active"' : ' class="menu"'; ?>
        <li<?=$class;?>><a href="<?='/test/index'?>">TESTS <small>(SWITCH OFF on RELEASE)</small></a>
            <ul class="submenu">
                <?php $class = ('/test/server' == $_SERVER['REDIRECT_URL']) ? ' class="active"' : ''; ?>
                <li<?=$class;?>><a href="<?='/test/server'?>">server</a></li>

                <?php $class = ('/test/note' == $_SERVER['REDIRECT_URL']) ? ' class="active"' : ''; ?>
                <li<?=$class;?>><a href="<?='/test/note'?>">note</a></li>

                <?php $class = ('/test/noteadd' == $_SERVER['REDIRECT_URL']) ? ' class="active"' : ''; ?>
                <li<?=$class;?>><a href="<?='/test/noteadd'?>">noteadd</a></li>

                <?php $class = ('/test/db' == $_SERVER['REDIRECT_URL']) ? ' class="active"' : ''; ?>
                <li<?=$class;?>><a href="<?='/test/db'?>">db</a></li>

                <?php $class = ('/test/user' == $_SERVER['REDIRECT_URL']) ? ' class="active"' : ''; ?>
                <li<?=$class;?>><a href="<?='/test/user'?>">user</a></li>

                <?php $class = ('/test/article' == $_SERVER['REDIRECT_URL']) ? ' class="active"' : ''; ?>
                <li<?=$class;?>><a href="<?='/test/article'?>">article</a></li>

                <?php $class = ('/test/widget' == $_SERVER['REDIRECT_URL']) ? ' class="active"' : ''; ?>
                <li<?=$class;?>><a href="<?='/test/widget'?>">widget</a></li>
                <?php $class = ('/test/more' == $_SERVER['REDIRECT_URL']) ? ' class="active"' : ''; ?>
                <li<?=$class;?>><a href="<?='/test/more'?>">more</a></li>
                <?php $class = ('/test/menu' == $_SERVER['REDIRECT_URL']) ? ' class="active"' : ''; ?>
                <li<?=$class;?>><a href="<?='/test/menu'?>">menu</a></li>
            </ul>
        </li>
        <?php
    }

}
