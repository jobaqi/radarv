<?php

namespace App\Repositories;

class ContractRepository extends BaseRepository {
         
  public function __construct() {
      $this->setModel(new \App\Models\Contract());
    } 

    /**
     * Insert a new employee into the database
     * @param int Hours_WTF
     * @param int Weeks_available
     */

     static function insertIntoDatabase($data){
      $this->model->create($data);
      return $this;
    }
}