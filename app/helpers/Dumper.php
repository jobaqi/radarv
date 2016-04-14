<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers;

/**
 * Helpers to help you dump variables
 *
 * @author Jordy
 */
class Dumper {
  /**
   * Dump a variable
   * @param mixed $variable
   * @return {void}
   */
  static function dump($variable){
    echo("<pre style='background-color: #1c1c1c;color: #ffffff;font-weight: bold;font-size: 16px;font-family: monospace;'>");
    print_r($variable);
    echo("</pre>");
  }
}
