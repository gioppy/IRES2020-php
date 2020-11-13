<?php

/**
 * Stampa una stringa
 * @return void
 */
function simpleLog() {
  print 'This is a function!';
}

simpleLog();

$string = 'Another string';

/**
 * @param $string
 * @return string
 */
function stringLog(string $string): string {
  return strtoupper($string);
}

print stringLog('This is a function!');
$log = stringLog('This is a function!');

/**
 * @return string
 */
function nLog() {
  $content = '';

  /**
   * @var int $argsCount
   */
  $argsCount = func_num_args();

  for ($i = 0; $i < $argsCount; $i++) {
    $content .= func_get_arg($i);
  }

  return $content;
}

print nLog('Hello', 'World', 'Pippo');

function sumAll(int $counter, int $begin = 0) {
  $sum = 0;

  for ($i = $begin; $i < $counter; $i++) {
    $sum += $i;
  }

  return $sum;
}

print sumAll(5, 2);

function nSpreadLog(...$args) {
  $content = '';

  foreach ($args as $arg) {
    $content .= $arg;
  }

  return $content;
}

print nSpreadLog('Hello', 'World', 'Pippo');
