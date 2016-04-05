<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Database credentials
 */
\app\models\Model::setUsername($_ENV('DB_USERNAME'));
\app\models\Model::setPassword($_ENV('DB_PASSWORD'));

/*
 * Database
 */
app\models\Model::setDatabase($_ENV('DB_DATABASE'));