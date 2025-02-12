<?php

function multiplication($a, $b) {
    return $a * $b;
}

function test_multiplication() {
    echo (multiplication(2, 3) == 6 ? 'True' : 'False') . "\n"; 
    echo (multiplication(-1, 5) == -5 ? 'True' : 'False') . "\n";
    echo (multiplication(0, 10) == 0 ? 'True' : 'False') . "\n";  
    echo (multiplication(0, 5) == 2 ? 'True' : 'False') . "\n";  
}

test_multiplication();

?>
