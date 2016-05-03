<?php 

namespace App\Controllers;
use App\Models\Ruling;

class RulingController extends Controller{

	public static function index(){
		 return self::renderWithLayout("employee", ['title' => 'EmployeeOverView', 'employees' => Ruling::all()]);
	}
}