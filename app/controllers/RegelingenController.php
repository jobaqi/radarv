<?php 

namespace App\Controllers;
use App\Models\Regeling;

class RegelingenController extends Controller{

	public static function regelingen(){
		 return self::renderWithLayout("regeling", ['title' => 'RegelingenOverView', 'regelingen' => Regeling::all()]);
	}
}