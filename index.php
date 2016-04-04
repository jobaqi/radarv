<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require ('vendor/autoload.php');
require('autoload.php');
require_once('app/routes.php');

/*
 * Controller path
 */
Flight::path("app/controllers");

/*
 * Views path
 */
Flight::set('flight.views.path', "app/views");

/*
 * Database credentials
 */
app\models\Model::setCredentials("root", "r6vegas2");

/*
 * Start the framework
 */
Flight::start();