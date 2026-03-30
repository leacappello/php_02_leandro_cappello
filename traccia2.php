<?php

$numbers = [2, 5, 8, 11, 14, 7, 20];

$sum = 0;
$count = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $sum += $number;
        $count++;
    }
}

// Controllo per evitare divisione per zero
if ($count > 0) {
    $average = $sum / $count;
    echo "Media dei numeri pari: " . $average;
} else {
    echo "Nessun numero pari trovato";
}

?>