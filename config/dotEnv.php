<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Path to .env
$dotEnvPath = dirname(__dir__);

/*
 * Load .env file
 */
$dotEnv = new Dotenv\Dotenv($dotEnvPath);
$dotEnv->load();
