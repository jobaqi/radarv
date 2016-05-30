<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\Models\Medewerker;
use App\Models\Contract;
use App\Helpers\Hash;
/**
 * Handles authentication of this app
 *
 * @author Jordy
 */
class AuthController extends Controller{

  /**
   * Render login page
   */
  static function showLogin(){
    return Self::renderWithLayout("auth/login", ['title' => 'Login']);
  }
  
  static function showRegister(){
    return Self::renderWithLayout("auth/register", ['title' => 'Registreren']);
  }
  /**
   * Authenticate an employee
   * @param String $username
   * @param String $password
   */
  function authenticate(){
     
  	}
  
  /**
   * Insert a new employee into the database
   * @return \App\Repositories\EmployeeRepository
   */
  static function register(){
    $data =  \Flight::request()->data;

  	if(count(Medewerker::where('peopleSoftNummer', $data->peopleSoftNummer)->get()) > 0){
  		Medewerker::where('peopleSoftNummer', $data->peopleSoftNummer)->first()->restore();
  	}
  	
  	else{
  		$medewerker = Medewerker::create([
	  		'peopleSoftNummer' => $data->people_soft_nummer,
	  		'voornaam' => $data->voornaam,
	  		'achternaam' => $data->achternaam,
	  		'geboorteDatum' => $data->gd_jaar.$data->gd_maand.$data->gd_dag,
	  		'password' => Hash::make($data->password)
	  	]);

	  	Contract::create([
	  		'wekenInzetbaar' => $data->weken_inzetbaar,
	  		'aanstellingsOmvangWTF' => str_replace(',', '.', $data->aanstelling_WTF),
	  		'functie_id' => $data->functie,
	  		'medewerker_id' => $medewerker->id
	  	]);

	  	foreach($data->regelingen as $regeling){
	  		$medewerker->regelingen()->attach($regeling);
	  	}
  	}
    return \Flight::redirect(url("/medewerker"));
  }
  
 static function delete($id){
 	Medewerker::find($id)->delete();
 	return \Flight::redirect(url("/medewerker"));
 }

}
