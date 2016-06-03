<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Klas
 *
 * @author Bart
 */

namespace App\Models;

class Klas extends \Illuminate\Database\Eloquent\Model {

	/**
     * The attributes that should be mass-asignable
     * @var array
     */
    protected $fillable = ['naam', 'opleiding_id'];
    protected $table = 'klassen';
    
    public function opleiding(){
        return $this->belongsTo('App\Models\Opleiding');
    }
}
