<?php

 /**
  * @var bool
  */
 $migrate = false;

/**
 * @var bool
 */
$migrateAndSeed = false;

/**
 * @var bool
 */
$migrateAndFreshAndSeed = false;

/**
 * @var bool
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
    | Supported: 'migrate', 'migrate:fresh', 'migrate:fresh --seed'
    */
    $migration = 'migrate';
