<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Medewerker
 *
 * @author Jordy
 */

namespace App\Models;


class medewerker extends \Illuminate\Database\Eloquent\Model {

    /**
     * The attributes that should be mass-asignable
     * @var array
     */
    protected $fillable = ['peopleSoftNummer', 'voornaam', 'achternaam', 'geboorteDatum', 'password'];

    /**
     * Get this employee's contract
     * @return App\Models\Contract
     */
    public function contract(){
    	return $this->hasOne('App\Models\Contract', 'medewerker_id');
    }

    /**
     * Get this employee's ruling
     * @return App\Models\Regeling
     */
    public function regelingen(){
        return $this->belongsToMany('App\Models\Regeling', 'medewerkerregelingen', 'medewerker_id', 'regeling_id');
    }
    
    /**
     * Get this employee's tasks
     * @return array
     */
    public function onderwijsTaken(){
        return $this->hasMany('App\Models\OnderwijsTaak', 'medewerker_id');
    }
    public function takenMedewerker(){
        return $this->hasMany('App\Models\TakenMedewerker', 'medewerker_id');
    }
}
