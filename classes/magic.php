<?php

class Car {

  private $color = 'red';

  public function __get($name) {
    var_dump($name);
    if (isset($this->$name)) {
      return $this->$name;
    }

    return 0;
  }

  public function __set($name, $value) {
    $this->$name = $value;
  }

  public function __call($name, $arguments) {
    var_dump($name, $arguments);
  }

  public function __toString() {
    return 'Car!';
  }
}

$car = new Car();
var_dump($car->color);
$car->weight = 50;
$car->start(10);
var_dump($car);
print $car;
