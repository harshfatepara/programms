<?php

// reverse number 

$a = readline("enter the number");
$b = 0;
$sum=0;

while($a>0){
    $b = $a % 10;
    $sum = (10*$sum) + $b;
    $a = (int)($a/10);

}

print("enter no sum is $sum");