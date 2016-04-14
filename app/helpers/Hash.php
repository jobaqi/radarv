<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers;

/**
 * Description of Hash
 *
 * @author Jordy
 */
class Hash {
  
  static function hash($string){
    return password_hash($string, PASSWORD_BCRYPT, [
        'cost' => 12
    ]);
  }
  
  static function check($string, $checkHash){
    return password_verify($string, $checkHash);
  }
}
