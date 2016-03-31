<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace jvd\database;
use jvd\Error;

/**
 * Description of Db
 *
 * @author Jordy
 */
class Db {
    private static $connection;
    private $host;
    private $table;
    private $username;
    private $password;
    
    
    public function __construct($host, $username, $password) {
        $this->setHost($host);
        $this->setUsername($username);
        $this->setPassword($password);
        return $this;
        
    }
    
    function connect($table){
        $this->setTable($table);
        
        $dsn = sprintf("mysql:dbname=%s;host=%s", $this->getTable(), $this->getHost());
        try{
            $pdo = new \PDO($dsn, $this->getUsername(), $this->getPassword());
            $this->setConnection($pdo);
        }
        catch (\PDOException $ex) {
            Error::addError($ex->getMessage());
        }
        
        return $this;
    }
    
    
    function getConnection() {
        return self::$connection;
    }

    function getHost() {
        return $this->host;
    }

    function getTable() {
        return $this->table;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setConnection($connection) {
        self::$connection = $connection;
        return $this;
    }

    function setHost($host) {
        $this->host = $host;
        return $this;
    }

    function setTable($table) {
        $this->table = $table;
        return $this;
    }

    function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    
    static function getError() {
        return self::$error;
    }

    static function setError($error) {
        self::$error = $error;
        return self;
    }


}
