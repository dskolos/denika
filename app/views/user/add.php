<?php
/* @var $this base\View */
use models\User;

$this->title = 'Add user';
?>

<h1 class="text-center"><?= $this->title;?></h1>

<?php if (!$_POST) { ?>

<div class="text text-center">

    <div class="user-form">

        <form method="post">

            <input class="reset" type="reset" value="Reset FORM">
            <br>
            <br>

            <label><strong> Name: </strong>
                <input id="name" type="text" name="name" size="50" placeholder="Must be at least 3 characters">
            </label>
            <br>
            <br>

            <label><strong> E-mail: </strong>
                <input id="email" type="text" name="email" size="50" placeholder="Should be like user@mail.com">
            </label>
            <br>
            <br>
            <br>

            <input class="submit user-submit" type="submit" value="Submit">

        </form>

    </div>
</div>

<?php } else { ?>

<div class="text text-center">

    <?php
    if ($_POST) {
//        echo 'There is _POST' . '<br><br>';
//        var_dump($_POST);
//        echo '<br><br>';
        $name = $_POST['name'];
        $email = $_POST['email'];

        $model = new User($this->app);

        $one = $model->findOne('name', $name);
//        echo 'one:' . '<br>';
//        var_dump($one);
//        echo '<br><br>';

        if ($one) {
            echo 'User <strong> ' . $name . '</strong> already exists <br> ';
            echo "Enter another name";
        } else {
            $model->insert($name, $email);

            echo 'User <strong> ' . $name . '</strong> added <br> ';

        }





    } else {
        echo 'There is no _POST' . '<br><br>';
    }



    ?>

</div>

<?php } ?>