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

class Contract extends \Illuminate\Database\Eloquent\Model {

	/**
     * The attributes that should be mass-asignable
     * @var array
     */
    protected $fillable = ['wekenInzetbaar', 'aanstellingsOmvangWTF', 'functie_id', 'medewerker_id'];

    /**
     * This model's table
     * @var string
     */
    protected $table = 'contracten';

    /**
     * Get the employee associated with this contract
     * @return App\Models\Medewerker
     */
    public function employee(){
    	return $this->belongsTo('App\Models\Medewerker','medewerker_id');
    }

    /**
     * Get the function associated with this contract
     * @return App\Models\Func
     */
    public function func(){
    	return $this->belongsTo('App\Models\Func', 'functie_id');
    }
}
