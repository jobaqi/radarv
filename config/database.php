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
    'host' => getenv("DB_HOST") ? : 'sql6.pcextreme.nl',
    'database' => getenv("DB_DATABASE") ? : "15635pvi",
    'username' => getenv("DB_USERNAME") ? : "15635pvi",
    'password' => getenv("DB_PASSWORD") ? : "radarv",
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
