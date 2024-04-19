<?php
$arr = [5,4,2,1,3,6,5,4,5,6,4];
// reverse of array without using sort method,assending array, decending array 

// min and maximum of array 



$max=$arr[0];
$min=$arr[0];
$i=0;
while($i<count($arr)){
    if($max<$arr[$i]){
        $max = $arr[$i];
    }

    if($min>$arr[$i]){
      $min = $arr[$i];
    }
    $i++;
    
}
print("maximum is $max and minimium is $min");

?>