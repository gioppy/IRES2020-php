<?php

/*
* Si scriva un programma PHP che dati due numeri, detti A e B, determini le seguenti informazioni, stampandole a video:
* 01 - determini se B è un numero positivo o negativo;
* 02 - determini se A è un numero pari o dispari;
* 03 - calcoli il valore di A + B;
* 04 - determini quale scelta dei segni nell’espressione (±A) + (±B) porta al risultato massimo, e quale è questo valore massimo
*/

$a = 10;
$b = -3;

// 01.
if ($b >= 0) {
  print "Il numero $b è positivo<br />";
} else {
  print "Il numero $b è negativo<br />";
}

// 02.
/*$pair = $a % 2;
if ($pair == 0) {*/
if ($a % 2 == 0) {
  print "Il numero $a è pari<br />";
} else {
  print "Il numero $a è dispari<br />";
}

// 03.
/*$sum = $a + $b;
print "La somma di $a + $b è $sum<br />";*/
print "La somma di $a + $b è " . ($a + $b) ."<br />";

// 04.
/*if ($a < 0) {
  $a = -$a;
}

if ($b < 0) {
  $b = -$b;
}*/

if ($a < 0) $a = -$a;
if ($b < 0) $b = -$b;

print "Il valore massimo della somma di +-$a + +-$b è " . ($a + $b) ."<br />";
