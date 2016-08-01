<?php
/* @var $this base\View */
use widgets\Menu;

$this->title = '/TEST/MENU';

?>

TEST MENU
<br>
<br>
<strong>
<?= (new Menu($this->app))->show(); ?>
</strong>
