<?php

/*
* Si realizzi un programma in PHP che dato un numero, stampi il valore assoluto di tale numero.
*/

$a = -10;

if ($a >= 0) {
  print "Il valore assoluto di $a è $a";
} else {
  print "Il valore assoluto di $a è " . -$a;
}
