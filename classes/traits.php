<?php

trait Car {
  protected $gears = 4;
  protected $weight = 0;
  protected $color = '';

  public function start() {
    //
    $this->color = 'red';
  }
}

trait Motor {

}

class Truck {
  use Car, Motor;

  public function __construct() {
    var_dump($this->weight);
  }
}

$truck = new Truck();
