<?php

namespace base;

use PDO;

class DataBase {

    private $__pdo;
    private $__user;
    private $__pass;

    private $__connection;

    public function __construct($db) {
        $this->__pdo = $db['pdo'];
        $this->__user = $db['user'];
        $this->__pass = $db['pass'];
    }

    public function getConnection() {
        if (!$this->__connection) {
            $this->__connection = new PDO($this->__pdo, $this->__user, $this->__pass);
        }
        return $this->__connection;
    }







}




