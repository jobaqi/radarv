<?php 
/*
 * @author Bart Allertz
 */
namespace App\Controllers;
use App\Models\Employee;

class EmployeeController extends Controller{
    /*
     * Show employee page
     */
    public static function index(){
        return self::renderWithLayout("employee", ['title' => 'Medewerkers overzicht', 'employees' => Employee::all()]);
    }
     /*
      * Show pvi page
      */
    public static function pvi(){
        return self::renderWithLayout("pvi", ['title' => 'Plan van inzet']);
    }
}