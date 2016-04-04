<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register(function($class){
//    include_once("$class.php");
    $pathArray = explode("\\", $class);
    $className = $pathArray[count($pathArray) - 1];
    
    if(file_exists("app/controllers/$className.php")){
        include_once("app/controllers/$className.php");
    }
    elseif(file_exists("app/models/$className.php")){
        include_once("app/models/$className.php");
    }
    elseif(file_exists("app/helpers/$className.php")){
        include_once("app/helpers/$className.php");
    }
    else{
        echo($className);
    }
    
    
});