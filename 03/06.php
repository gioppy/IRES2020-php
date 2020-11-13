<?php

/*
* Scrivere uno script php che, dato un array di interi
* 01 - stampa tutti i numeri contenuti nell'array
* 02 - Stampa il minimo ed il massimo dei numeri contenuti nell'array
* 03 - Stampa la media dei numeri contenuti nell'array
*/

$array = [1,2,3,4,10,6,7,8,9,5];

// 01.
$total = count($array);
for ($i = 0; $i < $total; $i++) {
  print $array[$i] . ' - ';
}

// 02.
sort($array, SORT_NUMERIC);
print "Il numero minimo nell'array è {$array[0]}";
print "Il numero massimo nell'array è {$array[count($array) - 1]}";

// 03.
$sum = 0;

$total = count($array);
for ($i = 0; $i < $total; $i++) {
  //$sum = $sum + $array[$i];
  $sum += $array[$i];
}

print "La media di tutti i valori nell'array è " . $sum/$total;
