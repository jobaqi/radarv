<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace jvd;

/**
 * Description of Error
 *
 * @author Jordy
 */
class Error {
    private static $errors;
    
    
    static function getErrors() {
        return self::$errors;
    }
    
    static function addError($error){
        self::$errors[] = $error;
    }


    
}
