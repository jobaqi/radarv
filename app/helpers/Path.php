<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Path
 *
 * @author Jordy
 */

namespace app\helpers;

class Path {
    
    public static function url($url){
        if($_SERVER['SERVER_PORT'] === "80"){
            return "http://".$_SERVER['SERVER_NAME'].$url;
        }
        return "http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$url;
    }
}
