<?php return array (
  'debug' => false,
  'database' => 
  array (
    'driver' => 'mysql',
    'host' => 'db',
    'port' => 3306,
    'database' => 'flarum',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => false,
    'engine' => 'InnoDB',
    'prefix_indexes' => true,
  ),
  'url' => 'https://flarum.simai.life',
  'paths' => 
  array (
    'api' => 'api',
    'admin' => 'admin',
  ),
  'headers' => 
  array (
    'poweredByHeader' => true,
    'referrerPolicy' => 'same-origin',
  ),
);