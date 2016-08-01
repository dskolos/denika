<?php
/* @var $this base\View */
use base\Widget;

$this->title = '/TEST/WIDGET';
?>

TEST WIDGET
<br>
<br>
<strong>
<?= (new Widget($this->app))->show(); ?>
</strong>
