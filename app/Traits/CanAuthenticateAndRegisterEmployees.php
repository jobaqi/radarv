<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Traits;

trait CanAuthenticateAndRegisterEmployees{
  function authenticate($username, $password){
    
  }
  
  function register($name, $email, $password){
    return \App\Factories\EmployeeFactory::insertIntoDatabase($name, $email, $password);
  }
}
