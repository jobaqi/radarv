<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require ('vendor/autoload.php');
require('autoload.php');
require_once('app/routes.php');

require 'config/configLoader.php';

/*
 * Include helpers
 */
require 'app/helpers/functions.php';

/*
 * Start the framework
 */
Flight::start();