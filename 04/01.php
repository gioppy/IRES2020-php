<?php

//include_once 'support/cf.php';
require_once 'support/cf.php';

/*
* Calcolo del codice fiscale
*/

$consonanti = ['B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Y','Z'];
$vocali = ['A','E','I','O','U'];

$cf = '';

$cf .= lastName($_GET['lastname'], $consonanti, $vocali);
$cf .= firstName($_GET['firstname'], $consonanti, $vocali);
$cf .= year($_GET['year']);
$cf .= month($_GET['month']);
$cf .= day($_GET['day'], $_GET['female']);
$cf .= state($_GET['state']);
$cf .= controlCode($cf);

print $cf;
