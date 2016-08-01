<?php
/* @var $this base\View */
use models\User;

$this->title = '/TEST/USER';
?>

<div class="text">

    <strong> TEST USER </strong>
    <br>
    <br>

    <strong>Total users: </strong>

<?php

$model = new User($this->app);

$count = $model->getTotalCount();

echo $count;


$users = $model->getAll();

//echo '<pre>';
//var_dump($users);
//echo '</pre>';

?>
    <h3>All users:</h3>
<?php
    foreach ($users as $user) {
        foreach ($user as $key => $value) {
            echo $key . ' : ' . $value . ' &nbsp; | &nbsp; ';
        }
        echo '<br>';
    }
?>





</div>
