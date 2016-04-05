<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => getenv("DB_DATABASE") ?: "pvi",
    'username' => getenv("DB_USERNAME") ?: "root",
    'password' => getenv("DB_PASSWORD") ?: "",
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();