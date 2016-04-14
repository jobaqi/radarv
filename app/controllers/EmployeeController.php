<?php 

/*
 * @author Bart Allert
 */




	/**
     * Show employee page
     */
    public static function employee(){
        return self::renderWithLayout("employee", ['title' => 'EmployeeOverView']);
    }
	 /**
     * Show pvi page
     */
    public static function pvi(){
        return self::renderWithLayout("pvi", ['title' => 'RadarV-PVI']);
    }

    /*
     * create a employee
     */

	public static function store(){

		 App\Models\employee::create(['first_name' => '',
									  'last_name' => '',
									  'date_of_birth' =>'']);
	}

	public static function View(){

		$employees = App\Models\employee::all();

		var_dump($employees);
	}
}
