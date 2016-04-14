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

class ArrangementController extends Controller{

     /**
     *
     * Show arrangement overview page
     */
        public static function arrangement(){
        return self::renderWithLayout('arrangement', ['title' => 'Regelingen overzicht']);
    }
}