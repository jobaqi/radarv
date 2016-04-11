<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of AuthController
 *
 * @author Jordy
 */
class AuthController extends Controller{
  use \App\Traits\CanAuthenticateAndRegisterEmployees; 
  
  /**
   * Render login page
   */
  static function showLogin(){
    return $this->renderWithLayout("auth/login", ['title' => 'Login']);
  }
}
