<?php

/*
 * Define your routes here.
 * Example: Flight::route('SOMEROUTE', ['controller', 'function']);
 */

/*
 * Index route
 */
Flight::route('/', ['HomeController', 'index']);

/*
 * PVI route
 */
Flight::route('/pvi', ['HomeController', 'pvi']);

/*
 * Analysis route
 */
Flight::route('/analysis', ['HomeController', 'analysis']);