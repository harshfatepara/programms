<?php
$a = readline("enter number no 1 is for cm to ft,/n no 2 is for kl to miles,/n
                            no 3 is for us doller to indianruppies,/n
                            no 4 for exit");
if ($a == 1) {
    $cm = readline("enter number in cms :");
    $feet = $cm * 0.0328084 ;
    print("$cm cm = $feet ft");
}
elseif ($a == 2) {
    $km = readline("enter number in km:");
    $miles = $km * 0.6 ;
    print("$km km = $miles miles");
}
elseif ($a == 3) {
    $usd = readline("enter amount in usd:");
    $inr = $usd * 82 ;
    print("$usd usd = $inr rupee");
}
elseif( $a == 4){
    print("exit");
}



?>