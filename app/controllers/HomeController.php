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

class HomeController extends Controller{
    
    /**
     * 
     * @return 
     */
    public static function index(){
        return self::renderWithLayout('index', ['title' => 'RadarV-Index']);        
    }
}

