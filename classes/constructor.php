<?php

class Car {
  protected $color = '';
  protected $weight = 0;
  protected $gears = 4;
  protected $currentGear = 0;

  public function __construct(int $gears, string $color) {
    $this->gears = $gears;
    $this->color = $color;
  }

  public function setWeight(int $weight) {
    if ($this->weight == 0) {
      $this->weight = $weight;
    }
  }

  public function getWeight() {
    return $this->weight;
  }
}

class Truck extends Car {
  private $hasTrailer = false;

  public function setTrailer(bool $trailer) {
    $this->hasTrailer = $trailer;

    if ($trailer) {
      $this->weight += 100;
    }
  }
}

$car = new Car(5, 'red');
$truck = new Truck(6, 'black');
$truck->setTrailer(true);

$car->setWeight(50);
$car->setWeight(10);

$weight = $car->getWeight();

var_dump($car);
var_dump($truck);
