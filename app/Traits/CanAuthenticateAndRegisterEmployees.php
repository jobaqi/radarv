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
   * Render login page
   */
  static function showLogin(){
    return Self::renderWithLayout("auth/login", ['title' => 'Login']);
  }
  
  static function showRegister(){
    return Self::renderWithLayout("auth/register", ['title' => 'Registreren']);
  }
  /**
   * Authenticate an employee
   * @param String $username
   * @param String $password
   */
  function authenticate(){
      $repo = new \App\Repositories\EmployeeRepository();
      $firstName = \Flight::request()->data->firstName;
      $password = \Flight::request()->data->password;
      
      $user = $repo->findBy("first_name", $firstName, true);
      
      if(!empty($user)){
        if(\App\Helpers\Hash::check($user->password, genHash($password))){
          echo "Yest";
        }
        else {
          echo "Nope";
        }
      }
//      return "First name/Password don't match.";
  }
  
  /**
   * Insert a new employee into the database
   * @return \App\Repositories\EmployeeRepository
   */
  function register(){
    
    $employeeRepository = new \App\Repositories\EmployeeRepository();
    $data =  \Flight::request()->data;
    $first_name = $data->firstName;
    $last_name = $data->lastName;
    $date_of_birth = $data->dateOfBirth;
    $contract_id = $data->contractId;
    $function_id = $data->functionId;
    $password = $data->password;
    
    return $employeeRepository->insertIntoDatabase([
        'first_name' => $first_name,
        'last_name' => $last_name,
        'date_of_birth' => $date_of_birth,
        'contract_id' => $contract_id,
        'function_id' => $function_id,
        'password' => $password
    ]);
  }
}
