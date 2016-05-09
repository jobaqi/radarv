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

class Ruling extends \Illuminate\Database\Eloquent\Model {
    protected $fillable = ['name', 'hours_annually'];
    protected $table = 'Rulings';
}
