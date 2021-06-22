<?php 
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$numberList = [];

for ($i=0; count($numberList) < 15; $i++) { 
    
    $number = rand(0, 100);

    if( !in_array($number, $numberList)){
        
        $numberList[] = $number;
    }

}

var_dump($numberList);
?>