<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;

/**
 * Interact with the employee table
 *
 * @author Jordy
 */
class EmployeeRepository extends BaseRepository {
         
  public function __construct() {
      $this->setModel(new \App\Models\Employee());
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
    static function insertIntoDatabase($data){
      $this->model->create($data);
      return $this;
    }
}
