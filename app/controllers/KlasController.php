<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Handles main page handling
 *
 * @author Bart
 */
namespace App\Controllers;
use App\Models\Klas;


class KlasController extends Controller{

    /**
     * Show class overview page
     */
        public static function classes(){
        return self::renderWithLayout("Klas", ['title' => 'ClassesOverView', 'klassen' => Klas::all()]);
    }
}
