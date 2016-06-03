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
use App\Models\Opleiding;


class KlasController extends Controller{

    /**
     * Show class overview page
     */
        public static function classes(){
        return self::renderWithLayout("Klas", ['title' => 'Klassen Overzicht', 'opleidingen' => Opleiding::all(), 'klassen'=> klas::all()]);
    }
    public function store(){
    	$data = \Flight::request()->data;
    	Klas::create([
    			'naam'=>$data->naam,
    			'opleiding_id'=>$data->opleiding
    		]);
    		return \Flight::redirect(url("/klassen"));
    }
}
