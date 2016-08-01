<?php
/* @var $this base\View */

$this->title = '/TEST/DB';
?>
<div class="text">
    <strong> TEST DB </strong>
    <br>
    <br>

<!--    <strong> DB Parameters: </strong>-->
<!--    --><?php //$dbParams = $this->app->db; ?>
<!--    <pre>--><?php //var_dump($dbParams); ?><!--</pre>-->

    <strong> DB connection: </strong>
    <pre>
<?php
$connection = $this->app->getConnection();
//    new PDO($dbParams['pdo'], $dbParams['user'], $dbParams['pass']);
var_dump($connection->errorCode());
var_dump($connection->errorInfo());
echo '<br>';
?>
</pre>
    <strong> DB tables: </strong>
    <pre>
<?php

$tables = [];

$stmt = $connection->query('SHOW TABLES');
var_dump($stmt);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    foreach ($row as $key => $value) {
        echo $key . '   ' . $value . "     ";
    }
    echo '<br>';
    foreach ($row as $value) {
        echo $value . '<br>';
//        var_dump($row);
        $tables[] = $value;
    }
    echo '<br>';
}
echo '<br>';
var_dump($tables);
echo '<br>';

?>
</pre>
    <strong> DB tables content: </strong>
    <pre>
<?php

foreach ($tables as $table) {
    echo '<h3><strong>' . $table . '</strong></h3>';

    $stmt = $connection->query("SELECT * FROM $table");
    var_dump($stmt);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        foreach ($row as $key => $value) {
            echo '<strong>' . $key . ':</strong>   ' . $value . "     ";
        }
        echo '<br>';
    }

}

?>
    </pre>


</div>
