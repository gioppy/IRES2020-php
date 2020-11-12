<?php

/*
* Il fattoriale dei numeri da 1 a 9; l'output deve essere organizzato per righe
*/

for ($a = 1; $a <= 9; $a++) {
  $result = 1;
  for ($i = 1; $i <= $a; $i++) {
    $result = $result * $i;
  }
  print $result . '<br />';
}
