<?php
/* @var $this base\View */
use models\Note;

$this->title = '/TEST/NOTEADD';
?>
<div class="half">
<div class="text">

    <h1><strong> <small>TEST</small> Note ADD </strong></h1>

    <?php
    $model = new Note($this->app);
    $added = false;
    ?>


    <hr>
    <?php
    if ($_POST) {
        $added = true;
        echo 'There is _POST: ' . '<br>';
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        echo '<br><br>';

        $title = $_POST['title'];
        $description = $_POST['description'];
        $content = $_POST['content'];

        $model->insert($title, $description, $content);

    } else {
        echo 'There is no _POST.' . '<br><br>';
    }

    ?>





    <hr>

<!--    --><?php
//    $model = new Note($this->app);
//    ?>

    <h3>Columns:</h3>

    <?php
    $columns = $model->getColumns();
    foreach ($columns as $element) {
        foreach ($element as $key => $value) {
            echo $key . ' : <strong> ' . $value . ' </strong> | ';
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
            echo $key . ' : <strong>' . $value . '</strong> | ';
        }
        echo '<br>';
    }
    ?>

    <hr>



    </div>
</div>

<div class="half">
    <div class="text">

        <?php if (!$added) { ?>

            <div class="note-add-form">

                <form method="post">

                    <input class="reset" type="reset" value="Reset FORM">
                    <br>
                    <br>

                    <label><strong> Title: </strong> <br>
                        <input id="title" type="text" name="title" size="50" placeholder="Should not be empty" required>
                    </label>
                    <br>
                    <br>

                    <label><strong> Description: </strong> <br>
                        <textarea id="description" name="description" cols="55" rows="5"
                                  placeholder="Should not be empty" required></textarea>
                    </label>
                    <br>
                    <br>

                    <label><strong> Content: </strong> <br>
                        <textarea name="content" id="content" cols="55" rows="10" placeholder="Should not be empty"
                                  required></textarea>
                    </label>

                    <br>
                    <br>

                    <input class="submit user-submit" type="submit" value="Submit">

                    <a class="btn" href="<?= '/test/noteadd'; ?>">Renew page</a>

                </form>

            </div>

        <?php } else { ?>

            <div class="text-center">

                <h3> Note ADDED </h3>

                <a class="btn" href="<?= '/test/noteadd'; ?>">Add MORE</a>

            </div>

        <?php   }   ?>


    </div>



</div>

<div class="article-last"><hr></div>
