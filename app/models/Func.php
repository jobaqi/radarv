<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author Jordy
 */

namespace App\Models;

class Func extends \Illuminate\Database\Eloquent\Model {

	/**
     * The attributes that should be mass-asignable
     * @var array
     */
    protected $fillable = ['naam', 'schaal'];

    /**
     * This model's table
     * @var string
     */
   	protected $table = 'functies';
}
