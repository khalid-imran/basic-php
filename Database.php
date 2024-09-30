<?php

class Database{
    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=learnPHP";
        $this->connection = new PDO($dsn, "root", "");
    }
    public function query($sql){
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement;
    }
}
