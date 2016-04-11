<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;

/**
 * Description of EmployeeRepository
 *
 * @author Jordy
 */
class EmployeeRepository {
  private $employee;
          
  function __construct(\App\Models\Employee $employee){
    $this->model = $employee;
  }
  
  static function findById($id){
    return $this->model->find($id);
  }
}
