<?php

$a = 10;
$b = 'Hello World';
$c = [1,2,3];
$d = new StdClass();

function byValue($a) {
  $a = 3;
  var_dump($a);
}

byValue($a);
var_dump($a);

byValue($b);
var_dump($b);

function byValueArray($arr) {
  array_push($arr, 4);
  var_dump($arr);
}

byValueArray($c);
var_dump($c);

function byValueObj($obj) {
  $obj->name = 'Pippo';
  var_dump($obj);
}

var_dump($d);
byValueObj($d);
var_dump($d);

function byReferenceArray(&$arr) {
  array_push($arr, 4);
  var_dump($arr);
}

byReferenceArray($c);
var_dump($c);
