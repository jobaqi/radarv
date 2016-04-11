<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Factories;

/**
 * Description of EmployeeFactory
 *
 * @author Jordy
 */
class EmployeeFactory {
    private $model;
    
    function __construct(\App\Models\Employee $employee){
        $this->model = $employee;
    }
    
    /**
     * Insert a new employee into the database
     * @param String $first_name
     * @param String $last_name
     * @param String $date_of_birth yyy-mm-dd
     * @param int $contract_id
     * @param int $function_id
     * @param String $password
     * @return App\Models\Employee
     */
    static function insertIntoDatabase($first_name, $last_name, $date_of_birth, $contract_id, $function_id, $password){
      return $this->model->create([
          'first_name' => $first_name,
          'last_name' => $last_name,
          'date_of_birth' => $date_of_birth,
          'contract_id' => $contract_id,
          'function_id' => $function_id,
          'password' => hash($password)
      ]);
    }
}
