<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OnderwijsTaak
 *
 * @author Jordy
 */

namespace App\Models;

class OnderwijsTaak extends \Illuminate\Database\Eloquent\Model {

	/**
     * The attributes that should be mass-asignable
     * @var array
     */
    protected $fillable = ['id', 'percentageVoorbereidingNazorg', 'aantalWeken', 'startWeek', 'aantalUrenPerWeek', 'medewerker_id', 'klassen_id', 'vakken_id'];

    /**
     * This model's table
     * @var string
     */
    protected $table = 'onderwijstaken';

}
