<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers;

/**
 * Calculate things the easy way
 *
 * @author Jordy
 */
class Formula {
  
  /**
   * Get year basis
   * @param integer $totalHours
   * @return mixed
   */
  static function yearBasis($totalHours){
    if(is_numeric($totalHours)){
        return 1659 * $totalHours;
    }
    return "Total hours: \"$totalHours\" is not a number";
  }
  
  /**
   * Get total hours available
   * @param integer $totalHours
   * @param integer $weeks
   * @return mixed
   */
  static function hoursAvailable($totalHours, $weeks){
    if(is_numeric($totalHours)){
      if(is_numeric($weeks)){
        return ($totalHours * $weeks * 40 + ($totalHours * self::minutesToHours(88) * $weeks));
      }
      return "Total weeks must be a number";
    }
    return "Total hours WTF must be a number";
  }

  /**
   * Get Total Ruling Hours Annually
   * @param integer $totalHours
   * @param integer $weeks
   * @param integer $hoursannually
   * @return mixed
   */
  static function HoursAnnually($totalHours, $weeks, $hoursAnnually){
    if(is_numeric($totalHours)){
      if(is_numeric($weeks)){
        if(is_numeric($HoursAnnually)){
          return ($totalHours * $weeks * 40 + ($totalHours * self::minutesToHours(88) * $weeks) - Self::minutesToHours($hoursAnnually));
        }
        return "total hours WTF must be a number";
      }
      return "total weeks must be a number";
    }
    return "Total hours: \"$hoursAnnually\" is not a number ";
  }
  
  /**
   * Convert minutes to hours
   * @param integer $minutes
   * @return mixed
   */
  static function minutesToHours($minutes){
    if(is_numeric($minutes)){
      return $minutes / 60;
    }
    return "\$minutes must be a number";
  }
  
}
