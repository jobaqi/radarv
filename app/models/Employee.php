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

class Employee extends \Illuminate\Database\Eloquent\Model {
    protected $fillable = ['first_name', 'last_name', 'date_of_birth', 'contract_id', 'function_id'];
}
