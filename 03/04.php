<?php

/*
* Visualizzare il nome del mese corrispondente al numero inserito
*/

$number = $_GET['number'];

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

if (!is_numeric($number)) {
  print 'Il valore inserito deve essere numerico!';
}

if (array_key_exists($number, $months)) {
//if (isset($months[$number])) {
  print $months[$number];
} else {
  print 'Non esiste nessun mese con questo indice!';
}
