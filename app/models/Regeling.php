<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ruling
 *
 * @author Bart
 */

namespace App\Models;

class Regeling extends \Illuminate\Database\Eloquent\Model {

	/**
     * The attributes that should be mass-asignable
     * @var array
     */
    protected $fillable = ['naam', 'urenEenWTFEenJaar'];

    /**
     * This model's table
     * @var string
     */
    protected $table = 'regelingen';
}
