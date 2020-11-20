<?php

class DbConfig {
  private static $host = 'HOST';
  private static $user = 'USER';
  private static $password = 'PASSWORD';

  public static function connect() {
    //return "{$this->host}@{$this->user}:{$this->password}";
    return self::$host . '@' . self::$user . ':' . self::$password;
  }
}

/*$conn = new DbConfig();
$conn->connect();*/

$conn = DbConfig::connect();
