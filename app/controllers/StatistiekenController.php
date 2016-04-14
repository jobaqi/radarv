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

class StatistiekenController extends Controller{

    /**
     * Show analysis page
     */
    public static function analysis(){
        return self::renderWithLayout('analysis', ['title' => 'Analyse overzicht']);
    }
}
