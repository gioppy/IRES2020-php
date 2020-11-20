<?php

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

/**
 * Calcola l'anno di nascita del CF
 * @param string $year
 * @return string
 */
function year(string $year): string {
  return substr($year, -2);
}

/**
 * Calcola il mese di nascita del CF
 * @param string $month
 * @return string
 */
function month(string $month): string {
  $monthLetter = [
    1 => 'A',
    'B',
    'C',
    'D',
    'E',
    'H',
    'L',
    'M',
    'P',
    'R',
    'S',
    'T',
  ];

  return $monthLetter[$month];
}

/**
 * Calcola il giorno di nascita del CF
 * @param string $day
 * @param bool $female
 * @return string
 */
function day(string $day, bool $female = false): string {
  if ($female) {
    return (int) $day + 40;
  }

  if ($day < 10) {
    return str_pad($day, 2, '0', STR_PAD_LEFT);
  }

  return $day;
}

/**
 * Calcola il comune di nascita del CF
 * @param string $state
 * @return string
 */
function state(string $state): string {
  $url = rawurlencode('http://webservices.dotnethell.it/codicefiscale.asmx/CodiceComune?NomeComune=' . $state);
  $code = simplexml_load_file($url);
  return strtoupper($code);
}

/**
 * Calcola il codice di controllo finale
 * @param string $cf
 * @return string
 */
function controlCode(string $cf): string {
  $even_char = [
    0 => 0,
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    "A" => 0,
    "B" => 1,
    "C" => 2,
    "D" => 3,
    "E" => 4,
    "F" => 5,
    "G" => 6,
    "H" => 7,
    "I" => 8,
    "J" => 9,
    "K" => 10,
    "L" => 11,
    "M" => 12,
    "N" => 13,
    "O" => 14,
    "P" => 15,
    "Q" => 16,
    "R" => 17,
    "S" => 18,
    "T" => 19,
    "U" => 20,
    "V" => 21,
    "W" => 22,
    "X" => 23,
    "Y" => 24,
    "Z" => 25
  ];

  $odd_char = [
    0 => 1,
    1 => 0,
    2 => 5,
    3 => 7,
    4 => 9,
    5 => 13,
    6 => 15,
    7 => 17,
    8 => 19,
    9 => 21,
    "A" => 1,
    "B" => 0,
    "C" => 5,
    "D" => 7,
    "E" => 9,
    "F" => 13,
    "G" => 15,
    "H" => 17,
    "I" => 19,
    "J" => 21,
    "K" => 2,
    "L" => 4,
    "M" => 18,
    "N" => 20,
    "O" => 11,
    "P" => 3,
    "Q" => 6,
    "R" => 8,
    "S" => 12,
    "T" => 14,
    "U" => 16,
    "V" => 10,
    "W" => 22,
    "X" => 25,
    "Y" => 24,
    "Z" => 23
  ];

  $final_char = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

  $cfArray = str_split($cf);
  $evenValue = 0;
  $oddValue = 0;

  foreach ($cfArray as $key => $value) {
    if ($key % 2 == 0) {
      $oddValue += $odd_char[$value];
    } else {
      $evenValue += $even_char[$value];
    }
  }

  $finalValue = ($evenValue + $oddValue) % 26;
  return $final_char[$finalValue];
}
