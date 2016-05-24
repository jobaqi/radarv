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
use App\Models\Vakken;

class VakkenController extends Controller{

     /**
     * Show subject overview page
     */
        public static function subject(){
        return self::renderWithLayout('vakken', ['title' => 'Vakken Overzicht', 'vakken' => vakken::all()]);
    }

}
