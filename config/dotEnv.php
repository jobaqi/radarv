<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Path to .env
$dotEnvPath = dirname(__dir__);
$dotEnvFile = $dotEnvPath.DIRECTORY_SEPARATOR.".env";

/*
 * Load .env file if it exists
 */

if(is_file($dotEnvFile) && is_readable($dotEnvFile)){
    $dotEnv = new Dotenv\Dotenv($dotEnvPath);
    $dotEnv->load();
}
