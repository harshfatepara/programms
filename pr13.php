<?php

// leap year

$a = readline("enter year");
if($a%4==0){
    if($a%400==0){
        print("year is leap year");
    }
    elseif($a%100==0){
        print("year is not leap year");
    }
    else{
        print("year is leap year");
    }
}
else{
    print("year is not leap year");
}
