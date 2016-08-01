<?php
/* @var $this base\View */

$this->title = '/TEST/SERVER';
?>

<div class="text">

    <h1><strong> <small>TEST</small> $_SERVER </strong></h1>

    <?php
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';

    ?>


</div>
