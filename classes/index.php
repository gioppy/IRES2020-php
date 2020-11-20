<?php

class Car {
  public $color = '';
  protected $weight = 0;
  private $gears = 4;
  protected $currentGear = 0;

  public function start() {
    var_dump('Accendi auto');
  }

  public function changeGear(int $gear) {
    if ($gear > $this->gears) {
      throw new Exception('Non puoi inserire marce maggiori rispetto a quante marce hai!');
    }

    if ($this->currentGear != $gear) {
      $this->currentGear = $gear;
    }
  }
}

class Truck extends Car {
  protected $weight = 50;
}

$car = new Car;
$color = $car->color;

$car->start();
$car->changeGear(1);
$car->changeGear(6);

var_dump($color);

$car->color = 'red';

$truck = new Truck;
$truck->color = 'blue';

var_dump($car);
var_dump($truck);
