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
    protected $fillable = ['name', 'scale'];
   	protected $table = 'functions';
}
