<?php

interface PlayerInterface {
  public function play();

  public function stop();

  public function pause();

  public function rewind(int $times);

  public function forward(int $times);
}

class MoviePlayer implements PlayerInterface {
  private $movie = '';
  private $seek = 0;

  public function __construct(string $movie) {
    $this->movie = $movie;
  }

  public function play() {
    if ($this->seek == 0) {
      var_dump("Start playing {$this->movie}");
    } else {
      var_dump("Continue playing {$this->movie}");
    }
    $this->seek += 1;
  }

  public function stop() {
    var_dump("Stop playing {$this->movie}");
    $this->seek = 0;
  }

  public function pause() {
    var_dump("Pause {$this->movie}");
  }

  public function rewind(int $times) {
    // TODO: Implement rewind() method.
  }

  public function forward(int $times) {
    // TODO: Implement forward() method.
  }
}

$player = new MoviePlayer('test.mp4');
$player->play();
$player->pause();
$player->play();
$player->stop();
