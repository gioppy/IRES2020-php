<?php

/*
* Si scriva un programma in PHP che, dato un numero reale D, calcoli e stampi:
* 1. l’area del quadrato di lato D;
* 2. l’area del cerchio di diametro D;
* 3. l’area del triangolo equilatero di lato D
*/

define('RAD3_4', sqrt(3)/4);

$d = 10;

// 1.
$areaQuadrato = $d * $d;
print 'L\'area del quadrato di lato ' . $d . ' è ' . $areaQuadrato . '<br />';

// 2.
$raggio = $d / 2;
$areaCerchio = M_PI * ($raggio * $raggio);
print 'L\'area del cerchio di diametro ' . $d . ' è ' . $areaCerchio . '<br />';

// 3.
$areaTriangolo = RAD3_4 * ($d * $d);
print 'L\'area del triangolo equilatero di lato ' . $d . ' è ' . $areaTriangolo . '<br />';
