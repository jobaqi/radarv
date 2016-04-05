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
use Illuminate\Database\Eloquent\Model as Eloquent;


//namespace app\models;

class Employee extends Eloquent {
    protected $fillable = ['first_name', 'last_name', 'date_of_birth', 'contract_id', 'function_id'];
}
