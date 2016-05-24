<?php 

namespace App\Controllers;
use App\Models\Regeling;

class RegelingenController extends Controller{

	public static function index(){
		 return self::renderWithLayout("regelingen", ['title' => 'RegelingenOverView', 'regelingen' => Regeling::all()]);
	}
}