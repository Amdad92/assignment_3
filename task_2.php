<?php
//create an array containing number 1 to 10.
$numbers=range(1,10);
print_r($numbers);

// Filter out Even number and keep only odd numbers
$oddNumbers=[];
foreach($numbers as $number){
    if($number%2 !==0){
        $oddNumbers[]=$number;
    }
}
//Print the resulting array after removing Even Number.
print_r($oddNumbers);