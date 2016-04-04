<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Jordy
 */


class Controller {
    
    /**
     * Helper function to render a view with a layout
     * @param string $view The view name to render e.g: 'index'
     * @param array $vars The variables to send with the view e.g: ['title' => 'index']
     * @param string $section The section this view will provide e.g: ['body'] defaults to body
     * @param string $layout The layout to use for the view e.g: 'layout' defaults to layout
     * @return void
     */
    protected static function renderWithLayout($view, Array $vars, $section = "body", $layout = "layout"){
        Flight::render($view, $vars, $section);
        Flight::render($layout);
    }
}
