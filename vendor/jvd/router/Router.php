<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace jvd\router;
use jvd\Error;

/**
 * Description of Router
 *
 * @author Jordy
 */
class Router {
    /**
     * Check if a route matches the current url
     * @param String $route
     * @return boolean
     */
    static function match($route, $controller, $action){
      if($route === self::getRequestUrl()){
          var_dump(class_exists("PoenaiDb\api\controllers\$controller", true));
        }
    }
  
    
   /**
    * Get current request URI
    * @return String
    */
   static function getRequestUrl(){
       return $_SERVER['REQUEST_URI'];
   }


    


}
