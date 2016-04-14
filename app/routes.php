<?php

/*
 * Define your routes here.
 * Example: Flight::route('SOMEROUTE', ['controller', 'function']);
 */

/*
 * Index route
 */
Flight::route('GET /', ['\App\Controllers\HomeController', 'index']);

/*
 * PVI route
 */
Flight::route('GET /pvi', ['\App\Controllers\HomeController', 'pvi']);

/*
 * Analysis route
 */
Flight::route('GET /analysis', ['\App\Controllers\HomeController', 'analysis']);

/*
 * EmployeeOverview route
 */
Flight::route('GET /employee', ['\App\Controllers\HomeController', 'employee']);

/*
 * Authentication routes
 */
Flight::route('GET /login', ['\App\Controllers\AuthController', 'showLogin']);
Flight::route('POST /login', ['\App\Controllers\AuthController', 'authenticate']);
Flight::route('GET /register', ['\App\Controllers\AuthController', 'showRegister']);
Flight::route('POST /register', ['\App\Controllers\AuthController', 'register']);