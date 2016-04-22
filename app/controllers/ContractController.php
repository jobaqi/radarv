<?php

namespace App\Controllers;
use App\Models\Contract;

class ContractController extends Controller{

	 public static function index(){
        return self::renderWithLayout("employee", ['title' => 'EmployeeOverView', 'employees' => Contract::all()]);
    }
}