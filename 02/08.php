<?php

/*
* Si scriva un programma in PHP dati i tre lati di un triangolo (detti A, B e C), determini:
* 01 - se il triangolo è equilatero
* 02 - se il triangolo è isoscele
* 03 - se il triangolo è scaleno
* 04 - se il triangolo è rettangolo
*/

$a = 10; //15
$b = 10; //12
$c = 10; //9

// Equilatero
if ($a == $b && $b == $c) {
  print "Il triangolo è equilatero";
} else {
  // Isoscele
  if ($a == $b || $b == $c || $a == $c) {
    print "Il triangolo è isoscele";
  }

  // Scaleno
  if ($a != $b && $b != $c && $a != $c) {
    print "Il triangolo è scaleno";
  }
}

// 04.
$quadratoA = $a * $a;
$quadratoB = $b * $b;
$quadratoC = $c * $c;

if (($quadratoA == $quadratoB + $quadratoC) ||
  ($quadratoB == $quadratoA + $quadratoC) ||
  ($quadratoC == $quadratoA + $quadratoB)) {
  print "Il triangolo è rettangolo";
}
