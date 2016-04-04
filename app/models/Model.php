<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author Jordy
 */

namespace app\models;

class Model {
    
    protected $connection;
    protected $properties;
    protected $property_values;
    protected static $username;
    protected static $password;
    

    function getConnection() {
        return $this->connection;
    }

    function getProperties() {
        return $this->properties;
    }

    static function getUsername() {
        return self::$username;
    }

    static function getPassword() {
        return self::$password;
    }

    function setConnection($connection) {
        $this->connection = $connection;
        return $this;
    }

    function setProperties($properties) {
        $this->properties = $properties;
        return $this;
    }

    static function setUsername($username) {
        self::$username = $username;
        return self;
    }

    static function setPassword($password) {
        self::$password = $password;
        return self;
    }
    
    static function setCredentials($username, $password){
        self::setUsername($username);
        self::setPassword($password);
        return self;    
    }

    function getProperty_values() {
        return $this->property_values;
    }

    function setProperty_values($property_values) {
        $this->property_values = $property_values;
        return $this;
    }


     
    
}
