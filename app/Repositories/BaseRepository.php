<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;

/**
 * Description of BaseRepository
 *
 * @author Jordy
 */
abstract class BaseRepository implements RepositoryInterface {
  protected $model;
  
  /**
   * Get model
   * @return mixed
   */
  function getModel() {
    return $this->model;
  }

  /**
   * Set model
   * @param mixed $model
   * @return \App\Repositories\BaseRepository
   */
  function setModel($model) {
    $this->model = $model;
    return $this;
  }

  /**
   * Find all items with a WHERE clause
   * @param string $prop
   * @param string $val
   * @param boolean $first Get only first item or all
   * @return \Illuminate\Support\Collection
   */
  public function findBy($prop, $val, $first = false) {
    if($first === true){
      return $this->model->where($prop, $val)->first();
    }
    return $this->model->where($prop, $val)->get();
  }

  /**
   * Find item by id
   * @param integer $id
   * @return mixed
   */
  public function findById($id) {
    return $this->model->find($id);
  }

  /**
   * Get all items
   * @return \Illuminate\Support\Collection
   */
  public function getAll() {
    return $this->model->all();
  }

}
