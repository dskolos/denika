<?php
/* @var $this base\View */
use models\User;
use models\Article;

$this->title = 'Add article';
?>

<h1 class="text-center"><?= $this->title;?></h1>

<?php if (!$_POST) {
    $model = new User($this->app);
    $users = $model->getAllUsers();
?>

<div class="text text-center">

    <div class="article-form">

        <form method="post">

            <input class="article-reset" type="reset" value="Reset FORM">
            <br>
            <br>

            <label><strong> Title: </strong> <br>
                <input id="title" type="text" name="title" size="50" placeholder="Must be at least 3 characters">
            </label>
            <br>
            <br>

            <label><strong> Select user: </strong> &nbsp;&nbsp;&nbsp;
                <select name="user_id" id="user_id">
                    <option disabled>Select user</option>
                    <?php foreach($users as $user) { ?>
                        <option value="<?=$user['id']?>"><?=$user['name']?></option>
                    <?php } ?>
                </select>
            </label>
            <br>
            <br>

            <label><strong> Description: </strong> <br>
                <textarea name="description" id="description" cols="50" rows="3"  placeholder="Should not be empty"></textarea>
            </label>
            <br>
            <br>

            <label><strong> Text: </strong> <br>
                <textarea name="text" id="text" cols="50" rows="7" placeholder="Should not be empty"></textarea>
            </label>
            <br>
            <br>

            <input class="submit article-submit" type="submit" value="Submit">

        </form>

    </div>
</div>

<?php } else { ?>

<div class="text text-center">

    <?php
        $title = $_POST['title'];
        $user_id = $_POST['user_id'];
        $description = $_POST['description'];
        $text = $_POST['text'];

        $model = new Article($this->app);

        $model->insert($title, $user_id, $description, $text);

        echo 'Article <strong> ' . $title . '</strong> added <br> ';

    ?>

</div>

<?php } ?>
