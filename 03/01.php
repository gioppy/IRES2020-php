<?php

/*
* Convertire la lunghezza di una maratona da miglia yarde in km.
* Una maratona = 26 miglia e 385 yard. Per convertire le miglia in km è necessario moltiplicarle per 1,609.
* Per convertire le yard in miglia si divide per 1760,0
*/

$miles = 26;
$yard = 385;

$kilometers = 1.609 * ($miles + $yard / 1760);

print "La maratona è lunga $kilometers km.";
