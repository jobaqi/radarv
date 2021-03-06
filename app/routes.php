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
Flight::route('GET /pvi', ['\App\Controllers\MedewerkerController', 'pvi']);
Flight::route('GET /pvi/@id', ['\App\Controllers\MedewerkerController', 'pvi']);

/*
 * Create PVI route
 */
Flight::route('GET /nieuwepvi', ['\App\Controllers\MedewerkerController', 'createpvi']);

/*
 * Analysis route
 */
Flight::route('GET /analyse', ['\App\Controllers\StatistiekenController', 'analysis']);

/*
 * EmployeeOverview route
 */
Flight::route('GET /medewerker', ['\App\Controllers\MedewerkerController', 'index']);

/*
 * ClassesOverview route
 */
Flight::route('GET /klassen', ['\App\Controllers\KlasController', 'classes']);
Flight::route('POST /klassen', ['\App\Controllers\KlasController', 'store']);	

/*
 * ArrangementOverview route
 */
Flight::route('GET /regelingen', ['\App\Controllers\regelingenController', 'regelingen']);

/*
 * TaskOverview route
 */
Flight::route('GET /taken', ['\App\Controllers\TakenController', 'taken']);

/*
 * SubjectOverview route
 */
Flight::route('GET /vakken', ['\App\Controllers\VakkenController', 'subject']);

/*
 * Authentication routes
 */
Flight::route('GET /login', ['\App\Controllers\AuthController', 'showLogin']);
Flight::route('POST /login', ['\App\Controllers\AuthController', 'authenticate']);
Flight::route('POST /register', ['\App\Controllers\AuthController', 'register']);

Flight::route('GET /medewerker/@id/delete', ['\App\Controllers\AuthController', 'delete']);