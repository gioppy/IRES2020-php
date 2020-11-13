<?php

/*
* Visualizzare il numero del mese corrispondente al nome inserito
*/

$name = ucfirst(strtolower($_GET['name']));

$months = [
  1 => 'Gennaio',
  'Febbraio',
  'Marzo',
  'Aprile',
  'Maggio',
  'Giugno',
  'Luglio',
  'Agosto',
  'Settembre',
  'Ottobre',
  'Novembre',
  'Dicembre',
];

if (in_array($name, $months)) {
  $indexes = array_keys($months, $name);
  print "Il mese $name corrisponde al numero {$indexes[0]}";
  /*foreach ($indexes as $index) {
    print "Il mese $name corrisponde al numero $index";
  }*/
} else {
  print 'Non esiste nessun indice associato a questo nome.';
}
