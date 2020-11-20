<?php

function autoload($className) {
  $path = str_replace('\\', '/', $className);
  $file = $path . '.php';

  if (file_exists($file)) {
    include_once $file;
  }
}

spl_autoload_register('autoload');

/*$controller = new \Controllers\User();
$model = new \Models\User();*/

use Controllers\User;
use Models\User as Model;

$controller = new User();
$model = new Model();
