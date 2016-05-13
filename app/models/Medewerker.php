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
    protected $fillable = ['PeopleSoftNummer', 'Voornaam', 'Achternaam', 'GeboorteDatum', 'VerwijderdOp', 'password'];

    public function contract(){
    	return $this->belongsTo('App\Models\Contract', 'contract_id', 'id');
    }

    public function func(){
    	return $this->belongsTo('App\Models\Func', 'functie_id', 'id');
    }
    public function regelingen(){
        return $this->belongsTo('App\Models\Regelingen', 'regelingen_id', 'id');
    }
}
