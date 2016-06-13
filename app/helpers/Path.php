<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Path
 *
 * @author Jordy
 */

namespace App\Helpers;

class Path {
    
    /**
     * 
     * @param String $url The relative url
     * @return string the fully qualified url
     */
    public static function url($url){
       return $url;
    }
    
    private static function getBaseUrl(){
        return $_SERVER['SERVER_NAME'];
    }
    
    private static function getRequestUri(){
        return $_SERVER['REQUEST_URI'];
    }
    
    private static function getPort(){
        return $_SERVER['SERVER_PORT'];
    }
    
    private static function getRootDirPath(){
        return dirname(dirname(__dir__));
    }
    
    private static function getRootDirName(){
        return end(explode(DIRECTORY_SEPARATOR, self::getRootDirPath()));
    }
    
    private static function getFirstRequestUri(){
        return explode("/", self::getRequestUri())[1];
    }
}
