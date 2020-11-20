<?php

abstract class Player {
  public abstract function play();

  public abstract function stop();

  public function pause() {
    var_dump('Pause');
  }

  public abstract function rewind(int $times);

  public abstract function forward(int $times);
}

class MoviePlayer extends Player {

  public function play() {
    // TODO: Implement play() method.
  }

  public function stop() {
    // TODO: Implement stop() method.
  }

  public function rewind(int $times) {
    // TODO: Implement rewind() method.
  }

  public function forward(int $times) {
    // TODO: Implement forward() method.
  }
}
