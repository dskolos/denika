<?php
/* @var $this base\View */
use models\Article;

$this->title = '/TEST/ARTICLE';
?>

<div class="text">

    <strong> TEST ARTICLE </strong>
    <br>
    <br>
<?php

$articleModel = new Article($this->app);

$articles = $articleModel->getAll();

echo '<pre>';
var_dump($articles);
echo '</pre>';

?>




</div>
