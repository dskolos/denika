<?php

namespace models;

use base\Model;

class User extends Model {

    public $tableName = 'user';

    public $allUsers;

    public $usersArray;


    public function insert($name, $email) {
        $stmt = $this->getConnection()->prepare("INSERT INTO $this->tableName (name, email) values (?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->execute();
    }

    public function getAllUsers() {
        if (!$this->allUsers) {
            $this->allUsers = $this->getAll();
        }
        return $this->allUsers;
    }

    public function getUsersArray() {
        if (!$this->usersArray) {
            $this->usersArray = [];
            foreach ($this->getAllUsers() as $user) {
                $this->usersArray[$user['id']] = $user['name'];
            }
        }
        return $this->usersArray;
    }

}
