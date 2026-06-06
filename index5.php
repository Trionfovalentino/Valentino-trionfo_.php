<?php

$numbers = [4, 7, 12, 19, 8, 3, 10, 15, 2];

$sumOfEvens   = 0;
$countOfEvens = 0; 

foreach ($numbers as $number) {
    
    if ($number % 2 == 0) {
        $sumOfEvens += $number; 
        $countOfEvens++;        
    }
    
}

if ($countOfEvens > 0) {
    $average = $sumOfEvens / $countOfEvens;
    echo "I numeri pari trovati sono: " . $countOfEvens . "\n";
    echo "La loro somma è: " . $sumOfEvens . "\n";
    echo "La media dei numeri pari è: " . $average . "\n";
} else {
    echo "Non ci sono numeri pari all'interno dell'array. Impossibile calcolare la media.\n";
}

?>