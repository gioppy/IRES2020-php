<?php

/*
* Visualizzare il nome del mese corrispondente al numero inserito
*/

var_dump($_GET);

if (isset($_GET['number'])) {
  $number = $_GET['number'];
  $result = 'Il numero che hai inserito non è corretto!';

  switch ($number) {
    case 1:
      $result = 'Gennaio';
      break;

    case 2:
      $result = 'Febbraio';
      break;

    case 3:
      $result = 'Marzo';
      break;

    case 4:
      $result = 'Aprile';
      break;

    case 5:
      $result = 'Maggio';
      break;

    case 6:
      $result = 'Giugno';
      break;

    case 7:
      $result = 'Luglio';
      break;

    case 8:
      $result = 'Agosto';
      break;

    case 9:
      $result = 'Settembre';
      break;

    case 10:
      $result = 'Ottobre';
      break;

    case 11:
      $result = 'Novembre';
      break;

    case 12:
      $result = 'Dicembre';
      break;

    /*default:
      $result = 'Il numero che hai inserito non è corretto!';
      break;*/
  }

  print $result;
}
