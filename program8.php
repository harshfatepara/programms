<?php

$a = readline("enter the first age");
$b = readline("enter the secod age");
$c = readline("enter the third age");

if($a>$b){
    if($a>$c){
        print("maximum age is $a");
    }
    else{
        print("maximum age is $c");
    }
}
else{
    if($b>$c){
        print("maximum age is $b");
    }
    else{
        print("maximum age is $c");
    }
}

