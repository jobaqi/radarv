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

class ClassesController extends Controller{

    /**
     * Show class overview page
     */
        public static function classes(){
        return self::renderWithLayout('classes', ['title' => 'Klassen overzicht']);
    }
}
