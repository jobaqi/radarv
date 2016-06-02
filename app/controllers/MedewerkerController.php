<?php
/*
 * @author Bart Allertz
 */
namespace App\Controllers;
use App\Models\Medewerker;
use App\Models\Func;
use App\Models\Regeling;

class MedewerkerController extends Controller{
    /*
     * Show employee page
     */
    public static function index(){
        return self::renderWithLayout("employee", ['title' => 'MedewerkersOverzicht', 'employees' => Medewerker::all(), 'functies' => Func::all(), 'regelingen' => Regeling::all()]);
        

    }
     /*
      * Show pvi page
      */
    public static function pvi($id = 0){
        if($id > 0){
          $active_employee = Medewerker::find($id);
          return self::renderWithLayout("pvi", ['title' => "Plan voor $active_employee->voornaam", 'employees' => Medewerker::all(), 'active_employee' => $active_employee]);
        }
        return self::renderWithLayout("pvi", ['title' => 'Plan van inzet', 'employees' => Medewerker::all()]);
    }
     /*
      * Show create pvi page
      */
    public static function createpvi(){
        return self::renderWithLayout("createpvi", ['title' => 'Nieuw plan van inzet']);
    }    
}