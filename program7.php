<?php

// no of digits in numbers

$a = readline("enter the number");
$i=0;
while($a>0){
   $a = (int)($a / 10);
   $i++;
}

print("enter no length is $i");