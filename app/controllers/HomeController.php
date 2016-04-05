<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Handles main page handling
 *
 * @author Jordy
 */

class HomeController extends Controller{
    
    /**
     * 
     * @return 
     */
    public static function index(){
        return self::renderWithLayout('index', ['title' => 'RadarV-Index']);
        
    }
        
    /**
     * Show pvi page
     */
    public static function pvi(){
        return self::renderWithLayout("pvi", ['title' => 'RadarV-PVI']);
    }
    
    /**
     * Show analysis page
     */
    public static function analysis(){
        return self::renderWithLayout('analysis', ['title' => 'RadarV-analysis']);
    }
}
