<?php

/*
 * Define your routes here.
 * Example: Flight::route('SOMEROUTE', ['controller', 'function']);
 */

/*
 * Index route
 */
Flight::route('/', ['\App\Controllers\HomeController', 'index']);

/*
 * Login route
 */
Flight::route('/login', ['\App\Controllers\HomeController', 'login']);

/*
 * PVI route
 */
Flight::route('/pvi', ['\App\Controllers\HomeController', 'pvi']);

/*
 * Analysis route
 */
Flight::route('/analysis', ['\App\Controllers\HomeController', 'analysis']);

/*
 * EmployeeOverview route
 */
Flight::route('/employee', ['\App\Controllers\HomeController', 'employee']);