<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;

/**
 *
 * @author Jordy
 */
interface RepositoryInterface {
  function findById($id);
  function getAll();
  function findBy($prop, $val);
}
