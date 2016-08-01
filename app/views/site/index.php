<?php
/* @var $this base\View */
use models\User;
use models\Article;

$this->title = 'All users';

$model = new User($this->app);
$users = $model->getAllUsers();
$usersArray = $model->getUsersArray();

if (0 == $this->app->userId) {
    $this->title = 'Articles of all users';
}

if (0 < $this->app->userId) {
    $this->title = 'Articles of ' . $usersArray[$this->app->userId];
}

$model = new Article($this->app);

if (0 == $this->app->userId) {
    $articles = $model->getAll();
} else {
    $articles = $model->findAll('user_id', $this->app->userId);
}


//$articles = $model->getAll();

?>

<h1 class="text-center"><?= $this->title;?></h1>

<div class="text">

    <div class="user-list">
        <h3>Users</h3>
        <ul>
            <?php $class = (0 == $this->app->userId) ? ' class="active"' : $class = ''; ?>
            <li<?= $class ?>><a href="/">
                    <div>
                        <div><?= $model->getTotalCount() ?></div>
                        <strong>All</strong></div>
                </a>
            </li>

            <?php foreach ($users as $user) { ?>
                <?php $class = ($this->app->userId == $user['id']) ? ' class="active"' : $class = ''; ?>
                <li<?= $class ?>>
                    <a href="/<?= $user['id'] ?>">
                        <div>
                            <div><?= $model->getCount('user_id', $user['id']) ?></div>
                            <div class="user-id"><?= $user['id'] ?></div> <?= $user['name'] ?></div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="article-list">

        <div class="text">

            <?php foreach ($articles as $article) { ?>

            <div class="article-item">
                <div class="user-div">User: <strong> <?= $usersArray[$article['user_id']] ?></strong></div>
                <strong> <?= $article['title'] ?> </strong>
                <hr>
                <div class="text-center"> <strong> <?= $article['description'] ?> </strong> </div>
                <hr>
                <?= $article['text'] ?>
            </div>

            <?php } ?>

        </div>
    </div>

    <div class="article-last"><br> <hr></div>



</div>