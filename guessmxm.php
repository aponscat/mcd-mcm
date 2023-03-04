<?php

$nen = readline("Hola, soc Siri, com et dius?\n");
$first = readline("Introdueix el primer número:\n");
$second = readline("Introdueix el segon número:\n");
$guessed_mcd = readline("Quin creus que és el MCD?\n");
$guessed_mcm = readline("Quin creus que és el MCM?\n");
$good_mcd=mcd($first, $second);
$good_mcm=mcm($first, $second);
$points=0;

if ($guessed_mcd==$good_mcd) {
    echo "L'MCD és correcte! \n";
    $points++;
} else {
    echo "Error el MCD correcte és $good_mcd i tu has dit $guessed_mcd! \n";
    beep();
}

if ($guessed_mcm==$good_mcm) {
    echo "L'MCM és correcte! \n";
    $points++;
} else {
    echo "Error el MCM correcte és $good_mcm i tu has dit $guessed_mcm! \n";
    beep();
}

echo "$nen la teva puntuació final és: (".($points*50).")\n";

function beep() {
    echo "\x07";
}

function mcd($a,$b) {
 while (($a % $b) != 0) {
  $c = $b;
  $b = $a % $b;
  $a = $c;
 }
 return $b;
}

function mcm($a,$b) {
 return ($a * $b) / mcd($a,$b);
}


