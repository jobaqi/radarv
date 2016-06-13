<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TakenMedewerker
 *
 * @author Jordy
 */

namespace App\Models;

class TakenMedewerker extends \Illuminate\Database\Eloquent\Model {

	/**
     * The attributes that should be mass-asignable
     * @var array
     */
    protected $fillable = ['id', 'startWeek', 'aantalWeken', 'urenOpWeekbasis', 'taken_id', 'medewerker_id'];

    /**
     * This model's table
     * @var string
     */
    protected $table = 'takenmedewerker';

}
