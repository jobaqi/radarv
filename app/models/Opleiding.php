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

class opleiding extends \Illuminate\Database\Eloquent\Model {

	/**
     * The attributes that should be mass-asignable
     * @var array
     */
    protected $fillable = ['naam'];
    protected $table ='opleidingen';
}
