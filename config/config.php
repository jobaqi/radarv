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
}
else{
    ini_set('display_errors', 0); 
    error_reporting(0);
}