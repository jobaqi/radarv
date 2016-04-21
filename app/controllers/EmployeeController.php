<?php 
/*
 * @author Bart Allert
 */
namespace App\Controllers;
class EmployeeController extends Controller{
    /*
     * Show employee page
     */
    public static function index(){
        $erepo = new \App\Repositories\EmployeeRepository();
        return self::renderWithLayout("employee", ['title' => 'EmployeeOverView', 'employees' => $erepo->getAll()]);
    }
     /*
      * Show pvi page
      */
    public static function pvi(){
        return self::renderWithLayout("pvi", ['title' => 'RadarV-PVI']);
    }
}