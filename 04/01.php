<?php

/*
* Calcolo del codice fiscale
*/

$consonanti = ['B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Y','Z'];
$vocali = ['A','E','I','O','U'];

/**
 * Cerca se i caratteri della stringa sono presenti nei caratteri validi
 * @param array $string La stringa trasformata in array di caratteri
 * @param int $length La lunghezza della string
 * @param array $chars L'array di caratteri da valutare
 * @return array
 */
function findChar(array $string, int $length, array $chars): array {
  $output = [];

  for ($i = 0; $i < $length; $i++) {
    if (in_array($string[$i], $chars)) {
      $output[] = $string[$i];
    }
  }

  return $output;
}

/**
 * Calcola il cognome del CF
 * @param string $name
 * @param array $consonanti
 * @param array $vocali
 * @return string
 */
function lastName(string $name, array $consonanti, array $vocali): string {
  $length = strlen($name);

  $nameArray = str_split(strtoupper($name));

  $output = findChar($nameArray, $length, $consonanti);

  if (count($output) < 3) {
    $output = array_merge($output, findChar($nameArray, $length, $vocali));
  }

  if (count($output) < 3) {
    $output[] = 'X';
  }

  $output = array_slice($output, 0, 3);

  return implode('', $output);
}

/**
 * Calcola il nome del CF
 * @param string $name
 * @param array $consonanti
 * @param array $vocali
 * @return string
 */
function firstName(string $name, array $consonanti, array $vocali): string {
  $length = strlen($name);

  $nameArray = str_split(strtoupper($name));

  $output = findChar($nameArray, $length, $consonanti);

  if (count($output) > 3) {
    unset($output[1]);
  }

  if (count($output) < 3) {
    $output = array_merge($output, findChar($nameArray, $length, $vocali));
  }

  if (count($output) < 3) {
    $output[] = 'X';
  }

  $output = array_slice($output, 0, 3);

  return implode('', $output);
}

print lastName($_GET['lastname'], $consonanti, $vocali);
print firstName($_GET['firstname'], $consonanti, $vocali);
