<?php
// salary cut 10%,5%,3% and then if salary is 50000<a<100000 then tex is 10%,etc 

$s = readline("enter your salary");
$hra = $s*0.1;
$da = $s*0.05;
$pf = $s*0.03;
$s = $s -($hra + $da + $pf);

if($s<500000){
print("you are not eligable");
}

elseif($s>=500000 && $s<=1000000){
    $s = $s - ($s*0.1);
    print("your in hand salary is $s");
}


elseif($s<1000000 && $s>=2000000){
    $s = $s - ($s*0.2);
    print("your in hand salary is $s");
}

elseif($s>2000000){
    $s = $s - ($s*0.3);
    print("your in hand salary is $s");
}

?>