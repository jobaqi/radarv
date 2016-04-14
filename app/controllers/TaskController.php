<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Handles main page handling
 *
 * @author Quinten
 */
namespace App\Controllers;

class TaskController extends Controller{

     /**
     * Show task overview page
     */
        public static function task(){
        return self::renderWithLayout('task', ['title' => 'Taken overzicht']);
    }

}
