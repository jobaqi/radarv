<?php 

namespace App\Controllers;
use App\Models\Regelingen;

class RegelingenController extends Controller{

	public static function index(){
		 return self::renderWithLayout("employee", ['title' => 'EmployeeOverView', 'employees' => Regelingen::all()]);
	}
}