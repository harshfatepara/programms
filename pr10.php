<?php
//  sum of no 
$a = readline("enter the number");

$i=0;
$b = 0;
$sum=0;

while($a>0){
    $b = $a % 10;
    $sum +=$b;
    $a = $a/10;
    $i++;
}

print("enter no sum is $sum");