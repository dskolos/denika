<?php
/* @var $this base\View */
use models\Note;

$this->title = '/TEST/NOTE';
?>

<div class="text">

    <h1><strong> <small>TEST</small> Note </strong></h1>

    <?php
    $model = new Note($this->app);
    ?>

    <h3>Columns:</h3>

    <?php
    $columns = $model->getColumns();
    foreach ($columns as $element) {
        foreach ($element as $key => $value) {
            echo $key . ' : ' . $value . ' | ';
        }
        echo '<br>';
    }
    echo '<br>';
    ?>

    <strong>Total count: </strong>

    <?php
    $count = $model->getTotalCount();
    echo $count;
    $notes = $model->getAll();
    ?>

    <h3>All records: </h3>

    <?php
    $records = $model->getAll();
    foreach ($records as $record) {
        foreach ($record as $key => $value) {
            echo $key . ' : ' . $value . ' | ';
        }
        echo '<br>';
    }
    ?>

</div>
