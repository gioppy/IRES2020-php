<?php

/*
* Calcolare il numero massimo tra 3 numeri
*/

$a = 10;
$b = 11;
$c = 12;

/*if ($a > $b) {
  if ($a > $c) {
    print "$a è maggiore di $b e $c";
  } else {
    print "$c è maggiore di $a e $b";
  }
} else {
  if ($b > $c) {
    print "$b è maggiore di $a e $c";
  } else {
    print "$c è maggiore di $a e $b";
  }
}*/

if ($a > $b && $a > $c) {
  print "$a è maggiore di $b e $c";
} else {
  if ($b > $a && $b > $c) {
    print "$b è maggiore di $a e $c";
  } else {
    print "$c è maggiore di $a e $b";
  }
}
