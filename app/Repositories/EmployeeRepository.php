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
class EmployeeRepository {
  private $employee;
          
  /**
   * Set $this->model to the Employee model
   * @param \App\Models\Employee $employee
   * return void
   */
  function __construct(\App\Models\Employee $employee){
    $this->model = $employee;
  }
  
  /**
   * Find an employee by id
   * @param int $id
   * @return App\Models\Employee
   */
  static function findById($id){
    return $this->model->find($id);
  }
  
}
