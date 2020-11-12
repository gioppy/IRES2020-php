<?php

/*
* I numeri da 1 a 20 disposti in cinque righe di quattro colonne di numeri ciascuna
*/

for ($a = 1; $a <= 20; $a++) {
  $row = $a % 4;
  if ($row == 1 && $a != 1) {
    print '<br />';
  }
  print "$a ";
}
