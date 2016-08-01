<?php
/* @var $this base\View */
/* @var $content */
use widgets\Menu;
use widgets\YanMet;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $this->title;?></title>
    <link rel="stylesheet" href="/css/site.css">
</head>
<body>
<div class="wrap">
    <header>
        <div class="content">
            <?= (new Menu($this->app))->show() ; ?>
            <a href="/"><img src="/images/chg_128x128.png" alt=""></a>
        </div>
    </header>
    <div class="content">
        <div class="container">
        <?= $content; ?>
        </div>
    </div>
    <footer class="content text-center">
        <div>
            &copy; 2016 &nbsp; &nbsp; &nbsp; <strong>Test task</strong>
        </div>
        <?= (new YanMet($this->app))->show() ; ?>
    </footer>
    <div class="content substrate">

    </div>
</div>
<script src="/js/jquery.1.11.1..min.js"></script>
<script src="/js/site.js"></script>
</body>
</html>
