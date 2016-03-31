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
     * Show index page
     */
    public function index(){
        return self::renderWithLayout("index", ['title' => 'RadarV-index']);
    }
}
