<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Require helper functions
 */
require 'app/helpers/functions.php';

if(getenv("APP_DEBUG") === true){
    ini_set('display_errors', 1); 
    error_reporting(E_ALL);
    function shutDownFunction() { 
        $error = error_get_last();
        echo("<pre>");
         var_dump($error);
         echo("</pre>");
    }
    register_shutdown_function('shutDownFunction');

}
else{
    ini_set('display_errors', 0); 
    error_reporting(0);
}

