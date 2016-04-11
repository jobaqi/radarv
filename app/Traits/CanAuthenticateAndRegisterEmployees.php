<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Traits;

/**
 * Provides functions to authenticate and register employees
 */
trait CanAuthenticateAndRegisterEmployees{
  
  /**
   * Authenticate an employee
   * @param String $username
   * @param String $password
   */
  function authenticate($username, $password){
    
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
  function register($first_name, $last_name, $date_of_birth, $contract_id, $function_id, $password){
    return \App\Factories\EmployeeFactory::insertIntoDatabase($first_name, $last_name, $date_of_birth, $contract_id, $function_id, $password);
  }
}
