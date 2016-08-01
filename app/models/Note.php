<?php

namespace models;

use base\Model;

class Note extends Model {

    public $tableName = 'note';

//    public function add($name, $email ) {
////        $stmt = $this->getConnection()->query("SELECT * FROM $this->tableName");
//        $stmt = $this->getConnection()->query("INSERT INTO $this->__tableName (name, email) VALUES ($name, $email)");
//    }

    public function insert($title, $description, $content) {

        $stmt = $this->getConnection()->prepare("INSERT INTO $this->tableName (title, description, content) values (?, ?, ?)");

        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $description);
        $stmt->bindParam(3, $content);

        $stmt->execute();

    }


}
