<?php

$callable = function () {
  return 'This is a collable variable';
};

/*var_dump($callable);
print $callable();*/

$arr = [1,2,3,4,5];
$arrSquare = array_map(function ($item) {
  return $item * 2;
}, $arr);

var_dump($arr);
var_dump($arrSquare);

function remap($item) {
  return $item * 3;
}

$arrCubic = array_map('remap', $arr);

var_dump($arrCubic);
