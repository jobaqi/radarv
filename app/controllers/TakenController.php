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
use App\Models\Taken;

class TakenController extends Controller{

     /**
     * Show taken overview page
     */
        public static function taken(){
        	return self::RenderWithLayOut("taken", ['title' => 'takenOverzicht', 'taken' => Taken::all()]);
    }

}
