<?php

namespace models;

use base\Model;

class Article extends Model {

    public $tableName = 'article';

    public function insert($title, $user_id, $description, $text) {
        $stmt = $this->getConnection()->prepare("INSERT INTO $this->tableName (title, user_id, description, text) values (?, ?, ?, ?)");
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $user_id);
        $stmt->bindParam(3, $description);
        $stmt->bindParam(4, $text);
        $stmt->execute();
    }





}
