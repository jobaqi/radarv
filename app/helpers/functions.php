<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function url($url){
    return \App\Helpers\Path::url($url);
}

function genHash($string){
  return App\Helpers\Hash::hash($string);
}