<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of taken
 *
 * @author Bart
 */

namespace App\Models;

class Taken extends \Illuminate\Database\Eloquent\Model {

	/**
     * The attributes that should be mass-asignable
     * @var array
     */
    protected $fillable = ['naam', 'urenOpWeekbasis'];

    /**
     * This model's table
     * @var string
     */
    protected $table = 'taken';

    public function taken(){
        return $this->belongsTo('App\Models\Taken', 'takenMedewerker', 'taken_id', 'medewerker_id');
    }
}
