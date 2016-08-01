<?php

namespace base;

use PDO;

abstract class Model {

    public $app;

//    public $pdo;
//    public $user;
//    public $pass;

    public $connection;

    public $tableName;

    public function __construct(App $app) {
        $this->app = $app;
//        $this->pdo = $app->db['pdo'];
//        $this->user = $app->db['user'];
//        $this->pass = $app->db['pass'];

    }

//    abstract protected function _init();

    public function getConnection() {
        if (!$this->connection) {
//            $this->connection = new PDO($this->pdo, $this->user, $this->pass);
            $this->connection = $this->app->getConnection();
        }
        return $this->connection;
    }

    public function getAll() {
        $all = [];
        $stmt = $this->getConnection()->query("SELECT * FROM $this->tableName");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $all[] = $row;
        }
        return $all;
    }

    public function getTotalCount() {
        $stmt = $this->getConnection()->query("SELECT COUNT(*) FROM $this->tableName");
        $count = $stmt->fetch(PDO::FETCH_COLUMN);
        return $count;
    }

    public function getCount($field, $value) {
        $stmt = $this->getConnection()->query("SELECT COUNT(*) FROM $this->tableName WHERE $field=$value ");
        $count = $stmt->fetch(PDO::FETCH_COLUMN);
        return $count;
    }

    public function getColumns() {
        $columns = [];
        $stmt = $this->getConnection()->query("SHOW COLUMNS FROM $this->tableName");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $columns[] = $row;
        }

//        $columns = $stmt->fetch(PDO::FETCH_ASSOC);

        return $columns;
    }

    public function findOne($field, $value) {
//        $stmt = $this->getConnection()->query("SELECT * FROM $this->tableName WHERE name='$value' LIMIT 1 " );
        $stmt = $this->getConnection()->query("SELECT * FROM $this->tableName WHERE $field='$value' LIMIT 1 " );
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function findAll($field, $value) {
        $stmt = $this->getConnection()->query("SELECT * FROM $this->tableName WHERE $field=$value " );
        $rows = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $row;
        }
        return $rows;
    }

}
