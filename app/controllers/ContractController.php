<?php

namespace App\Controllers;

class ContractController extends Controller{

	 public static function index(){
        $crepo = new \App\Repositories\ContractRepository();
        return self::renderWithLayout("employee", ['title' => 'EmployeeOverView', 'employees' => $crepo->getAll()]);
    }
}