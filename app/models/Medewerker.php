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

use Illuminate\Database\Eloquent\SoftDeletes;

class medewerker extends \Illuminate\Database\Eloquent\Model {
    use SoftDeletes; // So employees never actually get deleted, they just get disabled

    /**
     * The attributes that should be mutated to dates
     * @var array
     */
    protected $dates = ['deleted_at'];

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
    public function regeling(){
        return $this->hasMany('App\Models\Regeling', 'medewerkerregelingen', 'id');
    }
}
