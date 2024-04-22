<?php

$event = readline("enter the name of event : ").PHP_EOL;
echo $event;

$f_name = readline("first name : ");
$l_name = readline("last name : ").PHP_EOL;
print("hello $f_name  $l_name");
$number = readline("number of gusses : ").PHP_EOL;

$minute = readline("enter the number of minutes in the event : ").PHP_EOL;

$costperhour = 18.50;
$costperminute = .40;
$costofdinner = 20.70;
$servent = ceil(($number/20));
print("number of servent is $servent").PHP_EOL;

// cost of one servent 
$cost1 = ($minute/60)*$costperhour;
$cost2 = ($minute%60)*$costperminute;
$costforoneserver = $cost1 + $cost2 ;
print("cost for one server is $costforoneserver").PHP_EOL;

// cost for food 
$totalfoodcost = $number * $costofdinner;
print("total food cost is $totalfoodcost").PHP_EOL;

// get average cost per person 
$averagecost = $totalfoodcost/$number;
print("average cost per person is : $averagecost").PHP_EOL;

// get total cost 
$totalcost = $totalfoodcost + ($costforoneserver*$servent);
print("get total cost of event is : $totalcost");

?>







