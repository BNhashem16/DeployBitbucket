<?php

   /*
      |--------------------------------------------------------------------------
      | Clear Cache options
      |--------------------------------------------------------------------------
      |
      | clearCache: true or false
      | if you want to clear cache but it true, else but it false

   */
   $clearCache = true;

/**
 * @var bool
*/
$clearConfig = true;

/**
 * @var bool
*/
$clearRoute = true;

/**
 * @var bool
*/
$clearView = true;

   /*
    |--------------------------------------------------------------------------
    | Cleanup options
    |--------------------------------------------------------------------------
    |
    | cleanupVersions: true or false
    | cleanupVersionsCount: 1, 2, 3, ...., 100
    */

    $cleanupVersions = true;

    $cleanupVersionsCount = 4;

   /*
    |--------------------------------------------------------------------------
    | Migrations options
    |--------------------------------------------------------------------------
    |
    | Supported: 'migrate', 'migrate:fresh', 'migrate:fresh --seed', 'migrate:refresh --seed', 'migrate:refresh'
    */
    $migration = '';

   $additionalTasks = [];
