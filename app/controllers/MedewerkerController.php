<?php 
/*
 * @author Bart Allertz
 */
namespace App\Controllers;
use App\Models\Employee;

class MedewerkerController extends Controller{
    /*
     * Show employee page
     */
    public static function index(){
        return self::renderWithLayout("medewerker", ['title' => 'Medewerkers overzicht', 'medewerker' => Medewerker::all()]);
    }
     /*
      * Show pvi page
      */
    public static function pvi(){
        return self::renderWithLayout("pvi", ['title' => 'Plan van inzet']);
    }
     /*
      * Show create pvi page
      */
    public static function createpvi(){
        return self::renderWithLayout("createpvi", ['title' => 'Nieuw plan van inzet']);
    }    
}