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

namespace app\helpers;

class Path {
    
    /**
     * 
     * @param String $url The relative url
     * @return string the fully qualified url
     */
    public static function url($url){
        if(self::getPort() === "80"){
            return "http://".self::getBaseUrl().$url;
        }
        return "http://".self::getBaseUrl().":".self::getPort().$url;
    }
    
    private static function getBaseUrl(){
        return $_SERVER['SERVER_NAME'];
    }
    
    private static function getPort(){
        return $_SERVER['SERVER_PORT'];
    }
    
}
